<!DOCTYPE html>
<html>


<head>
<title>Laptops - Sony</title>
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
   <a href="#" title="VAIO S Laptop (Intel Core i5-6200U, 8GB Memory, 128GB SSD, Full HD Display, Windows 10 Home)"><img src="laptop\sony\ss1.jpg"  height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:300px"/></a>
   <a href="https://www.amazon.in/Sony-Laptop-i5-6200U-Display-Windows/dp/B01AZC3DLU/ref=sr_1_5?s=electronics&ie=UTF8&qid=1523275457&sr=1-5&keywords=sony+laptop">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:350px"></input></a>
   <button type="submit" value="ls1" name="review" STYLE="position:absolute; TOP:560px; LEFT:450px">View Review</button>
   
   <a href="#" title="Sony VAIO Fit 15E F15218SN/B Laptop (3rd Gen Ci5/ 4GB/ 500GB/ Win8/ 1GB Graph)  (15.35 inch, Black, 2.5 kg)"><img src="laptop\sony\ss2.jpeg" height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:650px"/></a>
   <a href="https://www.flipkart.com/sony-vaio-fit-15e-f15218sn-b-laptop-3rd-gen-ci5-4gb-500gb-win8-1gb-graph/p/itmdm6swknyszaew">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:700px"></input></a>
    <button type="submit" value="ls2" name="review" STYLE="position:absolute; TOP:560px; LEFT:800px">View Review</button>
   
   <a href="#" title="Sony VAIO T - Series"><img src="laptop\sony\ss3.jpg" height="250" width="300" STYLE="position:absolute;border-radius:5px;  TOP:300px; LEFT:1000px"/></a>
    <a href="https://www.amazon.com/Sony-SVT13134CXS-13-3-Inch-Touchscreen-Ultrabook/dp/B00AW4OD6G/ref=as_at?creativeASIN=B00AW4OD6G&imprToken=wdD4RL2OKk871SV3.eqhqQ&slotNum=1&_encoding=UTF8&camp=1789&creative=9325&linkCode=ur2&tag=reinfisc-20&linkId=O3MNV7HB34KQAAQ5">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:1050px"></input></a>
    <button type="submit" value="ls3" name="review" STYLE="position:absolute; TOP:560px; LEFT:1150px">View Review</button>
   
   <a href="#" title="Sony Vaio E Series SVE14117GNB (Black)"><img src="laptop\sony\son3.jpg" height="250" width="300"STYLE="position:absolute; TOP:600px; LEFT:300px;border-radius:5px"/></a>
    <a href="https://www.snapdeal.com/product/sony-vaio-sve14117gnb-laptop-3rd/198710">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:350px"></input></a>
    <button type="submit" value="ls4" name="review" STYLE="position:absolute; TOP:860px; LEFT:450px">View Review</button>
   
   <a href="#"title="Sony Vaio Laptop/Core i5 3rd gen"><img src="laptop\sony\son4.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:650px;border-radius:5px"/></a>
    <a href="https://www.hilaptop.com/in/p/Sony-Vaio-LaptopCore-i5-3rd-gen-8Gb-RAM-1000gb-1tb-Gb-graphic-dedicatedUSED/226?gclid=CjwKCAjwwuvWBRBZEiwALXqjw23SUnK3WYGYMhon1A7perEG6Ylvwv-1BRzOZGHipHSwlOokYM2tCRoCC9MQAvD_BwE">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:700px"></input></a>
 <button type="submit" value="ls5" name="review" STYLE="position:absolute; TOP:860px; LEFT:800px">View Review</button>
   
   <a href="#" title="Sony VAIO VGN-NW240F"><img src="laptop\lenovo\yoga920.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:1000px;border-radius:5px"/></a>
    <a href="https://www.amazon.com/Sony-VGN-NW240F-15-5-Inch-Windows-Premium/dp/B002PHM0L8/ref=cm_cr_arp_d_product_top?ie=UTF8">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:1050px"></input></a>
    <button type="submit" value="ls6" name="review" STYLE="position:absolute; TOP:860px; LEFT:1150px">View Review</button>
    </form>
   
   
  
  


<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarawal</footer>

</div>

</body>
</html>
