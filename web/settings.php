
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
		 $row1=mysqli_fetch_assoc($result);
		 $fname=$row1['fname'];
		 $lname=$row1['lname'];
	 }		 
 }
 ?>
<html>


<head>
<title><?php echo 'Settings- '.$fname.' '.$lname; ?></title>
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
	<?php echo "<img src=".$row1['photo']." width='21px' height='20px' STYLE='border-radius:10px;position:absolute;top:2px'/>" ?>
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
<div >
<?php
//Update image
if(isset($_POST["submit"])) 
{
	$path="upload/";
	$path=$path.basename($_FILES["image"]["name"]);
	if($_FILES["image"]["error"] > 0)
	{
		echo "Error: " . $_FILES["image"]["error"] . "<br>";
	}
	move_uploaded_file($_FILES['image']['tmp_name'], $path) ; 
	$updateimage="UPDATE user1 SET photo='$path' WHERE id='$id'";
	mysqli_query($connection,$updateimage);
}
//udpdate info
if(isset($_POST['save']))
{
	$email=$_POST['email'];
	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$phone=$_POST['ph'];
	$dob=$_POST['d'];
	if($fn !=NULL && $ln !=NULL)
	{
		
		$q="UPDATE user1 SET lname='$ln',fname='$fn' WHERE id='$id'";
		mysqli_query($connection,$q);
		$q=NULL;
	}
	if($email!=NULL)
	{
		
		$q="UPDATE user1 SET email='$email' WHERE id='$id'";
		mysqli_query($connection,$q);
		$q=NULL;
	}
	if($phone!=NULL)
	{
		$q="UPDATE user1 SET phone='$phone' WHERE id='$id'";
		mysqli_query($connection,$q);
		$q=NULL;
	}
	if($dob!=NULL)
	{
		
		$q="UPDATE user1 SET dob='$dob' WHERE id='$id'";
		mysqli_query($connection,$q);
		$q=NULL;
	}
		
}
if(isset($_POST['update']))
{
	$pass=$_POST['p'];
	$p1=$_POST['p1'];
	$query="SELECT * FROM user1 WHERE id='$id'";
	$result=mysqli_query($connection,$query);
	$row=mysqli_fetch_assoc($result);
	if($pass == $row['pass'])
	{
		$q="UPDATE user1 SET pass='$p1' WHERE id='$id'";
		mysqli_query($connection,$q);
	}
	else
	{
		echo "<script type='text/javascript'>alert('Password update failed. Enter correct details.')</script>";
	}
}

//Displaying changes
 $result=mysqli_query($connection,$query);
		 $row=mysqli_fetch_assoc($result);
echo "<img src=".$row['photo']." height='250' width='250' STYLE='position:absolute; border-radius:10px;border:1px groove;TOP:350px; LEFT:300px'>";

?>
<form action="settings.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="300000000000000000000000000000000" /> 
<input type="file" name="image" STYLE="position:absolute; TOP:620px; LEFT:310px;width:200px" required /><br>
<input type="submit" value="Upload Your Picture" STYLE="position:absolute; TOP:650px; LEFT:300px;width:200px" name="submit"/>
</form>
<div class="vl" STYLE="height:620px"></div>
<text STYLE="position:absolute; TOP:250px; LEFT:680px;font-size:20px"> <h1>Update  &nbsp Information</h1></text>
<form autocomplete="off"  method="POST" action="settings.php" STYLE="position:absolute; TOP:330px; LEFT:680px; font-size:20px;width:500px;border:1px solid grey;padding:5px;background-image:url('back.jpg')">
 <br>
	<label for="fn" class="l">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFirst Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
	<input type="text" class="in" value="<?php echo $fname;  ?>" name="fn" required /><br>
	
	<label for="ln" class="l">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLast Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
	<input type="text" class="in" value="<?php echo $lname;  ?>" name="ln" required /><br>
	
	<label for="email"class="l">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmail:  </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="email" class="in" value="<?php echo $row['email'];  ?>" name="email" required /><br>
	
	<label for="d" class="l">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDate of Birth: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
	<input type="date" value="<?php echo $row['dob'];  ?>" class="in" name="d" /><br>
	<label for="ph" class="l">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspContact No: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
	<input type="text" value="<?php echo $row['phone'];  ?>" class="in" name="ph" /><br>
	<label for="g" class="l">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
	<input type="radio" class="ge" name="g" value="M" />Male 
	<input type="radio"  name="g" class="ge" value="F" />Female<br><br>
	<center><input type="submit" value="Save Changes" name="save" /></center><br>
	</form>
	<text STYLE="position:absolute; TOP:690px; LEFT:680px;font-size:20px"> <h1>Change  &nbsp Password</h1></text>
	<br>
	<form autocomplete="off"  method="POST" action="settings.php" STYLE=" position:absolute;TOP:760px; LEFT:680px; font-size:20px;padding-top:3px;padding-left:6px;padding-right:6px;border:1px solid grey;width:500px;background-image:url('back.jpg')">
	<label for="p" class="l"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCurrent Password: &nbsp&nbsp&nbsp </label>
	<input type="password" class="in" name="p" required /><br>
	<label for="p1" class="l"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNew Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
	<input type="password" class="in" name="p1" required /><br>
	<center><input type="submit" value="Change Password" name="update" /></center><br>
	</form>
	
	

</div>
</article>

<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarawal</footer>

</div>

</body>
</html>
