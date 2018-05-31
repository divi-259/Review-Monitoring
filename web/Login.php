
<!DOCTYPE html>
<?php
session_start();
?>
<html>
<script>
function abc()
{
var arr=new Array("about/pic1.jpg","about/pic2.gif","about/pic3.webp","about/pic1.gif","about/pic5.jpg");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==5)
{
document.f1.h1.value=0;
}
}
setInterval("abc()",3000);
</script>
<head>
<title>Shop Genuine - Sign in</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container" >

<header>
<br>
   <a href="index.php" style="text-decoration:none"><center><b><div class="title"><font size="20px">Shop Genuine</font></div></b></center></a>
   <br><br>
<div id="Top_menu" align="left"> 
	<a href="index.php"><div class="tab">Home</div></a>
	<a  href="about.php"><div class="tab">About Us</div></a>
	<a  href="contact.php"><div class="tab">Contact Us</div></a>	
</div>
</header>
  
<nav>
  <ul>
    <li><a href="mobile.php">Mobiles</a><hr>
				<ul type="square">
					<li><a href="m_samsung.php">Samsung</a></li>
					<li><a href="m_nokia.php">Nokia</a></li>
					<li><a href="m_apple.php">Apple</a></li>
					<li><a href="m_sony.php">Sony</a></li>
					
					<li><a href="m_lenovo.php">Lenovo</a></li>
				</ul>
				</li>
    <li><a href="laptop.php">Laptops</a><hr>
			<ul type="square">
					<li><a href="l_samsung.php">Samsung</a></li>
					<li><a href="l_nokia.php">Toshiba</a></li>
					<li><a href="l_dell.php">Dell</a></li>
					<li><a href="l_sony.php">Sony</a></li>
					
					<li><a href="l_lenovo.php">Lenovo</a></li>
				</ul>
	</li>
    <li><a href="tablet.php">Tablets</a><hr>
			<ul type="square">
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
 <div id="Page"><center><img src="about/pic1.gif" id="i" alt="" width="700" height="350" name="img"/></center>
  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
  </div>
<br><br>
  
  <center><h1><font size="6px">LOGIN HERE</font></h1>
  <div class="f2">
  <?php
	include('connect.php');
	if(isset($_POST['un']) && isset($_POST['pass']))
	{
		$username=$_POST['un'];
		$password=$_POST['pass'];
		
		if(isset($_POST['admin']))
		{
			if($username=="admin@gmail.com" && $password=="admin123")
			{
				$_SESSION['user']=1;
				$_SESSION['logged_in']=1;
				header("Location:admin.php");
			}
		}
		
		if(isset($_POST['user']))
		{
			$query="SELECT * FROM user1 WHERE email='$username' AND pass='$password'";
			$result=mysqli_query($connection,$query);
			$count=mysqli_num_rows($result);
			if($count==1)
			{
				$_SESSION['logged_in']=1;
				$_SESSION['user']=0;
				$row=mysqli_fetch_assoc($result);
				$id=$row['id'];
				$_SESSION['id']=$id;
				header("Location:index.php");
				
			}
			else
				echo "<script type='text/javascript'>alert('Invalid username or password')</script>";
		}
	}
  ?>
  <form autocomplete="off" method="POST" action="Login.php">
	<label>User Name: &nbsp&nbsp&nbsp</label>
	<input type="email" name="un" required /><br><br>
	<label>Password: &nbsp&nbsp&nbsp&nbsp&nbsp</label>
	<input type="password" name="pass" required /><br><br>
	<div class="clearfix" align="horizontal">
	<a href="admin.php"><input type="submit" style="margin:5px" value="Login as Admin" name="admin"/></a>&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit" width="100px" style="margin:5px" value="Login as Customer" name="user" /></div><br><br>
	New User ? <a href="registration.php" >Register Here</a>
  </form>
  </div>
  </font>
  
</article>

<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarwal</footer>

</div>

</body>
</html>
