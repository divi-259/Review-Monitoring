<!DOCTYPE html>
<html>


<head>
<title>Laptops - Dell</title>
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
   <a href="#" title="Dell D-630"><img src="laptop\dell\d630.jpg"  height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:300px"/></a>
   <a href="https://www.amazon.in/Samsung-G-600FY-On7-Pro-Gold/dp/B01DDP7D6W?tag=googinhydr18418-21&tag=googinkenshoo-21&ascsubtag=480f29c5-70c9-4b37-a2bf-c3757695b9f1">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:350px"></input></a>
    <button type="submit" value="del1" name="review" STYLE="position:absolute; TOP:560px; LEFT:450px">View Review</button>
   
   <a href="#" title="Dell Inspiron 15"><img src="laptop\dell\inspiron15.jpg" height="250" width="300" STYLE="position:absolute; TOP:300px; LEFT:650px;border-radius:5px"/></a>
   <a href="https://www.amazon.in/Samsung-Galaxy-Midnight-Black-RAM/dp/B06Y3GYZKW/ref=sr_1_1?s=electronics&ie=UTF8&qid=1521133095&sr=1-1&keywords=samsung+s8">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:700px"></input></a>
    <button type="submit" value="del2" name="review" STYLE="position:absolute; TOP:560px; LEFT:800px">View Review</button>
   
   <a href="#" title="Dell Inspiron 5567"><img src="laptop\dell\inspiron5567.jpg" height="250" width="300" STYLE="position:absolute; TOP:300px; LEFT:1000px;border-radius:5px"/></a>
    <a href="https://www.ebay.in/itm/272920682611?aff_source=Sok-Goog">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:1050px"></input></a>
    <button type="submit" value="del3" name="review" STYLE="position:absolute; TOP:560px; LEFT:1150px">View Review</button>
   
   <a href="#" title="Dell Inspiron Core i3"><img src="laptop\dell\inspironcorei3.jpg" height="250" width="300"STYLE="position:absolute; TOP:600px; LEFT:300px;border-radius:5px"/></a>
    <a href="https://www.ebay.in/itm/273098942203?aff_source=Sok-Goog">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:350px"></input></a>
    <button type="submit" value="del4" name="review" STYLE="position:absolute; TOP:860px; LEFT:450px">View Review</button>
   
   <a href="#"title="Dell Latitude"><img src="laptop\dell\latitude.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:650px;border-radius:5px"/></a>
    <a href="https://www.flipkart.com/samsung-galaxy-nxt-gold-64-gb/p/itmet6rhmfzdtrht?gclid=EAIaIQobChMIm7vAu-ju2QIVyjUrCh3LCQA0EAQYBCABEgLf8fD_BwE&pid=MOBET6RH4XSXKM7D&lid=LSTMOBET6RH4XSXKM7D5I3RAP&cmpid=content_mobile_8965229628_gmc_pla&tgi=sem%2C1%2CG%2C11214002%2Cg%2Csearch%2C%2C50314732220%2C1o4%2C%2C%2Cc%2C%2C%2C%2C%2C%2C%2C&s_kwcid=AL%21739%213%2150314732220%21%21%21g%21334868325806%21&ef_id=WYPkhgAAAGzusFBx%3A20180315170748%3As">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:700px"></input></a>
   <button type="submit" value="del5" name="review" STYLE="position:absolute; TOP:860px; LEFT:800px">View Review</button>
   
   <a href="#" title="Dell XPS 13"><img src="laptop\dell\xps13.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:1000px;border-radius:5px"/></a>
    <a href="https://www.ebay.in/itm/123006110980?aff_source=Sok-Goog">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:1050px"></input></a>
   <button type="submit" value="del6" name="review" STYLE="position:absolute; TOP:860px; LEFT:1150px">View Review</button>
   </form>
   
   
  
  


<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarawal</footer>

</div>

</body>
</html>
