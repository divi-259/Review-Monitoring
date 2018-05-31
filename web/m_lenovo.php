<!DOCTYPE html>
<html>


<head>
<title>Mobiles - Lenovo</title>
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
   <a href="#" title="Lenovo K8 Note"><img src="mobile\lenovo\lenovo_k8.jpg"  height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:300px"/></a>
   <a href="https://www.amazon.in/Lenovo-Venom-Black-System-Update/dp/B01LZKSUXF?tag=googinhydr18418-21&tag=googinkenshoo-21&ascsubtag=c0eb971a-d93e-4833-b1a6-8503f50e0761s">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:350px"></input></a>
  <button type="submit" value="mlk8n" name="review" STYLE="position:absolute; TOP:560px; LEFT:450px">View Review</button>
   
   <a href="#" title="Lenovo K6 Power"><img src="mobile\lenovo\lenovok6.jpg" height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:650px"/></a>
   <a href="https://www.amazon.in/Lenovo-K6-Power-Grey-3GB-32GB/dp/B072J2S8GJ/ref=sr_1_2?s=electronics&ie=UTF8&qid=1521186935&sr=1-2&keywords=lenovo+phones">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:700px"></input></a>
   <button type="submit" value="mlk6p" name="review" STYLE="position:absolute; TOP:560px; LEFT:800px">View Review</button>
   
   <a href="#" title="Lenovo A6600 Plus"><img src="mobile\lenovo\a6600.jpeg" height="250" width="340" STYLE="position:absolute;border-radius:5px;  TOP:300px; LEFT:1000px"/></a>
    <a href="https://www.amazon.in/Lenovo-A6600-Plus-Black/dp/B01M0OXV1V/ref=sr_1_3?s=electronics&ie=UTF8&qid=1521186935&sr=1-3&keywords=lenovo+phones">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:1050px"></input></a>
    <button type="submit" value="mla66p" name="review" STYLE="position:absolute; TOP:560px; LEFT:1150px">View Review</button>
   
   <a href="#" title="Lenovo K6 Note"><img src="mobile\lenovo\k6note.jpg" height="250" width="300"STYLE="position:absolute; TOP:600px; LEFT:300px;border-radius:5px"/></a>
    <a href="https://www.amazon.in/Lenovo-K6-Note-Gold/dp/B01MZ0NA27/ref=sr_1_4?s=electronics&ie=UTF8&qid=1521186935&sr=1-4&keywords=lenovo+phones">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:350px"></input></a>
   <button type="submit" value="mlk6n" name="review"  STYLE="position:absolute; TOP:860px; LEFT:450px">View Review</button>
   
   <a href="#"title="Lenovo Z2 Plus"><img src="mobile\lenovo\z2.png" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:650px;border-radius:5px"/></a>
    <a href="https://www.amazon.in/Lenovo-Z2-Plus-Black-32GB/dp/B01FM7HV7K/ref=sr_1_6?s=electronics&ie=UTF8&qid=1521186935&sr=1-6&keywords=lenovo+phones">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:700px"></input></a>
   <button type="submit" value="mlz2p" name="review" STYLE="position:absolute; TOP:860px; LEFT:800px">View Review</button>
   
   <a href="#" title="Lenovo K3 Note"><img src="mobile\lenovo\k3.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:1000px;border-radius:5px"/></a>
    <a href="https://www.amazon.in/CERTIFIED-REFURBISHED-Lenovo-K3-Note/dp/B0744R3BXG/ref=sr_1_8?s=electronics&ie=UTF8&qid=1521186935&sr=1-8&keywords=lenovo+phones">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:1050px"></input></a>
   <button type="submit" value="mlk3n" name="review" STYLE="position:absolute; TOP:860px; LEFT:1150px">View Review</button>
   </form>
   
   
  
  


<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarawal</footer>

</div>

</body>
</html>
