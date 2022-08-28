<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		#heading{
			height: 100vh;
			width: 100%;
			background: linear-gradient(lavenderblush,lightcyan);
		}
		nav{
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding-top:45px ;
			padding-right: 8%;
			padding-left: 8%;
			position: absolute;
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
			padding: 10px 30px;
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
		.content{
			position: absolute;
			top: 20%;
			margin: 20px;
			align-items: center;
			justify-content: center;
		}
		.sizing{
			border: 1px solid black;
			height: 50%;
			width: 50%;
			padding: 20px;
			font-size: 20px;
			border-radius: 15px;
		}
		i{
			color: maroon;
			font-size: 25px;
		}
		h4{
			font-size: 30px;
			color: black;
			justify-content: center;
		}
		h1{
			font-size: 30px;
		}
		#service{
			height: 100vh;
			width: 100%;
			background: lightcyan;
		}
		.about{
	width: 100%;
	padding: 100px 0px;
	background-color: black;

}

.about-text{
	width: 550px;
}
.main{
	width: 1130px;
	max-width: 95%;
	margin: 0 auto;
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.about-text h2{
	color: white;
	font-size: 75px;
	text-transform: capitalize;
	margin-bottom: 20px; 
}

.about-text h5{
	color: white;
	letter-spacing: 2px;
	font-size: 22px;
	margin-bottom: 25px;
	text-transform: capitalize;
}

.about-text p{
	color: #fcfc;
	letter-spacing: 1px;
	line-height: 28px;
	font-size: 18px;
	margin-bottom: 45px;
}

button{
	background-color: #f9004d;
	color: white;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 13px 30px;
	border-radius: 30px;
	transition: .4s;
}

button:hover{
	background-color: transparent;
	border: 2px solid red;
	cursor: pointer;
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
<div id="heading">
	<nav>
	<h2 class="logo">Joy <span>pharmacy</span></h2>
			<ul>
				<li><a href="about.php">About us</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a href="careers.php">Careers</a></li>
				<li><a href="contact.php">Contact us</a></li>
				<li><a href="news.php">Health News</a></li>
				<li><a href="logout.php">logout</a></li>
			</ul>
			
	</nav>
	<div class="content">
		<h4>Welcome to JOY PHARMACY</h4>
		<div class="sizing">
			<p>
			<i class="fa-solid fa-pills"></i> Joy hospital in  is located eastlands near pumwani hospital. So when you leave the center with a prescription you can walk next door and pick it up from us.
			<p>
				We are specialists in presciption collection and delivery and we have unbeatable prices o private and veterinary precriptions.
			</p>
			<p>
				We are specialists in presciption collection and delivery and we have unbeatable prices o private and veterinary precriptions.<i class="fa-solid fa-syringe"></i>
			</p>
		</p>
		</div>
		
	</div>
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