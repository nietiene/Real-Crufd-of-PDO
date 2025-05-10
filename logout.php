<?php
session_start();
session_destroy(); // clearly session data
header("Location: login.php");
exit();



?>