
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
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
        <img src="../images/new/logo_white.jpg">
        <nav class="navbar">
            <ul>
                <li class="item"><a href="../index.php"><b>Home</b></a></li>
                <li class="item"><a href="../course.php"><b>Course</b></a></li>
                <li class="item"><a href="../timetable.php"><b>Timetable</b></a></li>
                <li class="item"><a href="../gallery.php"><b>Gallery</b></a></li>
                <li class="item"><a href="../quiz2.php"><b>Quiz</b></a></li>
                <li class="item"><a href="../about_us.php"><b>About Us</b></a></li>
                <li class="item"><a href="../contact.php"><b>Contact us</b></a></li>
                <li class="item"><a href="../login_section2.php"><b>Login</b></a></li>
                <li class="item"><a href="../profile.php"><b>Profile</b></a></li>
            </ul>
        </nav>
    </header>
    <header class="mainheader2">
        <nav class="navbar">
            <ul>
                <li class="item"><a href="sem1.php"><b>Sem 1</b></a></li>
                <li class="item"><a href="sem2.php"><b>Sem 2</b></a></li>
                <li class="item"><a href="sem3.php"><b>Sem 3</b></a></li>
                <li class="item"><a href="sem4.php"><b>Sem 4</b></a></li>
                <li class="item"><a href="sem5.php"><b>Sem 5</b></a></li>
                <li class="item"><a href="sem6.php"><b>Sem 6</b></a></li>
                <li class="item"><a href="sem7.php"><b>Sem 7</b></a></li>
                <li class="item"><a href="sem8.php"><b>Sem 8</b></a></li>
            </ul>
        </nav>
    </header>
</body>

</html>