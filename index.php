<?php include 'session_chk.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Marwadi College</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="javascript/quiz.js"></script>
	<script src="javascript/login.js"></script>
</head>

<body>
	<?php include 'header.php' ?>

	<br>
	<div class="slideshow-container">
		<div class="slides fade">
			<div class="numbertext">01 / 03</div>
			<img src="images\image4.jpg">
		</div>

		<div class="slides fade">
			<div class="numbertext">02 / 03</div>
			<img src="images\image3.jpg">
		</div>

		<div class="slides fade">
			<div class="numbertext">03 / 03</div>
			<img src="./images/image2.jpg">
		</div>
	</div>


	<div style="text-align:center">
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
	</div>

	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("slides fade");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none"; // hide
			}
			slideIndex++;
			if (slideIndex > slides.length) { 
				slideIndex = 1 
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block"; // show
			dots[slideIndex - 1].className += " active";
			setTimeout(showSlides, 2500); // 2.5 sec
		}
	</script>
	<br>

	<script type="text/javascript">
		document.title = "Home";
	</script>
	<script src="scripts/slider.js"></script>

	<div class="mainContent">
		<div class="Content">
			<article class="topContent">
				<header>
					<u>
						<h3>
							<marquee behavior="scroll" direction="right" height="100%">
								<h3>College information</h3>
							</marquee></a>
					</u></h3>
				</header>

				<footer>
					<b><i>
							<p class="post-info">History</p>
						</i></b>
				</footer>
				<content>

					<p>
					<h4>Marwadi University is a private university located in Rajkot, Gujarat, India.
						<p>It was established on 9 May 2016 by the Marwadi Education Foundation through The Gujarat
							Private Universit Act, 2016. As of 2017, it offers 54 different courses. It is graded A+ by
							NAAC.</p>
						<p>The university operates under the division of Marwadi Education Foundation's Group of
							Institutions (MEFGI). MEFGI commenced its operations in the year 2008.
						<p>It was established as a primary unit of Marwadi Education Foundation under the Bombay Public
							Trust Act 1950.</p> Marwadi University is aided by the Marwadi Shares and Finance Limited, a
						major stock broking company in India and Chandarana Intermediaries Brokers Pvt. Ltd. (CIBPL), a
						well-known firm dealing in technical and arbitrage trading.
						</p>
					</h4>
					</p>
				</content>
			</article>

			<article class="bottomContent">
				<header>
					<h3>
						<marquee behavior="scroll" direction="right" height="100%""><h3>Pathway Programme</h3></marquee></a></u></h3>  
					</header>
					<content>
						<p><h4> plan for quality higher education programmes with complete progression pathway for you – from Foundation program up to Postgraduate degree level by the universities in Australia and United Kingdom.

						<p>Our distinguished Academic and Examination Board also sets the academic and examination standards of Informatics Academy’s programmes.
						</p>
						<p>We make learning exclusive for you.
						We know everyone has different learning needs and lifestyles.
						<p>We have learning modes ranging from traditional classroom learning, to e-learning and a combination of both to accommodate to different learning patterns.
						</p>
						<p>Our holistic education programme places equal emphasis on both academic and non-academic, co-curricular activities.</p>
						<p> We strive to provide learning and support services, as well as a conducive environment for you to learn, live and develop into global thought leaders of tomorrow.

						We focus in giving you the best......</p></h4>

						</p>
					</content>
				</article>

				<article class=" bottomContent">
							<header>
								<h3><u>
										<center>"We make your Future bright!"</center></a>
									</u></h3>
							</header>
							<content>
								<br>
								<br>

								<p>
									<center>
										<h2 style="color: red;">1700+</h2>International students from 53 Countries
									</center>
								</p>

								<br>
								<br>

								<p>
									<center>
										<h2 style="color: red;">500+</h2>Faculty member with over120 phD Faculties
									</center>
								</p>

								<br>
								<br>

								<p>
									<center>
										<h2 style="color: red;">480+</h2>Companies visited for placements
									</center>
								</p><br>

								<br>
								<br>
								<br>
							</content>
			</article>

		</div>
	</div>

	<aside class="top-sidebar">
		<article>
			<h3><u>Join us today!</u></h3>
			<p>For exciting learning journey with Marwadi University</p>
		</article>
	</aside>

	<aside class="middle-sidebar">
		<article>
			<h3><u>Your Boardroom Qualification</u></h3>
			<p>A Degree to stand out from the crowd…...</p>
		</article>
	</aside>

	<aside class="buttom-sidebar">
		<article>
			<h3><u>Be ahead of your peers</u></h3>
			<p>Fast track your education with marwadiuniversity</p>
		</article>
	</aside>

	<aside class="buttom-sidebar">
		<article>
			<h3><u>Course offered @ marwadiuniversity</u></h3>
			<p>
			<h5>Graduation</h5>
			</p>
			<p>
			<h5>Post Graduation</h5>
			</p>
			<p>
			<h5>Doctoral</h5>
			</p>
			<p>
			<h5>Diploma</h5>
			</p>
		</article>
	</aside>

	<aside class="buttom-sidebar">
		<article>
			<h3><u>Our Faculties</u></h3>
			<p>
			<h5>Hostel</h5>
			</p>
			<p>
			<h5>Bus Transportation</h5>
			</p>
			<p>
			<h5>Canteen and Mess</h5>
			</p>
			<p>
			<h5>Laboratory</h5>
			</p>
			<p>
			<h5>Library</h5>
			</p>
			<p>
			<h5>Sports and Fitness </h5>
			</p>
		</article>
	</aside>

	<aside class="buttom-sidebar">
		<article>
			<h3><u>Events</u></h3>
			<p>
			<h1>02 Feb 2023</h1> MU 5th Annual Convocation </p>
			<p>
			<h1>14 jan 2023</h1> kite fly event at Mu </p>
			<p>
			<h1>26 Jan 2023</h1> 74th flag hosting at Mu </p>
			<p>
			<h1>02 Jan 2023</h1> Architech project by Mu students </p>
		</article>
	</aside>

	<?php include 'footer.php' ?>
	<div class="overlay"></div>
</body>

</html>