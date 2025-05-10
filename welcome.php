<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<h2>Welcome <?php echo $_SESSION['user']['name'];?></h2>
<a href="select.php">Get list of Users </a> 
<a href="logout.php">Logout</a>
