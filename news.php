<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Health page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style type="text/css">
		body{
			background: oldlace;
		}
		.make{
			height: 15vh;
			margin: 10px;
		}
		nav{
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding-top:25px ;
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
		h1{
			width: 50%;
			margin: 20px auto;
			padding: 10px;
			font-size: 60px;
		}
		i{
			padding-left: 6px;
		}
		.content{
			width: 90vw;
			margin: 30px;
		}
		.align{
			background: peru;
			letter-spacing: 1px;
			width: 50%;
			margin: 20px auto;
			padding: 30px;
			font-size: 24px;
			border-radius: 10px;
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
<h1>
	Kenya lifts all mandatory Covid-19 restriction<i class="fa-solid fa-mask-face"></i>
</h1>
<div class="content">
	<p class="align">
		Kenya has lifted its remaining COVID-19 restrictions including a ban on large indoor gatherings such as religious services and a requirement to present a negative COVID-19 test for arriving air passengers.

Health Minister Mutahi Kagwe told a news conference on Friday that though the restrictions had been lifted, Kenyans should continue heeding public health measures such as handwashing and social distancing.

Face masks are no longer mandatory in public and all quarantine measures for confirmed COVID-19 cases are halted with immediate effect, he added.

For the past month the East African country's COVID-19 test positivity rate has remained below 1%, an occurence that has been attributed to the rising number of Kenyans opting to get vaccinated according to Kagwe.

Nearly 29% of Kenyan adults are fully vaccinated, more than most countries in sub-Saharan Africa.

In November, the government announced that proof of vaccination would be required by Dec. 21 to access schools, transport, state offices, hotels, bars, restaurants, national parks and wildlife reserves. But a court blocked the move amid uncertainty over who would police it or what to do about people unable to access vaccines. The minister did not mention the order in his remarks on Friday.

With a population of 54 million, Kenya recorded less than 35 daily COVID infections over the past week, according to government statistics. About 323,000 infections, and 5,600 deaths, have been recorded throughout the pandemic since 2020.
	</p>
</div>
</body>
</html>