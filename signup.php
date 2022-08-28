<?php
//include connection file file
require_once "db_connection.php";
include "db_signup.php";
?>



<html>
	<head>
		<title>signup</title>
		
	</head>
	<body>
		<style type="text/css">
			span{
				color: darkred;
			}
			#text{
				height:  25px;
				border-radius: 5px;
				padding: 4px;
				border: solid thin #aaa;
				width: 95%;
				height: 30px;
			}
			#size{
				text-align: center;
				font-size: 30px;
				font-weight: bold;
				justify-content: center;
				padding-bottom: 20px;

			}
			#button{
				margin-top: 10px;
				padding: 10px;
				width: 100px;
				color: white;
				background-color: red;
				border: none;
				border-radius: 5px;
			}
			#box{
				background-color: lightcoral;
				margin: auto;
				width: 300px;
				padding: 20px;
				border-radius: 10px;
			}
			.text{
				color: white;
			}
			a{
				text-decoration: none;
				background-color: red;
				padding: 7px;
				border-radius: 5px;
				border: 1px solid black;
				color: white;
				margin-left: 10px;
			}
			a:hover{
				background-color: black;
				border: 1px solid red;
				color: white;
			}
			.t{
				margin-top: 20px;
				color: white;
			}

				</style>
		<div id="box">
			<form method="post"> 
				<div id="size">signup</div>
				Email:<br><input id="text"type="email" name="email" placeholder="Email" required><span>*</span> <br><br>

				UserName:<input id="text"type="text" name="username" placeholder="username" required><span>*</span><br><br>

				Password:<input id="text" type="password" name="password" placeholder="password" required><span>*</span><br><br>

				ConfirmPasswod:<input id="text" type="password" name="cpassword" placeholder="confirm password" required><span>*</span>
				<br><br>

				Gender
				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Transgender">Transgender<span>*</span>
				<br><br>

				<input id="button" type="submit" value="signup" name="signup"><br><br>
				<div class="text">
					if you have a an account?<a href="login.php">login</a>
				</div>
				<div class="t">
					For access without user's previledge<a href="index.php">index</a>
				</div>
			</form>
		</div>
	</body>
</html>