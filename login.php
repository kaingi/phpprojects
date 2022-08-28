<?php

include "db_login.php";
?>
<html>
	<head>
		<title>login</title>
		<style type="text/css">
			#box{
				background-color: lightseagreen;
				width: 300px;
				height: 300px;
				padding: 20px;
				border-radius: 5px;
				margin: auto;
			}
			#size{
				text-align: center;
				font-size: 30px;
				font-weight: bold;
				justify-content: center;
				padding-bottom: 20px;

			}
			#text{
				height:  25px;
				border-radius: 5px;
				padding: 4px;
				borrder: solid thin #aaa;
				width: 100%;
				height: 40px;
			}

			#button{
				padding: 10px;
				width: 100px;
				color: white;
				background-color: red;
				border: none;
				border-radius: 5px;
			}
			a {
				margin:auto;
				background-color: black;
				text-decoration: none;
				padding: 11px;
				border-radius: 5px;
				color: white;
				border: 1px solid red;
			}
			a:hover {
				background-color: red;
				border: 1px solid black;
			}
			.make{
				margin-left: 2px;
			}
		</style>
	</head>
	<body>
		
		<div id="box">
			<form action="login.php" method="POST"> 
				<div id="size">login</div>

				Email:<input id="text" type="email" name="email" placeholder="Enter Email" required><br><br>

				password: <input id="text" type="password" name="password" placeholder="Enter password" required><br><br>

				<input id="button" type="submit" value="login" name="login"><br><br>

				if you don't have an account please?<a href="signup.php" class="make">signup</a>
			</form>
		</div>
	</body>
</html>