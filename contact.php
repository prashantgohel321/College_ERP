<?php include 'session_chk.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact Us | Marwadi College</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <style>
    body {
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif !important;
    }

    .fas,
    .fab {
      font-family: "Font Awesome 6 Free" !important;
      font-weight: 900;
    }

    .fab {
      font-family: "Font Awesome 6 Brands" !important;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 20px;
    }

    .contact-header {
      text-align: center;
      font-size: 32px;
      color: #09a3b9;
      margin-top: 20px;
      text-transform: uppercase;
      font-weight: bold;
    }

    .contact-info {
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    .contact-info h2 {
      color: black;
      text-decoration: underline;
    }

    .contact-info h3 {
      color: #333;
      margin: 10px 0;
    }

    .contact-info a {
      color: #09a3b9;
      text-decoration: none;
      font-weight: bold;
    }

    .contact-info a:hover {
      text-decoration: underline;
    }

    .team {
      text-align: center;
      margin-top: 40px;
    }

    .team h2 {
      color: #09a3b9;
      font-size: 28px;
      text-transform: uppercase;
      margin-bottom: 20px;
    }

    .team-members {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .member {
      background: white;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 350px;
      text-align: center;
      transition: transform 0.3s ease-in-out;
    }

    .member:hover {
      transform: scale(1.05);
    }

    .member img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .member h3 {
      color: #333;
      margin: 5px 0;
    }

    .member p {
      color: #777;
      font-size: 14px;
      margin: 5px 0;
    }

    .member a {
      display: block;
      color: #09a3b9;
      text-decoration: none;
      font-weight: bold;
      margin-top: 5px;
    }

    .member a:hover {
      text-decoration: underline;
    }

    /* Map */
    .map-container {
      text-align: center;
      margin-top: 30px;
    }

    .map-container iframe{
      width: 100%;
      max-width: 800px;
      height: 350px;
      border-radius: 8px;
      border: none;
      display: block;
      margin: auto;
    }

    /* iframe {
      width: 100%;
      height: 350px;
      border-radius: 8px;
    } */
  </style>
</head>

<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <!-- College Contact Details -->
    <h1 class="contact-header">Contact Us</h1>
    <div class="contact-info">
      <h2>College Information</h2>
      <h3><i class="fas fa-map-marker-alt"></i> Rajkot-Morbi Road, Rajkot 36003, Gujarat, India</h3>
      <h3><i class="fas fa-phone"></i> Phone: +91 8900090</h3>
      <h3><i class="fas fa-envelope"></i> Email: <a
          href="mailto:info@marwadiuniversity.ac.in">info@marwadiuniversity.ac.in</a></h3>
      <h3><i class="fab fa-facebook"></i> Facebook: <a href="https://www.facebook.com/Marwadiuniversity/"
          target="_blank">Marwadi University</a></h3>
      <h3><i class="fab fa-twitter"></i> Twitter: <a href="https://twitter.com/MU_Rajkot" target="_blank">@MU_Rajkot</a>
      </h3>
    </div>

    <!-- Team Members -->
    <div class="team">
      <h2>Meet Our Team</h2>
      <div class="team-members">
        <div class="member">
          <img src="images/TM_01.jpg" alt="Prashant Gohel">
          <h3>Prashant Gohel</h3>
          <p><i class="fas fa-envelope"></i> <a href="mailto:prashant.gohil117355@marwadiuniversity.ac.in">prashant.gohil117355@marwadiuniversity.ac.in</a></p>
          <p><i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/prashant-gohel-7108b6251" target="_blank">Prashant Gohel</a></p>
          <p><i class="fas fa-phone"></i> +91 8160447162</p>
        </div>

        <div class="member">
          <img src="images/TM_02.jpg" alt="Tanvir Mulla">
          <h3>Tanvir Mulla</h3>
          <p><i class="fas fa-envelope"></i> <a href="mailto:tanvir.mulla116660@marwadiuniversity.ac.in">tanvir.mulla116660@marwadiuniversity.ac.in</a></p>
          <p><i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/tanvir-mulla-198309251" target="_blank">Tanvir Mulla</a></p>
          <p><i class="fas fa-phone"></i> +91 8765432109</p>
        </div>

        <div class="member">
          <img src="images/TM_03.jpg" alt="Aryan Sarvaiya">
          <h3>Aryan Sarvaiya</h3>
          <p><i class="fas fa-envelope"></i> <a href="mailto:aryan.sarvaiya118844@marwadiuniversity.ac.in">aryan.sarvaiya118844@marwadiuniversity.ac.in</a></p>
          <p><i class="fab fa-linkedin"></i> <a href="https://www.linkedin.com/in/aryan-sarvaiya-a4a5b4335" target="_blank">Aryan Sarvaiya</a></p>
          <p><i class="fas fa-phone"></i> +91 7654321098</p>
        </div>
      </div>
    </div>
    <div class="map-container">
        <h2 style="color:#09a3b9;">Find Us On Map</h2>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.6372737915535!2d70.7922352107711!3d22.36732097955359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c972761ce515%3A0x3651e3fe1e9df4f8!2sMarwadi%20University!5e0!3m2!1sen!2sin!4v1687759285628!5m2!1sen!2sin"
          width="600"
          height="450"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </div>

  <?php include 'footer.php'; ?>
</body>

</html>