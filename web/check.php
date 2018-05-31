
<?php
session_start();
	include('connect.php');
	$arr=array("msj7","mss8","mss4","msj3","msn8","msc7",
	"mai5s","mai6s","mai7","mai7p","mai8","maix",
	"mlk8n","mlk6p","mla66p","mlk6n","mlz2p","mlk3n",
	"mn8","mn3","mn216d","mn2","mnn130","mn230d",
	"msxa1d","msr1p","msl2d","msxz1d","msxzpd","msxad",
	"del1","del2","del3","del4","del5","del6",
	"lsc3","lscp","lsn7","lsn9","lso","lsp12.3",
	"ls1","ls2","ls3","ls4","ls5","ls6",
	"tos1","tos2","tos3","tos4","tos5","tos6","tos7",
	"len1","len2","len3","len4","len5","len6",
	"app1","app2","app3","app4","app5","app6",
	"tasz","tasf","asus3","asus4","asus5","asus6",
	"htc1","htc2","htc3","htc4","htc5","htc6",
	"ts1","ts2","ts3","ts4","ts5","ts6",
	"tl1","tl2","tl3","tl4","tl5","tl6","rrr");

	
	if(isset($_POST['review']))
			{
				$name=$_POST['review'];
				
				foreach($arr as $value)
				{
					if($name==$value)
					{
						
						$pname=$value;
						$q="SELECT * FROM products WHERE pname='$pname'";
						$result=mysqli_query($connection,$q);
						$row=mysqli_fetch_assoc($result);
						$pid=$row['pid'];
						$_SESSION['pid']=$pid;
					header("Location:viewreview.php");
					}
				}
			}
	?>