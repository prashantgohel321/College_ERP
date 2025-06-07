<?php include 'session_chk.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>About Us</title>
    <style>
        * {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        div.container {
            width: 1000px !important;
            height: 800px !important;
        }

        .container {
            width: 100%;
            padding: 30px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        h1 {
            color: #09a3b9;
            font-size: 2.5rem;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
            text-align: justify;
            margin-top: 10px;
        }

        .team-section {
            margin-top: 30px;
        }

        .team-title {
            font-size: 2rem;
            color: #09a3b9;
            margin-bottom: 15px;
        }

        .team-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .team-member {
            background: rgba(9, 163, 185, 0.8);
            color: white;
            padding: 15px;
            border-radius: 10px;
            width: 280px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .team-member:hover {
            transform: scale(1.05);
        }

        .team-member h3 {
            margin: 10px 0;
            font-size: 1.5rem;
        }

        .team-member p {
            font-size: 1rem;
            color: #f0f0f0;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="container">
        <h1>About Us</h1>
        <p>
            Welcome to our project! We are a team of passionate developers committed to building innovative
            solutions that make an impact. Our current project focuses on enhancing digital learning experiences
            and providing users with a seamless, interactive platform. With expertise in web development,
            cloud computing, and UI/UX design, we aim to create a product that is both user-friendly and highly
            functional.
        </p>

        <p>
            Our mission is to bridge the gap between technology and education, ensuring that students and professionals
            alike have access to high-quality resources. We are continuously working on improvements, integrating the
            latest technologies to enhance the platform's performance and usability.
        </p>

        <div class="team-section">
            <h2 class="team-title">Meet Our Team</h2>
            <div class="team-container">
                <div class="team-member">
                    <h3>Prashant Gohil</h3>
                </div>
                <div class="team-member">
                    <h3>Tanvir Mulla</h3>
                </div>
                <div class="team-member">
                    <h3>Aryan Sarvaiya</h3>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>

</body>

</html>