<!DOCTYPE html>

<html>
<?php
session_start();
if(!isset($_SESSION['logged_in']))
{
	 header("Location:Login.php");
}
?>
<script>
function abc()
{
var arr=new Array("admin/det1.jpg","admin/det2.jpg","admin/det3.jpg");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==3)
{
document.f1.h1.value=0;
}
}
setInterval("abc()",3000);
</script>
<head>
<title>Shop Genuine</title>
<link rel="stylesheet" href="adminstyle.css">
</head>
<body>

<div class="container">

<header>
<br>
   <a href="index.php" style="text-decoration:none"><center><b><div class="title"><font size="20px">Shop Genuine</font></div></b></center></a>
   <br> <br>
   
<div id="Top_menu" align="left" STYLE="position:relative"> 
	<a href="index.php"><div class="tab">Home</div></a>
	<a  href="about.php"><div class="tab">About Us</div></a>
	<a  href="contact.php"><div class="tab">Contact Us</div></a>
	<button type="button" class="btn logout" onclick="location.href='logout.php'" >LOGOUT</button>
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
 <div id="Page"><center><img src="admin/det1.jpg" id="i" alt="" width="650" height="350" name="img"/></center>
  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
    <div id="Page_top">
<br>
  </div>
  </div>
  <center><h1><font size="6px">MONITORING FAKE REVIEWS</font></h1>
  <font size="4px" style="font-family:comic sans ms">
  <a href="suspectedreview.php"><div class="button" width="60" height="100">Suspected Reviews</div></a>&nbsp&nbsp&nbsp
  <a href="im.php"><div class="button" width="60" height="100">Mark Reviews</div></input><br></a>
  <a href="delete.php"><div class="button" width="60" height="100">Delete a Review</div></a>&nbsp&nbsp&nbsp&nbsp
   <a href="suspecteduser.php"><div class="button" width="60" height="100">Suspected Users</div></center></a>
  </font>
  
</article>

<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarwal</footer>

</div>

</body>
</html>
