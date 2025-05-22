<?php
session_start();
include("connection.php");

$msg = '';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select1 = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $select_user = mysqli_query($conn, $select1);

    if (mysqli_num_rows($select_user) > 0) {
        $row1 = mysqli_fetch_assoc($select_user);

        if ($row1['user_type'] == 'user') {
            $_SESSION['user'] = $row1['email'];
            $_SESSION['id'] = $row1['id'];
            header('Location: user.php');
            exit();
        } elseif ($row1['user_type'] == 'admin') {
            $_SESSION['admin'] = $row1['email'];
            $_SESSION['id'] = $row1['id'];
            header('Location: admin.php');
            exit();
        } else {
            $msg = "Invalid user type!";
        }
    } else {
        $msg = "Invalid Email or Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Dynamic Navbar -->
    <div class="ds-nav-container">
        <div class="ds-nav-trigger" id="dsNavTrigger">☰</div>
        <nav class="ds-nav-vertical" id="dsNavbar">
            <ul class="ds-nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="crew.php">Crew</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="donate.php">Donate</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </div>

    <div class="form ds-nav-content" id="mainContent">
        <form action="" method="post">
            <h2>Login</h2>
            <p class="msg"><?= $msg ?></p>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your Email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter your Password" class="form-control" required>
            </div>
            <button class="btn font-weight-bold" name="submit">Login Now</button>
            <p>Don't have an Account? <a href="register.php">Register Now</a></p>
        </form>
    </div>

    <script>
        document.getElementById('dsNavTrigger').addEventListener('click', function() {
            document.getElementById('dsNavbar').classList.toggle('ds-nav-open');
            document.getElementById('mainContent').classList.toggle('ds-content-shifted');
        });
    </script>
</body>
</html>