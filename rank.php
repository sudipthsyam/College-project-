<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SAS Konni</title>

	<!-- font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

	<!-- External CSS -->
	<link rel="stylesheet" href="style.css">
	

	<!-- JQuery CDN link -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Navigation start -->
		<nav>
			<img src="img\logo.png" class="logo" alt="">

			<div class="navigation">
				<ul>
					<i id="menu-close" class="fas fa-times"></i>
					<li><a href="index.html" class="active">Home</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="courses.html">Courses</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>

				<img src="img/menu.png" id="menu-btn" alt="">
			</div>
		</nav>

<table>
		
		<table>
		<tr>
		<th>Application Number</th>
		<th>Name</th>
		<th>Status</th>
		
		</tr>
		<?php
		echo '<script>alert("Registration Successful")</script>';
		$con = mysqli_connect("localhost", "root", "", "application_data");
		// Check connection
		if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
		}
		$sql = "SELECT mgapp_number, name, status FROM form";
		$result = $con->query($sql);
		if (!empty($result) && $result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["mgapp_number"] . "</td><td>" . $row["name"] . "</td><td>" . $row["status"] . "</td></tr>"
				;
			}
			echo "</table>";
		}
		else {
			echo "0 result";		 
			}
		?>
		</table>
</div>
<style>
table  {
border-collapse: center;
width: 75%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: center;
margin-top: 50px;
margin-left: auto;
margin-right: auto;
border: 1px solid rgb(84, 40, 241);
outline: none;
}


th {
background-color: #f3ef00;
color: rgb(35, 35, 85);
}
nav { margin-top: -50px }
tr:nth-child(even) {background-color: #f2f2f2}

footer
{
	margin-top: 20%;
}
</style>
<footer>
		<div class="footer-col">
			<h3>Website</h3>
			<li><a href="registration.html">Registration </a> </li>
			<li>Courses</li>
			<li>About</li>
			<li>Contact Us</li>
		</div>

		<div class="footer-col">
			<h3>Departments</h3>
			<li>Mathematics</li>
			<li>Business Administration</li>
			<li>Computer Science</li>
			<li>Commerce </li>
		</div>

		<div class="footer-col">
			<h3>Academics</h3>
			<li>Feedback</li>
			<li>Syllabus </li>
			<li>Programmes</li>
			<li>Academic Calendar</li>
		</div>

		<div class="footer-col">
			<h3>Student Support</h3>
			<li>Research</li>
			<li>Experts</li>
			<li>Guides</li>
			<li>Activities and awards</li>
		</div>

		<div class="footer-col">
			<h3>Newsletter</h3>
			<p>You can trust us. we only send Education Information.</p>

			<div class="subscribe">
				<input type="email" placeholder="Your email Address">
				<a href="#" class="yellow">SUBSCRIBE</a>
			</div>
		</div>

		<div class="copyright">
			<p>
				Copyright @ 2022 All rights reserved | This template is made by @gautham
			</p>
			<div class="pro-links">
				<i class="fab fa-facebook"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-linkedin-in"></i>
			</div>
		</div>
	</footer>
</table>
</html>