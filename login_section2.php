<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Marwadi College</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/login2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="javascript/login.js"></script>

    <style>
        .alert {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }

        .alert.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>



</head>

<body>
    <?php include 'header.php' ?>
    <section class="section">
        <div class="wrapper">
            <div class="logreg-box">
                <?php if (isset($_SESSION['error_msg'])): ?>
                    <div class="alert error"><?php echo $_SESSION['error_msg'];
                    unset($_SESSION['error_msg']); ?></div>
                <?php endif; ?>

                <!-- login -->
                <div class="form-box login">
                    <div class="logreg-title">
                        <h2>Login</h2>
                        <p>Please login to use this platform</p>
                    </div>

                    <form action="login.php" method="post">
                        <div class="input-box">
                            <span class="icon">
                                <i class='fa fa-envelope'></i></span>
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>

                        <div class="input-box">
                            <span class="icon">
                                <i class='fa fa-lock'></i>
                            </span>
                            <input type="Password" name="password" required>
                            <label>Password</label>
                        </div>

                        <div class="remember-forgot">
                            <label>
                                <input type="checkbox" required>Remember me
                            </label>
                        </div>

                        <button type="submit" class="btn">Login</button>

                        <div class="logreg-link">
                            <p>Don't have an account?
                                <a href="#" class="register-link">Register</a>
                            </p>
                        </div>

                    </form>
                </div>

                <!-- register -->
                <div class="form-box register" style="display: none;">
                    <div class="logreg-title">
                        <h2>Registration</h2>
                        <p>Please provide following to verify your identity</p>
                    </div>

                    <form action="register.php" method="post">
                        <div class="input-box">
                            <span class="icon">
                                <i class='bx bxs-envelope'></i></span>
                            <input type="text" name="full_name" required>
                            <label>Full Name</label>
                        </div>

                        <div class="input-box">
                            <span class="icon">
                                <i class='bx bxs-envelope'></i></span>
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>

                        <div class="input-box">
                            <span class="icon">
                                <i class='bx bxs-lock'></i>
                            </span>
                            <input type="Password" name="password" required>
                            <label>Password</label>
                        </div>

                        <div class="remember-forgot">
                            <label>
                                <input type="checkbox" required>I agree to the terms and condition
                            </label>
                        </div>

                        <button type="submit" class="btn">Register</button>

                        <div class="logreg-link">
                            <p>Already have an account?
                                <a href="#" class="login-link">Login</a>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // alert
        setTimeout(() => {
            let alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.style.opacity = '0';
                setTimeout(() => alert.style.display = 'none', 500);
            });
        }, 3000);
    </script>
    <?php include 'footer.php' ?>
</body>

</html>