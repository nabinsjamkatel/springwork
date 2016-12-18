<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Spring Foundation Nepal</title>
  <meta name="description" content="Spring Foundation Nepal" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
</head>

<body>
  <div id="main">
    <div id="header">
	  <div id="banner">
	    <div id="welcome">
	    <div id="logo">
					<a href="index.html"><img src="images/logo.jpg" alt="LOGO" height="206" width="200"></a>
			</div>
	      <h1>Spring Foundation Nepal</h1>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <h1>"We Find Ways, When There's Nothing Else"</h1>
	    </div><!--close welcome_slogan-->
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="menubar">
      <ul id="menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="ourwork.html">Our Work</a></li>
        <li><a href="Team Members">Team Members</a></li>
        <li><a href="projects.html">Programs</a></li>
        <li class="current"><a href="contact.html">Contact Us</a></li>
        <li><a href="gallery.html">Gallery</a></li>
      </ul>
    </div><!--close menubar-->
	
	<div id="site_content">	

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>New Website</h2>
            <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Update</h2>
            <h3>March 2013</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>February 2013</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>January 2013</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Phone: 00977 9801155838</p>
            <p>Email: <a href="springfoundationnepal@gmail.com">springfoundationnepal@gmail.com</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->
	
	  <div class="slideshow">
	    <ul class="slideshow">
         <li class="show"><img width="680" height="300" src="images/elderly care.jpg" alt="&quot;We Find Ways, When There's Nothing Else;" /></li>
          <li><img width="680" height="300" src="images/women empowerment(1).jpg" alt="&quot;We Find Ways, When There's Nothing Else;" /></li>
          <li><img width="680" height="300" src="images/education(1).jpg" alt="&quot;We Find Ways, When There's Nothing Else;" /></li>
        </ul>
      </div>	 	   
	   
//connection to database
<?php
$link = mysqli_connect('localhost','root','','springwork');
if(!$link)
{
	die('Connection Error'. mysqli_error());
}
?>
//login page
<?php
session_start();
include "conn.php";
if(isset($_POST['submit']))
{
	$user = $_POST['user'];
	$psd = $_POST['psd'];

	$_SESSION['user'] = $user;
$sql = "SELECT  `username` and `password` FROM `user` 
WHERE `username` = '$user' and `password`= '$psd' ;";

$op = mysqli_query($link,$sql);
$res = mysqli_num_rows($op);
if($res)
{
	header("Location:profile.php");
}
else
{
	header("Location:index.php");
}
}
?>
  
    <div id="content">
        <div class="content_item">
		  <div class="form_settings">
                  
            <h2>Contact Us</h2>
            <form name= "Springform" method="POST" action="insert.php">
            <p>A contact form requires some method of emailing the contents of the form to an email address. The most common way to do this is to use some kind of server script (PHP for example). I would be happy to send you the PHP code for the contact form for your chosen template, I charge £20.00GBP for this. Simply <a href="http://www.araynordesign.co.uk/contact.php">contact me</a> for more details.</p>
			<p>&nbsp;</p>
			<p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
			<p><span>Address</span> <input type = "text" name = "address"></p>
                        <p><span>Phone number</span> <input type="text" name = "phonenumber"></p>
			<p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
			<p><span>Message</span><textarea class="contact textarea" rows="8" cols="50" name="your_message"></textarea></p>
            <p style="padding: 10px 0 10px 0;">Please enter the answer to this simple maths question (to prevent spam)</p>
			<p><span>Maths Question: 9 + 3 = ?</span><input type="text" name="user_answer" class="contact" /><input type="hidden" name="answer" value="4d76fe9775" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submit" value="Send" /></p>
</form>
          </div><!--close form_settings-->
		</div><!--close content_item-->
      </div><!--close content-->  
    </div><!--close site_content-->  

	<div id="content_bottom">
	  <div class="content_bottom_container_box">
		<h4>Latest Blog Post</h4>
	    <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
		<div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_box">
       <h4>Latest News</h4>
	    <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->
	  </div><!--close content_bottom_container_box-->
      <div class="content_bottom_container_boxl">
		<h4>Latest Projects</h4>
	    <p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
	    <div class="readmore">
		  <a href="#">Read more</a>
		</div><!--close readmore-->	  
	  </div><!--close content_bottom_container_box1-->      
	  <br style="clear:both"/>
    </div><!--close content_bottom-->    
 
  </div><!--close main-->
  
  <div id="footer">
	  <a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a> | <a href="http://fotogrph.com/">Images</a> | <a href="http://www.heartinternet.co.uk/vps/">Virtual Server</a> | website template by <a href="http://www.araynordesign.co.uk">Nabin Jamkatel</a>
  </div><!--close footer-->  	
  
</body>
</html>
