 <?php
			if(isset($_POST["submit"]))
			{
				
				$emai=$_POST["email"];
				$messag=$_POST["message"];
				
$conn=mysqli_connect("localhost","root","","shelton_lanka");
		
		if(!$conn)
		{
			die("Message cannot be sent some informations may be wrong plese recheck");
		}
		
		$sql="INSERT INTO `messages`(`ID`, `Email`, `Message`) VALUES(NULL,'".$emai."','".$messag."')";
		
				
				
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Message sent sucessfully');</script>";
		}
		else
		{
			echo "<script>alert('Some problem occure plese send it again');</script>";
		}

			}
			
			?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset=utf-8" />
<title>Shelton Lanka-Main page</title>
<link rel="stylesheet" type="text/css" href="main.css"/>

</head>

<body>
<iframe style="display:none;" width="560" height="315" src="https://www.youtube.com/embed/Lh3keXRnSc4?rel=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="menu-bar">
<div>
<ul>
 <td width="30" height="44"><img src="img/logo.jpg" width="250" height="100"/></td>

<li><a href="informations.php">About Us</a>
</li>
<li><a href="services.html">Services</a></li>


<li><a href="contactus.php">Contact Us</a></li>
<li><a href="maps.html">Direction</a></li>
<li><a href="instructions.html">Get Help</a></li>
<li><a href="#">Login info </a>
<div class="sub-menu-1">
<ul>
<li><a href="login.php">Sign in</a></li>
<li><a href="adminlogin.php">Admin Login</a></li>

</ul>
</div>
</li>
</ul>
</div>


<div class="slidem"></div>


<div class="footer">
<div class="footer-content">

<div class="footer-section about">
<h1 class="logo-text"><span>Shelton </span> Lanka</h1><br>
<p>
We help our customer to buy, by timely responding to customer needs and proactive servicing.	
</p><br>
</div>




<div class="footer-section contact-form">
<h1 class="logo-text"><span>Any Comments</span></h1><br>
<form action="main.php" method="POST">
<input type="email" id="email" name="email" class="text-input contact-input" placeholder="Type email address.."><br><br>
<textarea name="message" id="message" class="text-input contact-input" placeholder="Your massage"></textarea><br><br>
<button type="Submit" id="submit" name="submit" class="btn btn-big">
<i class="fas fa-envelope"></i>
Send
</button
></form>
</div>
</div>
</div>
<div class="footer-bottom">
&copy; dilumfonseka1998@gmail.com | Designed by Dilum Fonseka
</div>



</body>
</html>
