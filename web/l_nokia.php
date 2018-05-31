<!DOCTYPE html>
<html>


<head>
<title>Laptops - Lenovo</title>
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
   <a href="#" title="Toshiba X30-D1354,WINDOWS 10 PRO,INTEL CORE I7-7600U,INTEL HD GRAPHICS 620,8GB DDR4 2133 PT274U-00T008"><img src="laptop\toshiba\ts7.jpg"  height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:300px"/></a>
   <a href="https://www.amazon.in/Toshiba-X30-D1354-I7-7600U-GRAPHICS-PT274U-00T008/dp/B0711C53KY/ref=sr_1_9?ie=UTF8&qid=1523599412&sr=8-9&keywords=laptops+toshiba+windows+10">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:350px"></input></a>
   <button type="submit" value="tos7" name="review" STYLE="position:absolute; TOP:560px; LEFT:450px">View Review</button>
   
   <a href="#" title="TOSHIBA Laptop Tecra A50-01R01S Intel Core i7 7th Gen 7500U (2.70 GHz) 4 GB Ram 1TB HDD Intel HD Graphics 620 15.6 Windows 10 Pro 64-Bit"><img src="laptop\toshiba\ts2.jpg" height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:650px"/></a>
   <a href="https://www.amazon.in/TOSHIBA-Tecra-A50-01R01S-Graphics-Windows/dp/B072LRRCDJ/ref=sr_1_22?s=computers&ie=UTF8&qid=1523276198&sr=1-22&keywords=toshiba+laptop">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:700px"></input></a>
    <button type="submit" value="tos2" name="review" STYLE="position:absolute; TOP:560px; LEFT:800px">View Review</button>
   
   <a href="#" title="Toshiba Satellite Flagship Model 12.5-Inch IPS HD Touchscreen 2 in 1 Convertible Touchscreen Ultrabook | Intel Core i5 | 128GB SSD | 4GB RAM | GPS | NFC |...
"><img src="laptop\toshiba\ts3.jpg" height="250" width="300" STYLE="position:absolute;border-radius:5px;  TOP:300px; LEFT:1000px"/></a>
    <a href="https://www.amazon.in/dp/B01FNOUNCM/ref=psdc_1375424031_t2_B072LRRCDJ">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:1050px"></input></a>
    <button type="submit" value="tos5" name="review" STYLE="position:absolute; TOP:560px; LEFT:1150px">View Review</button>
   
   <a href="#" title="Toshiba Satellite L15-B1330 11.6-Inches Laptop (Intel Celeron N2840 / 2.16 GHz, 2GB DDR3L , 128 GB mSATA, Windows 8.1)"><img src="laptop\toshiba\ts4.jpg" height="250" width="300"STYLE="position:absolute; TOP:600px; LEFT:300px;border-radius:5px"/></a>
    <a href="https://www.amazon.in/dp/B0118WY9QE/ref=psdc_1375424031_t3_B072LRRCD">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:350px"></input></a>
    <button type="submit" value="tos7" name="review" STYLE="position:absolute; TOP:860px; LEFT:450px">View Review</button>
   
   <a href="#"title="
2016 Toshiba Satellite Fusion15.6 inch Full HD 2-in-1 Touchscreen Convertible Laptop, Intel Core i5-6200U Processor, 6GB RAM, 1TB HDD, Webcam, WIFI, HDMI,"><img src="laptop\toshiba\ts5.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:650px;border-radius:5px"/></a>
    <a href="https://www.amazon.in/Toshiba-Satellite-Fusion15-6-Touchscreen-Convertible/dp/B01HDSN4EA/ref=pd_sbs_147_7?_encoding=UTF8&psc=1&refRID=BMERKXEJ7EFVKSMRXAQG">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:700px"></input></a>
 <button type="submit" value="tos3" name="review" STYLE="position:absolute; TOP:860px; LEFT:800px">View Review</button>
   
   <a href="#" title="Toshiba Satellite L55-A5284 15.6-Inch Laptop (1.8 GHz Intel Core i5-3337U Processor, 8GB DIMM, 750GB HDD, Windows 8) Mercury Silver"><img src="laptop\toshiba\ts6.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:1000px;border-radius:5px"/></a>
    <a href="https://www.amazon.in/Toshiba-Satellite-L55-A5284-15-6-Inch-Processor/dp/B00DMMPQ3O/ref=pd_sbs_147_8?_encoding=UTF8&psc=1&refRID=BMERKXEJ7EFVKSMRXAQG">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:1050px"></input></a>
    <button type="submit" value="tos1" name="review" STYLE="position:absolute; TOP:860px; LEFT:1150px">View Review</button>
    </form>
   
   
  
  


<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarawal</footer>

</div>

</body>
</html>
