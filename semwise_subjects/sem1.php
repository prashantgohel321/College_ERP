<?php include 'session_chk.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Semester 1 Subjects</title>
</head>
<body>
    <?php include 'tt_header.php'; ?>

    <h3 style="color: #09a3b9; ">
        <center>Sem 1</center>
    </h3>
    <hr>
    <table id="table">
        <tr class="rows" style="color: white; background-color: #09a3b9">
            <th>Subject Code</th>
            <th>Subject Name</th>
        </tr>

        <tr class="rows">
            <td>01BH0101</td>
            <td>Computer Architecture and Organization</td>
        </tr>

        <tr class="rows">
            <td>01BH0102</td>
            <td>Basic Mathematics</td>
        </tr>

        <tr class="rows">
            <td>01BH0103</td>
            <td>Basic Web Development</td>
        </tr>

        <tr class="rows">
            <td>01BH0104</td>
            <td>Environmental Studies</td>
        </tr>

        <tr class="rows">
            <td>01BH0105</td>
            <td>Programming in C</td>
        </tr>
    </table>

    <?php include 'tt_footer.php' ?>
</body>
</html>
