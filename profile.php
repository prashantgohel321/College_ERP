<?php include 'session_chk.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Marwadi College | Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <link rel="stylesheet" href="css/profile.css">
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
                <!-- alert -->
                <?php if (isset($_SESSION['success_msg'])): ?>
                    <div class="alert success"><?php echo $_SESSION['success_msg'];
                    unset($_SESSION['success_msg']); ?>
                    </div>
                <?php endif; ?>


                <div class="form-box login">
                    <div class="logreg-title">
                        <h2>Profile</h2>
                        <p>Hello, <?php echo htmlspecialchars($_SESSION['user_name']); ?></p>
                    </div>
                    <button onclick="window.location.href='logout.php'" class="btn">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
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