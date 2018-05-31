
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
   <a href="index.php" style="text-decoration:none"><center><b><div class="title"><font size="20px">Shop Genuine</font></div></b></center></a>
   <br> <br><br>
   
<div id="Top_menu" align="left" STYLE="position:relative"> 
	<a href="index.php"><div class="tab">Home</div></a>
	<a  href="about.php"><div class="tab">About Us</div></a>
	<a  href="contact.php"><div class="tab">Contact Us</div></a>
	<div STYLE='position:relative'><button type='button' class='btn logout' onclick="location.href='logout.php'">LOGOUT</button>
	<a style='text-decoration:none' href='admin.php'>
	<div class='icon' STYLE='position:absolute;
	bottom:50px;
	
	padding-left:5px;
	padding-top:5px;
	
	width:112px;
	border:1px solid grey;
	border-radius:5px;
	'>
	<img src='favicon.ico' width='22px' height='20px' STYLE='position:absolute;border-radius:10px'></img>
	<font size='5px'><b>&nbsp&nbsp&nbsp&nbspAdmin</b><br></font>
	</div>
	</a></div>
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
  <center><h1><font size="6px">SUSPECTED REVIEWS</font></h1>
  <font size="4px" style="font-family:comic sans ms">

<?php
	include ('connect.php');
	$q="SELECT * FROM reviews WHERE suspected=1";
	$result=mysqli_query($connection,$q);
	?>
	<form action="delrev.php" method="post">
	<table border="1px" cellpadding="10px" style="background-image:url('texture.jpg')">
	<tr>
		<td>S.NO.</td>
		<td>Review</td>
		<td>Product Name</td>
		<td>User</td>
		<td>Delete Review</td>


 <?php 
		$i=0;
		
		while($row = mysqli_fetch_assoc($result))
		{ 
			$rev=$row['review'];
			$uid=$row['uid'];
			$pid=$row['pid'];
			$q1="SELECT * FROM products WHERE pid='$pid'";
		$q2="SELECT * FROM user1 WHERE id='$uid'";
			
			$result1=mysqli_query($connection,$q1);
			$row1=mysqli_fetch_assoc($result1);
			$pname=$row1['pfullname'];
			
			
			$result2=mysqli_query($connection,$q2);
			$row2=mysqli_fetch_assoc($result2);
			$user=$row2['email'];
			
			$i=$i+1;
			
			echo "<tr>
					<td>".$i."</td>
					<td>".$rev."</td>
					<td>".$pname."</td>
					<td>".$user."</td>
					<td> <input type='checkbox' name='del[]' value=".$row['id']."/></td>
				</tr>";
		}	?>
	</table>
	<br>
	<button type="submit" STYLE="border-radius:5px;font-size:20px"> Delete Reviews</button>
	</form>
	</font>
  
</article>
	
<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarwal</footer>

</div>

</body>
</html>