<?php
	include('connect.php');
	$q="SELECT id,review INTO OUTFILE 'C:/xampp/htdocs/web/file/rev.txt' FIELDS TERMINATED BY ',' FROM reviews ORDER BY id";
	mysqli_query($connection,$q);
	
	$pyscript = 'p1.py';
	exec("$pyscript", $output);
	
	$f=fopen("file/Output.txt", "r");
	$data=array();
	
	$count=0;
	ini_set('max_execution_time', 300);
	
	while(!feof($f))
	{
		$suspected=0;
		$data=explode(" ",fgets($f));
		$rid=$data[0];
		$sent=$data[1];
		$q1="SELECT pid FROM reviews WHERE id='$rid'";
		$result1=mysqli_query($connection,$q1);
		$row=mysqli_fetch_assoc($result1);
		$pid=$row['pid'];
		$q="UPDATE reviews SET sentiment='$sent' WHERE id='$rid'";
		mysqli_query($connection,$q);
		$q2="SELECT AVG(sentiment) AS avg FROM reviews WHERE pid='$pid'";
		$result=mysqli_query($connection,$q2);
		$row1=mysqli_fetch_assoc($result);
		$ci=$row1['avg'];
		
		if($sent<($ci-0.4) || $sent>($ci+0.4))
		{
			
			$suspected=1;
		}
		$q3="UPDATE reviews SET Suspected='$suspected' WHERE id='$rid'";
		
			mysqli_query($connection,$q3);
	}
	
	header("Location:mark.php");
?>