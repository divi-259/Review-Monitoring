<?php
session_start();
if(isset($_SESSION['logged_in']))
{
	include('connect.php');
	$uid=$_SESSION['id'];
	$pid=$_SESSION['pid'];
	
	if(isset($_POST['save']))
	{
		$review=$_POST['rev'];
		if($review !=NULL)
		{
			$suspected=0;
			$q="INSERT INTO reviews(pid,uid,review) VALUES('$pid','$uid','$review')";
			$result=mysqli_query($connection,$q);
			
			$q="SELECT id,review INTO OUTFILE 'C:/xampp/htdocs/web/rev.txt' FIELDS TERMINATED BY ',' FROM reviews WHERE pid='$pid' AND uid='$uid'";
			mysqli_query($connection,$q);
			
			$pyscript = 'p1.py';
			exec("$pyscript", $output);
			
			$f=fopen("Output.txt", "r");
			
			$data=explode(" ",fgets($f));
			$rid=$data[0];
			$sent=$data[1];
			
			$q1="SELECT pid FROM reviews WHERE id='$rid'";
			$result1=mysqli_query($connection,$q1);
			$row1=mysqli_fetch_assoc($result1);
			$pid=$row1['pid'];
			echo $pid;
			
			$q2="SELECT AVG(sentiment) AS avg FROM reviews WHERE pid='$pid'";
			$result=mysqli_query($connection,$q2);
			$row=mysqli_fetch_assoc($result);
			$ci=$row['avg'];
			
			$q="UPDATE reviews SET sentiment='$sent' WHERE id='$rid'";
			mysqli_query($connection,$q);
			
			if($sent<($ci-0.4) || $sent>($ci+0.4))
			{
				$suspected=1;
			}
			
			$q3="UPDATE reviews SET Suspected='$suspected' WHERE id='$rid'";
			if($suspected==1)
			{
				mysqli_query($connection,$q3);
			}
			
			$pyscript = 'p2.py';
			exec("$pyscript", $output);
			
			header("Refresh:0;url='viewreview.php'");
		}
	}
}
else 
{
	echo "<script type='text/javascript'>alert('You are not logged in. Please login first.')</script>";
	header("Refresh:0;url=Login.php");
}
?>