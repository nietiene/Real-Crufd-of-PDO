<?php
include("conn.php");

$id = $_GET['id'];
$sql = "DELETE FROM holiday WHERE id = ?";
$stmt = $conn -> prepare($sql);
$stmt -> execute([$id]);
header("location:select.php");
?>