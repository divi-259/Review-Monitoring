<?php
	session_start();
	include('connect.php');
	$q="SELECT * FROM `reviews` GROUP BY ip,pid HAVING COUNT(*)>5 " ;
	$py = 'p2.py';
	exec("$py", $output);
	$result=mysqli_query($connection,$q);
	
	while($row=mysqli_fetch_assoc($result))
	{
			$ip=$row['ip'];
			$pi=$row['pid'];
			$r="UPDATE reviews SET Suspected='1' WHERE ip='$ip' AND pid='$pi'";
			mysqli_query($connection,$r);	
	}
	$q4="SELECT * FROM reviews WHERE suspected=1";
	$res=mysqli_query($connection,$q4);
	$count=mysqli_num_rows($res);
	echo "<script type='text/javascript'>alert('Marked ".$count." review(s)')</script>";
	header("Refresh:0;url='admin.php'");
	
?>
