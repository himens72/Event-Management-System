<?php session_start();
 if(!isset($_SESSION['userid'])) {
header('Location:index.php');
}
?>

<?php
//Template for basic page
$template = <<<EOD
<!DOCTYPE html>
<html>
<head>
<title>Event Management System | Profile</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<style>
#header1
{
	width:30%;
	height:60%;
	background-color:white;
	float:left;
	margin-top:2%;
	margin-bottom:2%;
}
#header2
{
	width:60%;
	height:60%;
	background-color:white;
	float:left;
	margin-top:2%;
	margin-bottom:2%;
}
#header3
{
	margin-top:2%;
	width:2%;
	height:60%;
	background-color:white;
	float:left;
	}
</style>
</head>
<body>
<!--header-->
	<div class="header">
	
			<div class="header-top">
				<div class="container">
				<div class="logo">
					<a href="index1.php"><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="search">
					<form>
				
				  </form>
				</div>
               
			<div class="clearfix">
			  <div class="login">
			    <form>
                       <a href="index1.php"><input type="button" value="Home"  readonly="readonly"  ></a> 
			    </form>
              </div>
              </div>
		</div>
		</div>
				
	</div>
<!--content-->
<div class="content">
<div class="container">
<div id="header1">
<img src="images/auto.jpg">   
    </div>
    <div id="header3"></div>
  <div id="header2">
    <table align="center">
    <tr>
    <td><h2><!--TITLE--></title></h2></td>
    </tr>
    <tr>
    &nbsp;
    </tr> 
        <tr>
        <td><p><!--COMMENT--></p></td>
        </tr>
    </table>
</div>
    </div>      
</div>

    </div>		<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="PHPs/index1.php">Home</li>
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				
					<p>
Event Management System</p>
					<p>Nirma University</p>
					<p>Office :  +91-8690267513</p>
					
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Follow Us</h4>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="google"> </i></a></li>
						<li><a href="#"><i class="dribbble"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p><a href="index1.php">Event Management System</a></p>
		</div>
		</div>
		
</body>
</html>
EOD;
if(isset($_POST['title'])&&isset($_POST['comment'])){
    //replace the areas of the template with the posted values
    $page = str_replace('<!--TITLE-->',htmlentities($_POST['title']),$template);
    $page = str_replace('<!--COMMENT-->',htmlentities($_POST['comment']),$page);
    //create a name for the new page
    $pagename = $_POST['title'].'.html';
  $db = mysqli_connect('localhost','root','','ems') or die (mysqli_error());
	$d=mysqli_real_escape_string($db,$pagename);
	$sql="SELECT pagename from yourtable WHERE url='$d'";
	$result = $db->query($sql);
	$num = $result->num_rows;
	if($num>=1)
	{
	$notice = '<p>Page already created <b> D:\wamp\www\ems\ '.$pagename.'</b></p>';
    }else
	{
        $tit=mysqli_real_escape_string($db,htmlentities($_POST['title']));
		$com=mysqli_real_escape_string($db,htmlentities($_POST['comment']));
		$sql1=$db->query("INSERT into yourtable (title,comment,url)VALUES('{$tit}','{$com}','{$pagename}')");
		file_put_contents('D:/wamp/www/ems/'.$pagename,$page);
        //make a notice to show the user
        $notice = '<p>New Page created <b>D:/wamp/www/ems/'.$pagename.'</b></p>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Event Management System | Profile</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<style>
#header1
{
	width:30%;
	height:60%;
	background-color:white;
	float:left;
	margin-top:2%;
	margin-bottom:2%;
}
#header2
{
	width:60%;
	height:60%;
	background-color:white;
	float:left;
	margin-top:2%;
	margin-bottom:2%;
}
#header3
{
	margin-top:2%;
	width:2%;
	height:60%;
	background-color:white;
	float:left;
	}
</style>
<script>
function imageSize()
{
	
	
}
function imageCheck()
{
var filename=document.forms["profile"]["image"].value; 
	if(filename==NULL)
	{	
		alert("No File Exist");
		return false;
	}
	else
	{
document.getElementById("profileImage").height = "184";
	document.getElementById("profileImage").width = "165";
	return true;
	}
	
}
</script>
</head>
<body>
<!--header-->
	<div class="header">
	
			<div class="header-top">
				<div class="container">
				<div class="logo">
					<a href="index1.php"><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="search">
					<form>
					<span style="padding-left:4%"><a href="PHPs/Logout.php"><input type="text" value="LogOut"  readonly ></a></span>
				  </form>
				</div>
               
			<div class="clearfix">
			  <div class="login">
			    <form>
                       <a href="profile.php"><input type="button" value="<?php if(!isset($_SESSION['cname']))echo $_SESSION['name']; else  echo $_SESSION['cname'];?>"  readonly="readonly"  ></a> 
			    </form>
              </div>
              </div>
		</div>
		</div>
				
	</div>
<!--content-->
<div class="content">
<div class="container">
    <div id="header1">
<img src="images/ga10.jpg">   
    </div>
    <div id="header3"></div>
  <div id="header2"><?php
//if the notice is set then display it
if(isset($notice)){echo $notice;} ?>
<form method="POST" action="">
    <table align="center">
    <tr>
        <td>Title:</td>
        <td>&nbsp;</td>
        <td><input type="text" name="title" size="31"></td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>    
    <tr>
        <td>Comment:</td>
      <td>&nbsp;</td>
        <td><textarea rows="5" name="comment" cols="21"></textarea></td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
        <td>&nbsp;</td>  
    <td><input type="submit" value="Submit"></td>  
              
    </tr>
    </table>
</form></div>
    </div>      
</div>

    </div>
		<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="PHPs/Logout.php">LogOut</a></li>
						<li><a href="UpComing Event1.php">UpComing Events</a></li>
						<li><a><form action="https://www.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="<?php echo $_SESSION['email']; ?>">

<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">

<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="Advertisement Cost">
<input type="hidden" name="amount" value="500">
<input type="hidden" name="currency_code" value="USD">

<!-- Provide a dropdown menu option field. -->
<input type="hidden" name="on0" value="Type">Buy Units<br />
<select name="os0">
<option value="Select a type">-- Select amount --</option>
<option value="1 Day ">5 Units</option>
<option value="2 Days">10 Units</option>
<option value="3 Days">15 Units</option>
<option value="4 Days">20 Units</option>
</select> <br />

<!-- Display the payment button. -->
<input type="image" name="submit" border="0"
src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
alt="PayPal - The safer, easier way to pay online">

<img alt="" border="0" width="1" height="1"
src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form></a></li>
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				
					<p>
Event Management System</p>
					<p>Nirma University</p>
					<p>Office :  +91-8690267513</p>
					
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Follow Us</h4>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="google"> </i></a></li>
						<li><a href="#"><i class="dribbble"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p><a href="index1.php">Event Management System</a></p>
		</div>
		</div>
		
</body>
</html>