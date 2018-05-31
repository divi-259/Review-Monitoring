<!DOCTYPE html>
<html>


<head>
<title>Mobiles - Sony</title>
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
   <a href="#" title="Xperia XA1 Dual"><img src="mobile\sony\xa1.jpg"  height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:300px"/></a>
   <a href="https://www.amazon.in/Sony-Xperia-XA1-Dual-Black/dp/B06Y3VRP78/ref=sr_1_1?s=electronics&ie=UTF8&qid=1521187441&sr=1-1&keywords=sony+phones">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:350px"></input></a>
  <button type="submit" value="msxa1d" name="review" STYLE="position:absolute; TOP:560px; LEFT:450px">View Review</button>
   
   <a href="#" title="Xperia R1 Plus"><img src="mobile\sony\r1.jpg" height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:650px"/></a>
   <a href="https://www.amazon.in/Sony-Xperia-R1-Plus-Dual/dp/B076HYJT12/ref=sr_1_3?s=electronics&ie=UTF8&qid=1521187441&sr=1-3&keywords=sony+phones">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:700px"></input></a>
   <button type="submit" value="msr1p" name="review" STYLE="position:absolute; TOP:560px; LEFT:800px">View Review</button>
   
   <a href="#" title="Xperia L2 Dual"><img src="mobile\sony\l2.jpg" height="250" width="300" STYLE="position:absolute;border-radius:5px;  TOP:300px; LEFT:1000px"/></a>
    <a href="https://www.amazon.in/Sony-Xperia-L2-Dual-Black/dp/B0794P3TJJ/ref=sr_1_9?s=electronics&ie=UTF8&qid=1521187441&sr=1-9&keywords=sony+phones">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:1050px"></input></a>
  <button type="submit" value="msl2d" name="review" STYLE="position:absolute; TOP:560px; LEFT:1150px">View Review</button>
   
   <a href="#" title="Xperia XZ1 Dual"><img src="mobile\sony\xz1.jpg" height="250" width="300"STYLE="position:absolute; TOP:600px; LEFT:300px;border-radius:5px"/></a>
    <a href="https://www.amazon.in/Sony-Xperia-XZ1-Dual-Black/dp/B075T5VD9S/ref=sr_1_12?s=electronics&ie=UTF8&qid=1521187441&sr=1-12&keywords=sony+phones">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:350px"></input></a>
  <button type="submit" value="msxz1d" name="review" STYLE="position:absolute; TOP:860px; LEFT:450px">View Review</button>
   
   <a href="#"title="Xperia XZ Premium Dual"><img src="mobile\sony\xz.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:650px;border-radius:5px"/></a>
    <a href="https://www.amazon.in/Sony-Xperia-XZ-Premium-Dual/dp/B072PYGF2B/ref=sr_1_14?s=electronics&ie=UTF8&qid=1521187441&sr=1-14&keywords=sony+phones">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:700px"></input></a>
   <button type="submit" value="msxzpd" name="review" STYLE="position:absolute; TOP:860px; LEFT:800px">View Review</button>
   
   <a href="#" title="Xperia XA Dual"><img src="mobile\sony\xa.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:1000px;border-radius:5px"/></a>
    <a href="https://www.amazon.in/Sony-Xperia-XA-Dual-Lime/dp/B01H4U8348/ref=sr_1_18?s=electronics&ie=UTF8&qid=1521187441&sr=1-18&keywords=sony+phones">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:1050px"></input></a>
   <button type="submit" value="msxad" name="review" STYLE="position:absolute; TOP:860px; LEFT:1150px">View Review</button>
</form>
   
  
  


<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarawal</footer>

</div>

</body>
</html>
