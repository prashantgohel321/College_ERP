<?php
session_start();
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT id, full_name, password FROM user WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($password === $user['password']) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['full_name'];
            $_SESSION['success_msg'] = "Login successful! Welcome, " . $_SESSION['user_name'] . "!";
            $_SESSION['logged_in'] = true;

            header("Location: profile.php"); 
            exit();
        } else {
            $_SESSION['error_msg'] = "Incorrect password. Please try again!";
            header("Location: login_section2.php");
        }
    } else {
        $_SESSION['error_msg'] = "User not found! Please check your email.";
        header("Location: login_section2.php");
    }

    exit();
}
?>