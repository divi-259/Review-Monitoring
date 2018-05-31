<!DOCTYPE html>
<html>
<?php
	session_start();
	include('connect.php');
?>

<head>
<title>Mobiles - Samsung</title>
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
	  if(isset($_SESSION['id']))
	 {
		
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
   <a href="#" title="Samsung Galaxy J7"><img src="mobile\samsung\galaxyj7.jpg"  height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:300px"/></a>
   <a href="https://www.amazon.in/Samsung-G-600FY-On7-Pro-Gold/dp/B01DDP7D6W?tag=googinhydr18418-21&tag=googinkenshoo-21&ascsubtag=480f29c5-70c9-4b37-a2bf-c3757695b9f1">
   <form action="check.php" method="POST">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:350px"></input></a>
   <button type="submit" value="msj7" name="review" STYLE="position:absolute; TOP:560px; LEFT:450px" >View Review</button>
  
   <a href="#" title="Samsung S8"><img src="mobile\samsung\s8.jpg" height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:650px"/></a>
   <a href="https://www.amazon.in/Samsung-Galaxy-Midnight-Black-RAM/dp/B06Y3GYZKW/ref=sr_1_1?s=electronics&ie=UTF8&qid=1521133095&sr=1-1&keywords=samsung+s8">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:700px"></input></a>
   <button type="submit" value="mss8" name="review" STYLE="position:absolute; TOP:560px; LEFT:800px">View Review</button>
   
   
   <a href="#" title="Samsung galaxy S4"><img src="mobile\samsung\s4.jpg" height="250" width="300" STYLE="position:absolute;border-radius:5px;  TOP:300px; LEFT:1000px"/></a>
    <a href="https://www.ebay.in/itm/272920682611?aff_source=Sok-Goog">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:1050px"></input></a>
   <button type="submit" value="mss4" name="review" STYLE="position:absolute; TOP:560px; LEFT:1150px">View Review</button>
   
   <a href="#" title="Samsung J3"><img src="mobile\samsung\j3.jpg" height="250" width="300"STYLE="position:absolute; TOP:600px; LEFT:300px;border-radius:5px"/></a>
    <a href="https://www.ebay.in/itm/273098942203?aff_source=Sok-Goog">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:350px"></input></a>
  
   <button type="submit" value="msj3" name ="review" STYLE="position:absolute; TOP:860px; LEFT:450px">View Review</button>
   
   
   <a href="#"title="Samsung Galaxy Note 3"><img src="mobile\samsung\galaxynote3.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:650px;border-radius:5px"/></a>
    <a href="https://www.flipkart.com/samsung-galaxy-note-3-classic-white-32-gb/p/itmebptbueecaxr2?pid=MOBDZQ2EZM3TAFBX&srno=s_1_1&otracker=search&lid=LSTMOBDZQ2EZM3TAFBXYOIGDT&fm=SEARCH&iid=2d84f51c-adea-47a5-9417-0e4146108471.MOBDZQ2EZM3TAFBX.SEARCH&ppt=Search%20Page&ppn=Search%20Page&ssid=vy0c5r7a9s0000001523278103920&qH=ea776ce547ae6aaa">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:700px"></input></a>
   
   <button type="submit" value="msn8" name="review" STYLE="position:absolute; TOP:860px; LEFT:800px">View Review</button>
  
   
   <a href="#" title="Samsung Galaxy C7"><img src="mobile\samsung\galaxyc7.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:1000px;border-radius:5px"/></a>
    <a href="https://www.ebay.in/itm/123006110980?aff_source=Sok-Goog">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:1050px"></input></a>
 
   <button type="submit" value="msc7" name="review" STYLE="position:absolute; TOP:860px; LEFT:1150px">View Review</button>
    </form>

<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarawal</footer>

</div>

</body>
</html>
