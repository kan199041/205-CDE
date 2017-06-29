<?php

include("dbconnect.php");
$note=$_REQUEST['note'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Contact Us</title>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/contactform.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />


	</head>
	
		<header>
			<nav>
				<h1>Welcome to Healthy Life</h1>
				<ul>
					<li class="dropdown">
						<li><b><a href="Home.html">Home</a></li>
						<li><b><a href="howto.html">How to do?</a></li>
						<li><a href="Contact Us.html">Contact Us</a></li>				
					<div id="headerLoginform">
					<form method="post">
						<input type="text" name="username" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
						<input type="button" value="Login">
						<a href="signup.html"><input type="button" value="Sign Up"></a>
					</form>
					</li>
					</div>
				</ul>
			</nav>
		</header>
	<body>

	<div id="page-wrap">
	    <?PHP if($note=='success')
	    {
	    echo "<div class=\"success\">Form successfully submitted!</div>";
	    }
	?>

	<h1>Contact Us</h1>

	    <div id="contact-area">

	        <form method="post" action="user_process.php">
	            <label for="Name">Name:</label>
	            <input type="text" name="name" id="Name" />

	            <label for="City">City:</label>
	            <input type="text" name="city" id="City" />

	            <label for="Email">Email:</label>
	            <input type="text" name="email" id="Email" />

	            <label for="Message">Message:</label><br />
	            <textarea name="message" rows="20" cols="20" id="Message"></textarea>

	            <input type="submit" name="submit" value="Submit" class="submit-button" />
	        </form>

	        <div style="clear: both;"></div>
	    </div>

	</div>



	<footer>
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-youtube"></a>
		<a href="#" class="fa fa-instagram"></a>
		<a href="#" class="fa fa-snapchat-ghost"></a><br>
		<script type="text/javascript">
        document.write (Date());
        </script></time>
	</footer>
</html>