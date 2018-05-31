
<?php
include('connect.php');
$review =$_POST['del'];
foreach($review as $user )
	{
		$q="DELETE FROM reviews WHERE id='$user'";
		mysqli_query($connection,$q);
		
	}
	
	header("Refresh:0;url='delete.php'");
	
	?>