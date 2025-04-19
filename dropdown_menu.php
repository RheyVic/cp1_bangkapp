<?php
$user_id = $_SESSION['user_id'];
?>

<div class="dropdown">
    <button class="dropbtn">Menu</button>
    <div class="dropdown-content">
        <a href="update_profile.php">Update Profile</a>
        <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">Logout</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>
</div>
