
<!DOCTYPE html>
<html>
<script>
function abc()
{
var arr=new Array("about/pic1.jpg","about/pic2.gif","about/pic3.webp","about/pic1.gif","about/pic5.jpg");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==5)
{
document.f1.h1.value=0;
}
}
setInterval("abc()",3000);
</script>
<head>
<title>Shop Genuine-Sign Up</title>
<link rel="stylesheet" href="styles.css">

</head>
<body>
 
<div class="container">
 
<header>
<br>
   <a href="index.php" style="text-decoration:none"><center><b><div class="title"><font size="20px">Shop Genuine</font></div></b></center></a>
   <br><br>
<div id="Top_menu" align="left"> 
	<a href="index.php"><div class="tab">Home</div></a>
	<a  href="about.php"><div class="tab">About Us</div></a>
	<a  href="contact.php"><div class="tab">Contact Us</div></a>
	
  
	
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
 <div id="Page" padding="20px"><center><img src="about/pic1.jpg" id="i" alt="" width="650" height="350" name="img"/></center>
  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
  </div>
  
  <center><h1><font size="6px">Sign Up</font></h1><hr>
    
<?php
include('connect.php');
$msg=NULL;
function get_ip_address()  
{
	
   if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

	
if(isset($_POST['fn']) && isset($_POST['ln']) && isset($_POST['email']) && isset($_POST['p']) && isset($_POST['p1']))
{
	$msg=NULL;
	$fname=$_POST['fn'];
	$lname=$_POST['ln'];
	$password=$_POST['p'];
	$password1=$_POST['p1'];
	$userip=get_ip_address();
	$email=$_POST['email'];
	$dob=$_POST['d'];
	$sex=$_POST['g'];
	if($password!=$password1)
		$msg="Password do not match";
	else
	{
	$query="INSERT INTO user1(id,fname,lname,email,pass,dob,sex,photo,ip) VALUES(default,'$fname','$lname','$email','$password','$dob','$sex',default,'$userip')";
	mysqli_query($connection,$query);
	$query=NULL;
	$password=NULL;
	$password1=NULL;
	header("Refresh:0;url=Login.php");
	echo "<script type='text/javascript'>alert('Successfully Registered.Go to Login Page')</script>";
	exit;
	}	
	if($msg!=NULL)
		echo "<script type='text/javascript'>alert('".$msg."')</script>";

}
?>

<form autocomplete="off" class="f" method="POST" action="registration.php">
 
	<label for="fn" class="l">First Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
	<input type="text" class="in" value="" name="fn" required /><br>
	
	<label for="ln" class="l">Last Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
	<input type="text" class="in" value="" name="ln" required /><br>
	
	<label for="email"class="l">Email:  </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="email" class="in" value="" name="email" required /><br>
	
	<label for="d" class="l">Date of Birth: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
	<input type="date" class="in" name="d" /><br>
	
	<label for="g" class="l">Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
	<input type="radio" class="ge" name="g" value="M" />Male 
	<input type="radio"  name="g" class="ge" value="F" />Female<br><br>
	
	<label for="p" class="l"> Choose a Password: </label>
	<input type="password" class="in" name="p" required /><br>
	<label for="p" class="l"> Confirm Password: &nbsp</label>
	<input type="password" class="in" name="p1" required /><br>
	
	<div class="clearfix" align="vertical">
	<button type="submit" class="btn" style="background-color:#434343" />Submit</button><br>
	<font style="color:#434343">Already have an account ? <a href="Login.php" >Login Here</a></font>
	</div>
  </form>
   
  </center>
  </div>
</article>
 
<footer>Created By- Divyanshi Dixit, Parul Choudhary and Komal Agarawal</footer>
 
</div>
 
</body>
</html>
