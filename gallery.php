<?php include 'session_chk.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gallery | Marwadi College</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">

	<style>
		.video-container {
			width: 90vw;
			/* width: 100vw; */
			margin: 20px auto;
			/* padding: 0;
			margin: 0; */
			text-align: center;
			/* position: absolute;
			overflow: hidden; */
		}

		.video-container video {
			width: 100%;
			max-height: 400px;
			/* height: auto; */
			/* display: block; */
			border: none;
			border-radius: 10px;
			background: white;
		}
		
		.gallery-container {
			display: flex;
			flex-wrap: wrap;
			gap: 15px;
			padding: 20px;
			background-color: #f4f4f4;
			align-items: flex-start;
		}

		/* Box */
		.gallery {
			width: 250px;
			height: 260px;
			border: 2px solid #ccc;
			overflow: hidden;
			display: flex;
			align-items: center;
			justify-content: center;
			background: white;
			text-align: center;
			cursor: pointer;
			transition: transform 0.3s ease-in-out;
		}

		/* hover */
		.gallery:hover {
			border-color: #09a3b9;
			transform: scale(1.05);
		}

		.gallery img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			border-bottom: 2px solid black;
			transition: transform 0.3s ease-in-out;
		}

		.gallery img:hover {
			transform: scale(1.1);
		}

		.desc {
			width: 250px;
			padding: 10px;
			font-size: 1.2rem;
			font-weight: bold;
			text-align: center;
			color: black;
			margin-top: 5px;
		}

		.gallery:hover+.desc {
			color: #09a3b9 !important;
		}

		.lightbox {
			display: none;
			position: fixed;
			z-index: 1000;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.8);
			justify-content: center;
			align-items: center;
		}

		.lightbox img {
			max-width: 90vw;
			max-height: 90vh;
			object-fit: contain;
			border-radius: 10px;
		}

		.close-btn {
			position: absolute;
			top: 20px;
			right: 30px;
			font-size: 30px;
			color: white;
			cursor: pointer;
		}
	</style>
</head>

<body>
	<?php include 'header.php' ?>

	<h3 style="color: black;">Aerial Tour of Marwadi University</h3>
	<div class="video-container">
		<video autoplay loop muted>
			<source src="images/Video-812.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</div>

	<h3 style="color: black;">Marwadi University</h3>
	<div class="gallery-container">
		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/13.png')">
				<img src="images/gallery_images/13.png" alt="Event 1">
			</div>
		</div>
	</div>


	<h3 style="color: black;">MU Fest 2025 | Celebrity Nights</h3>
	<div class="gallery-container">
		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/01.png')">
				<img src="images/gallery_images/01.png" alt="Event 1">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/08.png')">
				<img src="images/gallery_images/08.png" alt="Event 3">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/09.png')">
				<img src="images/gallery_images/09.png" alt="Event 3">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/02.png')">
				<img src="images/gallery_images/02.png" alt="Event 2">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/03.png')">
				<img src="images/gallery_images/03.png" alt="Event 3">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/10.png')">
				<img src="images/gallery_images/10.png" alt="Event 3">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/11.png')">
				<img src="images/gallery_images/11.png" alt="Event 3">
			</div>
		</div>
	</div>

	<br>

	<h3 style="color: black;">MU Fest 2025 | <span style="color: #09a3b9;">Glamour on Stage</span></h3>
	<div class="gallery-container">
		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/04.png')">
				<img src="images/gallery_images/04.png" alt="Event 1">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/05.png')">
				<img src="images/gallery_images/05.png" alt="Event 2">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/06.png')">
				<img src="images/gallery_images/06.png" alt="Event 3">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/07.png')">
				<img src="images/gallery_images/07.png" alt="Event 3">
			</div>
		</div>
	</div>

	<h3 style="color: black;">Marwadi University | <span style="color: #09a3b9;">Ganesh Chathurthi<span/></h3>
	<div class="gallery-container">
		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/14.png')">
				<img src="images/gallery_images/14.png" alt="Event 1">
			</div>
		</div>
	</div>

	<h3 style="color: black;">MU Fest 2025 | <span style="color: #09a3b9;">Independence Day</span></h3>
	<div class="gallery-container">
		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/15.png')">
				<img src="images/gallery_images/15.png" alt="Event 1">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/16.png')">
				<img src="images/gallery_images/16.png" alt="Event 2">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/17.png')">
				<img src="images/gallery_images/17.png" alt="Event 3">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/18.png')">
				<img src="images/gallery_images/18.png" alt="Event 3">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/19.png')">
				<img src="images/gallery_images/19.png" alt="Event 3">
			</div>
		</div>
	</div>

	<h3 style="color: black;">MU Fest 2025 | <span style="color: #09a3b9;">Convocation</span></h3>
	<div class="gallery-container">
		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/20.png')">
				<img src="images/gallery_images/20.png" alt="Event 1">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/21.png')">
				<img src="images/gallery_images/21.png" alt="Event 2">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/22.png')">
				<img src="images/gallery_images/22.png" alt="Event 3">
			</div>
		</div>

		<div>
			<div class="gallery" onclick="openLightbox('images/gallery_images/23.png')">
				<img src="images/gallery_images/23.png" alt="Event 3">
			</div>
		</div>
	</div>



	<div id="lightbox" class="lightbox">
		<span class="close-btn" onclick="closeLightbox()">&times;</span>
		<img id="lightbox-img" src="" alt="Expanded Image">
	</div>

	<script>
		function openLightbox(imageSrc) {
			document.getElementById("lightbox").style.display = "flex";
			document.getElementById("lightbox-img").src = imageSrc;
		}

		function closeLightbox() {
			document.getElementById("lightbox").style.display = "none";
		}

		document.getElementById("lightbox").addEventListener("click", function (event) {
			if (event.target === this) {
				closeLightbox();
			}
		});
	</script>
	<?php include 'footer.php' ?>

</body>
</html>