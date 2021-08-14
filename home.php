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
<!DOCTYPE html >
<html >
<head>
<meta charset=utf-8" />
<title>Shelton Lanka-Home page</title>
<link rel="stylesheet"type="text/css"  href="slider.css">
<link rel="stylesheet"type="text/css"  href="dropmen.css">

</head>

<body>
<iframe style="display:none;" width="560" height="315" src="https://www.youtube.com/embed/Lh3keXRnSc4?rel=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="menu-bar">

<ul>
 <td width="30" height="44"><img src="img/logo.jpg" width="137" height="94"/></td>
<li class=""><a href="home.php">Home</a></li>
<li><a href="informations.php">About Us</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="#">Food Categories</a>
<div class="sub-menu-1">
<ul>
<li><a href="manager/showbreakfast.php">Breakfast</a></li>
<li><a href="manager/showlunch.php">Lunch</a></li>
<li><a href="manager/showdinner.php">Dinner</a></li>
<li><a href="manager/showdesert.php">Desser</a>t</li>
<li><a href="manager/showdrinks.php">Drinks</a></li>
<li><a href="manager/showshorteast.php">Snaks</a></li>
</ul>
</div>
</li>
<li><a href="contactus.php">Contact Us</a></li>
<li><a href="maps.html">Direction</a></li>
<li><a href="#">Cart</a></li>
<li><a href="instructions.html">Get Help</a></li>
<li><a href="main.php">Sign Out </a></li>
</ul>

<div class="slidem"></div>


<div class="footer">
<div class="footer-content">

<div class="footer-section about">
<h1 class="logo-text"><span>Shelton </span> Lanka</h1><br>
<p>
We help our customer to buy, by timely responding to customer needs and proactive servicing.	
</p><br>
<div class="conatct">
<span><i calss="phone"></i>071-559-7698</span><br>
<a href="#"><i class="email"></i>Sheltonlanka.com</a>
</div>
</div>

<div class="footer-section links">
<h1 class="logo-text"><span>Informations </span></h1><br>
<ul>
<li><a href="manager/showbreakfast.php">Breakfast</a></li>
<li><a href="manager/showlunch.php">Lunch</a></li>
<li><a href="manager/showdinner.php">Dinner</a></li>
<li><a href="manager/showdesert.php">Dessert</a></li>
<li><a href="manager/showdrinks.php">Drinks</a></li>
<li><a href="manager/showshorteast.php">Snaks</a></li>
</ul>
</div>

<div class="footer-section contact-form">
<h1 class="logo-text"><span>Contact Details </span></h1><br>
<form action="home.php" method="POST">
<input type="text" id="email" name="email" class="text-input contact-input" placeholder="Type email address..">
<textarea name="message" id="message" class="text-input contact-input" placeholder="Your massage"></textarea><br>
<button type="Submit" id="submit" name="submit" class="btn btn-big">
<i class="fas fa-envelope"></i>
Send
</button>
</form>
</div>



<div class="footer-bottom">
&copy; dilumfonseka1998@gmail.com | Designed by Dilum Fonseka
</div>
</div>
</div>

</body>
</html>