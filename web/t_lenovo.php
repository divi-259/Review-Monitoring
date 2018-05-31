<!DOCTYPE html>
<html>


<head>
<title>Tablets - Lenovo</title>
<link rel="stylesheet" href="styles.css">
</head>
<body class="cont">

<div class="container">

<header>
<br>
   <a href="index.php" style="text-decoration:none"><center><b><div class="title"><font size="20px">Shop Genuine</font></div></b></center></a>
   <br><br>
<div id="Top_menu" align="left"> 
	<a href="index.php"><div class="tab">Home</div></a>
	<a  href="about.php"><div class="tab">About Us</div></a>
	<a  href="contact.php"><div class="tab">Contact Us</div></a>
	
 <?php	
	 session_start();
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
 if(!isset($_SESSION['logged_in']))
 {
   echo "<div align='right' id='r'>
   <a href='registration.php' ><div class='tab'>Sign Up</div></a>
	<a  href='Login.php'><div class='tab'>User Login</div></a>
	</div>";
 }
 else
 {
	 if($_SESSION['user']==0)
	 {
	 echo "<div STYLE='position:relative'><button type='button' class='btn logout' onclick=\"location.href='logout.php'\">LOGOUT</button>
	<a style='text-decoration:none' href='overview.php'>
	<div class='icon'>
	<img src=".$row['photo']." width='22px' height='20px' STYLE='position:absolute;border-radius:10px'></img>
	<font size='5px'><b>&nbsp&nbsp&nbsp&nbsp ".$fname."</b><br></font>
	</div>
	</a></div>";
	}
	else
	{
		echo "<div STYLE='position:relative'><button type='button' class='btn logout' onclick=\"location.href='logout.php'\">LOGOUT</button>
	<a style='text-decoration:none' href='admin.php'>
	<div class='icon'>
	<img src='favicon.ico' width='22px' height='20px' STYLE='position:absolute;border-radius:10px'></img>
	<font size='5px'><b>&nbsp&nbsp&nbsp&nbsp Admin</b><br></font>
	</div>
	</a></div>";
	}
 }
?>
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

 
	 <form action="check.php" method="POST">
	 
   <a href="#" title="Lenovo Tab 10 Tablet (10.1 inch, 16GB, WiFi), Pearl White"><img src="tablet\lentabs\len1.jpg"  height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:300px"/></a>
   <a href="https://www.amazon.in/Lenovo-Tab-10-Tablet-Pearl/dp/B078K4K39P/ref=sr_1_17?s=computers&ie=UTF8&qid=1521534428&sr=1-17&keywords=tablets"><input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:350px"></input></a>
   <button type="submit" value="tl1" name="review" STYLE="position:absolute; TOP:560px; LEFT:450px">View Review</button>
   
   <a href="#" title="Lenovo Tab 3 Essential Tablet (7 inch, 8GB,Wi-Fi Only), Black"><img src="tablet\lentabs\len2.jpg" height="250" width="280" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:650px"/></a>
   <a href="https://www.amazon.in/Lenovo-Essential-Tablet-Wi-Fi-Black/dp/B01IHIZIXA/ref=sr_1_11?s=computers&ie=UTF8&qid=1521534428&sr=1-11&keywords=tablets"><input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:700px"></input></a>
  
  <button type="submit" value="tl2" name="review" STYLE="position:absolute; TOP:560px; LEFT:800px">View Review</button>
   
   <a href="#" title="Lenovo Tab3 7 Essential Tablet (7 inch, 16GB,Wi-Fi+3G with Voice Calling), Black"><img src="tablet\lentabs\len3.jpg" height="250" width="300" STYLE="position:absolute;border-radius:5px;  TOP:300px; LEFT:1000px"/></a>
    <a href="https://www.amazon.in/Lenovo-Tab3-Essential-Tablet-Calling/dp/B01J1EOVQO/ref=sr_1_10?s=computers&ie=UTF8&qid=1521534428&sr=1-10&keywords=tablets">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:1050px"></input></a>
   <button type="submit" value="tl3" name="review" STYLE="position:absolute; TOP:560px; LEFT:1150px">View Review</button>
   
   <a href="#" title="Lenovo Tab4 8 Plus Tablet (8 inch, 64GB, Wi-Fi + 4G LTE + Voice Calling), Aurora Black"><img src="tablet\lentabs\len6.jpg" height="250" width="300"STYLE="position:absolute; TOP:600px; LEFT:300px;border-radius:5px"/></a>
    <a href="https://www.amazon.in/Lenovo-Tab4-Plus-Tablet-Calling/dp/B075T11S9G/ref=sr_1_7?s=computers&ie=UTF8&qid=1521534428&sr=1-7&keywords=tablets">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:350px"></input></a>
   <button type="submit" value="tl4" name="review" STYLE="position:absolute; TOP:860px; LEFT:450px">View Review</button>
   
   <a href="#"title="Lenovo Yoga Tab 3 8 Tablet (8 inch, 16GB, Wi-Fi + 4G), Slate Black -Only on Amazon.in"><img src="tablet\lentabs\len5.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:650px;border-radius:5px"/></a>
    <a href="https://www.amazon.in/Lenovo-Yoga-Tab-Tablet-Amazon/dp/B01JZ8Z5XE/ref=sr_1_1?s=computers&ie=UTF8&qid=1521534428&sr=1-1&keywords=tablets"><input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:700px"></input></a>
   <button type="submit" value="tl5" name="review" STYLE="position:absolute; TOP:860px; LEFT:800px">View Review</button>
   
   <a href="#" title="Lenovo Tab4 10 Tablet (10.1 inch,16GB,Wi-Fi + 4G LTE) Slate Black"><img src="tablet\lentabs\len6.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:1000px;border-radius:5px"/></a>
    <a href="https://www.amazon.in/Lenovo-Tab4-10-Tablet-Wi-Fi/dp/B075T1YTR9?tag=googinhydr18418-21&tag=googinkenshoo-21&ascsubtag=aa8c1483-0008-48ad-97c9-3b588c6c3cd6">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:1050px"></input></a>
   <button type="submit" value="tl6" name="review" STYLE="position:absolute; TOP:860px; LEFT:1150px">View Review</button>
    </form>
     


<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarawal</footer>

</div>

</body>
</html>
