<?php 
include("connection.php");
session_start();

$id = $_SESSION['id'];
$msg = '';

$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $old_pass = $_POST['old_password'];
    $new_pass = $_POST['new_password'];
    $cnew_pass = $_POST['confirm_password'];

    if ($old_pass !== $user['password']) {
        $msg = "Old password is incorrect!";
    } elseif ($new_pass !== $cnew_pass) {
        $msg = "New passwords do not match!";
    } else {
        $update = "UPDATE users SET name='$name', password='$new_pass' WHERE id='$id'";
        mysqli_query($conn, $update);
        $msg = "Profile updated successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Profile</title>
    <link rel="stylesheet" href="u&u&a.css">
</head>
<body>
<div class="form">
    <form method="post">
        <h2>Update Profile</h2>
        <p class="msg"><?= $msg ?></p>

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
        </div>
        <div class="form-group">
            <label>Old Password</label>
            <input type="password" name="old_password" required>
        </div>
        <div class="form-group">
            <label>New Password</label>
            <input type="password" name="new_password" required>
        </div>
        <div class="form-group">
            <label>Confirm New Password</label>
            <input type="password" name="confirm_password" required>
        </div>
        <button type="submit" name="update">Update</button>
        <p><a href="user.php">Go Back</a></p>
    </form>
</div>
</body>
</html>
