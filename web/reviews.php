
<!DOCTYPE html>
  <?php
 session_start();
 if(!isset($_SESSION['logged_in']))
	 header("Location:Login.php");
 else
 {
	 if(isset($_SESSION['id']))
	 {
		 include('connect.php');
		 $id=$_SESSION['id'];
		 $query="SELECT * FROM user1 WHERE id='$id'";
		 $result=mysqli_query($connection,$query);
		 $row=mysqli_fetch_assoc($result);
		 $fname=$row['fname'];
		 $lname=$row['lname'];
	 }		 
 }
 ?>
<html>


<head>
<title><?php echo 'My Reviews- '.$fname.' '.$lname; ?></title>
<link rel="stylesheet" href="userstyle.css" >
</head>
<body bgcolor="#D7DFAC">

<div class="container">

<header>
<br>
   <a href="index.php" style="text-decoration:none"><center><b><div class="title"><font size="20px">Shop Genuine</font></div></b></center></a>
   <br><br>
<div id="Top_menu" align="left" STYLE="position:relative"> 
	<a href="index.php"><div class="tab">Home</div></a>
	<a  href="about.php"><div class="tab">About Us</div></a>
	<a  href="contact.php"><div class="tab">Contact Us</div></a>

	<button type="button" class="btn logout" onclick="location.href='logout.php'">LOGOUT</button>
	<a style="text-decoration:none" href="overview.php">
	<div class="icon">
	<?php echo "<img src=".$row['photo']." width='21px' height='20px' STYLE='border-radius:10px;position:absolute;top:2px'/>" ?>
	<font size="5px"><b>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $fname; ?> </b><br></font>
	</div>
	</a>
</div>    
  
</header>
  
<nav> 
  <ul>
    <li><a href="mobile.php">Mobiles</a><hr>
				<ul >
					<li><a href="m_samsung.php">Samsung</a></li>
					<li><a href="m_nokia.php">Nokia</a></li>
					<li><a href="m_apple.php">Apple</a></li>
					<li><a href="m_sony.php">Sony</a></li>
					
					<li><a href="m_lenovo.php">Lenovo</a></li>
				</ul>
				</li>
    <li><a href="laptop.php">Laptops</a><hr>
			<ul>
					<li><a href="l_samsung.php">Samsung</a></li>
					<li><a href="l_nokia.php">Toshiba</a></li>
					<li><a href="l_dell.php">Dell</a></li>
					<li><a href="l_sony.php">Sony</a></li>
					
					<li><a href="l_lenovo.php">Lenovo</a></li>
				</ul>
	</li>
    <li><a href="tablet.php">Tablets</a><hr>
			<ul>
					<li><a href="t_samsung.php">Samsung</a></li>
					<li><a href="t_htc.php">HTC</a></li>
					<li><a href="t_apple.php">Apple</a></li>
					
					<li><a href="t_asus.php">ASUS</a></li>
					<li><a href="t_lenovo.php">Lenovo</a></li>
				</ul>
			</li>
  </ul>
</nav>

<article>
<div class="promenu">
<div  id="t1">
<button type="button" class="b1" id="b11" onclick="location.href='overview.php'">Overview</button>
</div>
<div  id="t2">
<a href="settings.php"><button type="button" class="b1" id="b12" onclick="location.href='settings.php'">Settings</button></a>
</div>
<div id="t3">
<button type="button" class="b1" id="b13" onclick="location.href='reviews.php'">My Reviews</button>
</div>
<br><br><br>
</div>
<ul STYLE="list-style-type:none">

<?php

$q="SELECT * FROM reviews WHERE uid='$id'";
$result =mysqli_query($connection,$q);
while($row = mysqli_fetch_assoc($result))
{ 
			$rev=$row['review'];
			$pid=$row['pid'];
			$q="SELECT * FROM products WHERE pid='$pid'";
			$result1=mysqli_query($connection,$q);
			$row1=mysqli_fetch_assoc($result1);
			$ph=$row1['p_image'];
			$name=$row1['pfullname'];
			$pn=$row1['pname'];
			echo '&nbsp;&nbsp;&nbsp;&nbsp;<li><div style="position:relative;border:1px solid; padding:10px;height:200px; width:1000px ; background-image:url(\'back3.jpg\')">
<img src='.$ph.' height="180" width="190" STYLE="position:absolute; TOP:20px; LEFT:20px">

<text style="position: absolute; top:15px; left:420px;font-size:20px"> <h2>'.$name.' </h2> </text>
<text style="position: absolute; top:85px; left:240px;font-size:18px"> '.$rev.'</text>
</div></li>';

}
?>
</ul>
</article>

<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarawal</footer>

</div>

</body>
</html>
