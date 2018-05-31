
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
		 $email=$row['email'];
		 $photo=$row['photo'];
	 }	

 }
 ?>
<html>


<head>
<title><?php echo $fname.' '.$lname; ?></title>
<link rel="stylesheet" href="userstyle.css" >
</head>
<body>

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

<article >
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
<div STYLE="padding:1em">
<?php
echo "<img src=".$row['photo']." height='300' width='300' STYLE='border:1px groove;border-radius:10px;position:absolute; TOP:350px; LEFT:300px'>";
?>
<div class="vl" STYLE="left:650px"></div>
<text style="position: absolute; top:280px; left:700px;font-size:22px"> <h2>Contact Information </h2> <hr></text>

<text style="position: absolute; top:400px; left:700px; font-size:20px;font-style:oblique;font-weight:bold">Email ID:</text>
<text style="position: absolute; top:400px; left:850px; font-size:20px"> <?php echo $email; ?> </text>
<text style="position: absolute; top:430px; left:700px;font-size:20px;font-style:oblique;font-weight:bold"> Phone Number:</text>
<text style="position: absolute; top:430px; left:850px; font-size:20px"> <?php echo $row['phone']; ?> </text>
<text style="position: absolute; top:480px; left:700px;font-size:22px"> <h2>General Information</h2><hr></text>
<text style="position: absolute; top:590px; left:700px;font-size:20px;font-style:oblique;font-weight:bold"> Name:</text>
<text style="position: absolute; top:590px; left:850px; font-size:20px"> <?php echo $fname." ".$lname; ?> </text>
<text style="position: absolute; top:620px; left:700px;font-size:20px;font-style:oblique;font-weight:bold"> Date of Birth:</text>
<text style="position: absolute; top:620px; left:850px; font-size:20px"><?php echo $row['dob']; ?> </text>
<text style="position: absolute; top:650px; left:700px;font-size:20px;font-style:oblique;font-weight:bold"> Gender:</text>
<text style="position: absolute; top:650px; left:850px; font-size:20px"><?php echo $row['sex']; ?> </text>


</div>
</article>

<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarawal</footer>

</div>

</body>
</html>
