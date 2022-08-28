<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Service page</title>
	<style type="text/css">
		.make{
			height: 15vh;
		}
		nav{
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding-top:20px ;
			padding-right: 8%;
			padding-left: 8%;
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
			padding: 10px 20px;
		}
		nav ul li a{
			text-decoration: none;
			border: 1px solid black;
			padding: 10px;
			border-radius: 7px;
			background: lightcyan;
		}
		a:hover{
			background: linear-gradient(lavenderblush,lightblue);
			border: 1px solid grey;
		}


		body{
			background: lightcoral;
		}
.service{
	background:#101010;
	width: 100%;
	padding: 100px 0px;
}

.title h2{
	color: black;
	font-size: 75px;
	width: 1130px;
	margin: 30px auto;
	text-align: center;
}
.box{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 400px;
}

.card{
	height: 365px;
	width: 335px;
	padding: 20px 35px;
	background: #191919;
	border-radius: 20px;
	margin: 15px;
	position: relative;
	overflow: hidden;
	text-align: center;
}

.card i{
	font-size: 50px;
	display: block;
	text-align: center;
	margin: 25px 0px;
	color: #f9004d;
}
h5{
	color: white;
	font-size: 20px;
	margin-bottom: 15px;
}
.pra{
	color: #fcfc;
	font-size: 16px;
	line-height: 27px;
	margin-bottom: 25px;
}

.pra .button{
	background-color: red;
	color: white;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 9px 22px;
	border-radius: 30px;
	transition: .4s;
}

.button:hover{
	background-color: transparent;
	border: 2px solid red;
	cursor: pointer;
}
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
<div id="service">
	<div class="title">
		<h2>our services</h2>
	</div>
	<div class ="box">
		<div class="card">
			<i class="fa-solid fa-bed-pulse"></i>
			<h5>Inpatient</h5>
			<div class="pra">
				<p>
Inpatient care is care provided in a hospital or other type of inpatient facility, where you are admitted, and spend at least one night—sometimes more—depending on your condition. As an inpatient: You are under the care of doctors, nurses, and other types of health care professionals within a hospital.</p>
				<p style="text-align: center;">
					<a href class="button" href="#">Book</a>
				</p>
			</div>
		</div>

		<div class="card">
			<i class="fa-solid fa-capsules"></i>
			<h5>Outpatient</h5>
			<div class="pra">
				<p>
Tokeo la picha la Outpatient services examples
Services offered by the clinic include:
<ul>
	<li>Provision of self- initiated testing, couples testing and counselling.</li>
	<li>Prevention care.</li>
	<li>Cervical cancer screening and treatment.</li>
	<li>Research.</li>
	<li>Nutritional Care.</li>
</ul>
</p>
				<p style="text-align: center;">
					<a href class="button" href="#">Book</a>
				</p>
			</div>
		</div>

		<div class="card">
			<i class="fa-solid fa-microscope"></i>
			<h5>Labaratory services</h5>
			<div class="pra">
				<p>Clinical laboratory services involve the biological, microbiological, serological, chemical, immunohematological, hematological, biophysical, cytological, pathological, or other examination of materials derived from the human body for the diagnosis, prevention, or treatment of a disease or assessment of a medical.</p>
				<p style="text-align: center;">
					<a href class="button" href="#">Book</a>
				</p>
			</div>
		</div>


	</div>
</div>
</body>
</html>