<!DOCTYPE html>
<html>


<head>
<title>Mobiles - Apple</title>
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
   <a href="#" title="Apple iphone 5s"><img src="mobile\apple\ap1.png"  height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:300px"/></a>
   <a href="https://www.flipkart.com/apple-iphone-5s-space-grey-16-gb/p/itmeuyd8ngnpzjg8?pid=MOBDPPZZPXVDJHSQ&lid=LSTMOBDPPZZPXVDJHSQT1J02P&marketplace=FLIPKART&srno=s_1_1&otracker=search&fm=SEARCH&iid=6b2d3a37-0728-4110-a211-0ce36b3d132b.MOBDPPZZPXVDJHSQ.SEARCH&ppt=Search%20Page&ppn=Search%20Page&ssid=wmus4gvqww0000001523281625215&qH=3f97ac7d49d8d9b4">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:350px"></input></a>
   <button type="submit" name="review" value="mai5s" STYLE="position:absolute; TOP:560px; LEFT:450px">View Review</button>
   
   <a href="#" title="Apple iphone 6s"><img src="mobile\Apple\ap2.jpg" height="250" width="300" STYLE="position:absolute;border-radius:5px; TOP:300px; LEFT:650px"/></a>
   <a href="https://www.flipkart.com/apple-iphone-6s-gold-32-gb/p/itmen2yynt6bz3gg?pid=MOBEN2YYQH8PSYXG&srno=s_1_1&otracker=search&lid=LSTMOBEN2YYQH8PSYXG4TGFKX&fm=SEARCH&iid=9366bf68-07df-4cd0-9b8f-9201e585f182.MOBEN2YYQH8PSYXG.SEARCH&ppt=Search%20Page&ppn=Search%20Page&ssid=uwlosykng00000001523283544774&qH=18a724b310838016">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:700px"></input></a>
   <button type="submit" name="review" value="mai6s" STYLE="position:absolute; TOP:560px; LEFT:800px">View Review</button>
   
   <a href="#" title="Apple iphone 7"><img src="mobile\Apple\ap3.png" height="250" width="300" STYLE="position:absolute;border-radius:5px;  TOP:300px; LEFT:1000px"/></a>
    <a href="https://www.ebay.in/itm/272920682611?aff_source=Sok-Goog">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:560px; LEFT:1050px"></input></a>
   <button type="submit" name="review" value="mai7" STYLE="position:absolute; TOP:560px; LEFT:1150px">View Review</button>
   
   <a href="#" title="Apple iphone 7 plus"><img src="mobile\Apple\ap4.jpg" height="250" width="300"STYLE="position:absolute; TOP:600px; LEFT:300px;border-radius:5px"/></a>
    <a href="https://www.flipkart.com/apple-iphone-7-black-32-gb/p/itmen6daftcqwzeg?pid=MOBEMK62PN2HU7EE&srno=s_1_1&otracker=search&lid=LSTMOBEMK62PN2HU7EEINTGNU&fm=SEARCH&iid=c22ffcdb-457d-4ee1-8f00-d2f228ad2935.MOBEMK62PN2HU7EE.SEARCH&ppt=Search%20Page&ppn=Search%20Page&ssid=46wjduescg0000001523283913954&qH=319971f613ef172d">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:35px"></input></a>
   <button type="submit" name="review" value="mai7p" STYLE="position:absolute; TOP:860px; LEFT:450px">View Review</button>
   
   <a href="#"title="Apple iphone 8"><img src="mobile\Apple\ap5.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:650px;border-radius:5px"/></a>
    <a href="https://www.flipkart.com/apple-iphone-8-space-grey-64-gb/p/itmexrgvkkvhjhuk?pid=MOBEXRGVPHW9QZ2S&srno=s_1_3&otracker=search&lid=LSTMOBEXRGVPHW9QZ2SXQ2WFU&fm=SEARCH&iid=51b14ab3-49ed-4fba-add0-d75ace81aa81.MOBEXRGVPHW9QZ2S.SEARCH&ppt=Search%20Page&ppn=Search%20Page&ssid=46wjduescg0000001523283913954&qH=de1adfd97685ac18">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:700px"></input></a>
   <button type="submit" name="review" value="mai8" STYLE="position:absolute; TOP:860px; LEFT:800px">View Review</button>
   
   <a href="#" title="Apple iphone x"><img src="mobile\Apple\apx.jpg" height="250" width="300" STYLE="position:absolute; TOP:600px; LEFT:1000px;border-radius:5px"/></a>
    <a href="https://www.flipkart.com/apple-iphone-x-space-gray-64-gb/p/itmexrgv6hctyrav?pid=MOBEXRGVCMGVCGGQ&lid=LSTMOBEXRGVCMGVCGGQFLD1LA&marketplace=FLIPKART&srno=s_1_1&otracker=search&fm=SEARCH&iid=68dffe92-709f-4338-a923-7af00c0fb251.MOBEXRGVCMGVCGGQ.SEARCH&ppt=Search%20Page&ppn=Search%20Page&ssid=46wjduescg0000001523283913954&qH=ca5aeb87b294fd30">
   <input type="button" value="Buy Now" STYLE="position:absolute; TOP:860px; LEFT:1050px"></input></a>
  <button type="submit" name="review" value="maix" STYLE="position:absolute; TOP:860px; LEFT:1150px">View Review</button>
   
   </form>
   
  
  


<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarawal</footer>

</div>

</body>
</html>
