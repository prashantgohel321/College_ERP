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

        /* Removed fixed height to allow container to grow */
        div.container {
            width: 1000px !important;
            margin: 20px auto; /* Added auto margin for centering */
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
            text-align: justify; /* Changed to justify for a cleaner look */
            margin-top: 20px; /* Added more space between paragraphs */
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
        <h1>About Marwadi University</h1>
        <p>
            Marwadi University (MU), located in Rajkot, Gujarat, is a premier private institution established in 2016 under the Gujarat Private Universities Act. It is a key part of the Marwadi Education Foundation's Group of Institutions (MEFGI). The university is recognized by the UGC, approved by AICTE, and has set a high standard for academic excellence in the region.
        </p>

        <p>
            Notably, Marwadi University is the first private university in Gujarat to be accredited with a prestigious NAAC A+ Grade. This distinction highlights its commitment to providing high-quality education, innovative teaching methodologies, and robust research infrastructure. The university's mission is to foster social transformation and create future leaders through innovation, entrepreneurship, and strategic industrial partnerships.
        </p>
         <p>
            The sprawling campus features state-of-the-art facilities, including modern laboratories, advanced research centers, a comprehensive digital library, and extensive sports complexes. Marwadi University offers a diverse array of undergraduate, postgraduate, and doctoral programs across various disciplines such as Engineering, Management, Law, Science, and Computer Applications, preparing students to meet global standards.
        </p>

        <!-- Removed the team section as requested -->
    </div>
    <?php include 'footer.php' ?>

</body>

</html>