<?php  
include("connection.php");
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];
$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="u&u&a.css">
</head>
<body>
    <div class="sidebar-toggle" onclick="toggleSidebar()">☰ Menu</div>
    
    <div class="sidebar" id="sidebar">
        <a href="home.php">Home</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>

    <div class="user-page" id="main-content">
        <h2>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h2>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>

        <a href="update_user.php"><button class="btn">Update Profile</button></a>
        <a href="logout.php"><button class="btn">Logout</button></a>
        <a href="delete_user.php" onclick="return confirm('Are you sure?');"><button class="btn">Delete Account</button></a>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const mainContent = document.getElementById("main-content");
            sidebar.classList.toggle("active");
            mainContent.classList.toggle("shrink");
        }
    </script>
</body>
</html>
