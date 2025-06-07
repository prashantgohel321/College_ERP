<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title></title>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let currentLocation = window.location.href;
            let navLinks = document.querySelectorAll(".navbar ul li a");

            navLinks.forEach(link => {
                if (link.href === currentLocation) {
                    link.classList.add("active");
                }

                link.addEventListener("click", function () {
                    navLinks.forEach(nav => nav.classList.remove("active"));
                    this.classList.add("active");
                });
            });
        });
    </script>

</head>

<body>
    <header class="mainheader">
        <img src="images/new/logo_white.jpg">
        <nav class="navbar">
            <?php 
                if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
            ?>
            <ul>
                <li class="item"><a href="index.php"><b>Home</b></a></li>
                <li class="item"><a href="course.php"><b>Course</b></a></li>
                <li class="item"><a href="semwise_subjects/sem1.php"><b>Timetable</b></a></li>
                <li class="item"><a href="gallery.php"><b>Gallery</b></a></li>
                <li class="item"><a href="quiz2.php"><b>Quiz</b></a></li>
                <li class="item"><a href="about_us.php"><b>About Us</b></a></li>
                <li class="item"><a href="contact.php"><b>Contact us</b></a></li>
                <li class="item"><a href="login_section2.php"><b>Login</b></a></li>
                <li class="item"><a href="profile.php"><b>Profile</b></a></li>
            </ul>
            <?php } else { ?>
            <ul>
                <li class="item"><a href="index.php"><b>Home</b></a></li>
                <li class="item"><a href="course.php"><b>Course</b></a></li>
                <li class="item"><a href="semwise_subjects/sem1.php"><b>Timetable</b></a></li>
                <li class="item"><a href="gallery.php"><b>Gallery</b></a></li>
                <li class="item"><a href="quiz2.php"><b>Quiz</b></a></li>
                <li class="item"><a href="about_us.php"><b>About Us</b></a></li>
                <li class="item"><a href="contact.php"><b>Contact us</b></a></li>
                <li class="item"><a href="profile.php"><b>Profile</b></a></li>
            </ul>
            <?php } ?>
        </nav>
    </header>
</body>

</html>