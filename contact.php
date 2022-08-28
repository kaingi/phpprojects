<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact us</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		body{
			background: lightcoral;
		}
		.make{
			height: 20vh;
			width: 100%;
		}
		nav{
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding-top:20px;
			position: fixed;
		}
		.logo{
			color: lightblue;
			font-size:35px;
			letter-spacing: 1px;
			cursor: pointer;
		}
		span{
			color: blue;
		}
		nav ul li{
			list-style-type: none;
			display: inline-block;
			padding: 10px 10px;
		}
		nav ul li a{
			text-decoration: none;
			border: 1px solid black;
			padding: 10px;
			border-radius: 7px;
			background: lightcyan;
			color: black;
		}
		a:hover{
			background: linear-gradient(lavenderblush,lightblue);
			border: 1px solid grey;
		}
		h4{
			margin-left: 350px;
			align-items: center;
			justify-content: center;
			display: grid;
			font-size: 30px;

		}
		span{
			color: red;
		}
		.form{
			margin: 20px 30px;
			padding: 30px;
			width: 80%;
			background: lightgrey;
			border-radius: 15px;
			display: flex;
		}
		.sizing{
			width: 40%;
			margin-left: 10%;
			background: lightcyan;
			border-radius: 10px;
		}
		.align{
			margin: 20px 70px;
			padding: 30px;
		}
		label{
			font-size: 17px;
			font-weight: bold;
			letter-spacing: 1px;
		}
		input{
			height: 30px;
			width: 90%;
			border-radius: 4px;
		}

		a{
			text-decoration: none;
			border: 1px solid black;
			margin: 30px;
			padding: 10px;
			border-radius: 5px;
			background: blue;
			color: white;

		}
		.size{
			margin-left: 40px;
			width: 40%;
			background: linear-gradient(lightgrey,black);
			border-radius: 10px;
		}
		h1{
			font-size: 40px;
			margin: 10px 50px;
		}

		.flex{
			margin-top: 40px;
		}
		a{
			text-decoration: none;
		}
		i{
			color: black;		}
	</style>
</head>
<body>
<div class="make">
		<nav>
	<h2 class="logo">Joy <span>pharmacy</span></h2>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a href="careers.php">Careers</a></li>
				<li><a href="contact.php">Contact us</a></li>
				<li><a href="news.php">Health News</a></li>
				<li><a href="logout.php">logout</a></li>
			</ul>
			
	</nav>
</div>
<h4>Please get in touch and our expert support team will answer all your questions.</h4>
<div class="form">
	<form action="contact.php" method="post" class="sizing">
		<div class="align">
			<label>FIRST NAME</label><span>*</span><br><input type="text" name="fullname" placeholder="First name*"required><br><br>

		<label>LAST NAME</label><span>*</span><br><input type="text" name="lastname" placeholder="lastname"required><br><br>

		<label>EMAIL</label><span>*</span><br><input type="email" name="email" placeholder="Email"required><br><br>

		<label>MESSAGE</label><span>*</span><br><input type="text" name="message" placeholder="message"required><br><br>

		<label>ADDITIONAL DETAIL</label><br><input type="text" name="add"><br><br>
		<a href="mailto:abc@gmail.com">Send message</a>
		</div>
	</form>
	<section class="size">
		<h1>Social Media Sites</h1>
		<div class="flex">
			<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
			<a href="#"><i class="fa-brands fa-instagram"></i></i></a>
			<a href="#"><i class="fa-brands fa-twitter-square"></i></a>
			<a href="https://github.com/kaingi"><i class="fa-brands fa-github"></i></a>
		</div>
	</section>
</div>
</body>
</html>