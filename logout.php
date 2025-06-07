<?php
session_start();
session_destroy();
header("Location: login_section2.php");
exit();
?>