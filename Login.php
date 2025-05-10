<?php
session_start();
include("conn.php");

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
   
    $sql = "SELECT * FROM holiday WHERE name = ?";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute([$name]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'];
        header("Location: Welcome.php");
        exit();
    } else {
        $error = " Invalid name or password";
    }
}
?>

<form method="post">
    <h1>Login</h1>
    <?php if(isset($error)) echo "<p style='color:red'>$error</p>";?>
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Enter name" required> <br>
    <label for="">Password</label>
    <input type="text" name="password" placeholder="Enter Password" required> <br>
    <button type="submit" name="login">Login</button>
</form>