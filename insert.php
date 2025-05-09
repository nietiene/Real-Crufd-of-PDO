<?php include('conn.php');?>

<form method="post">
  <h1>Add user</h1>
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Enter name"> <br>
    <label for="">Place</label>
    <input type="text" name="place"placeholder="Enter your place"> <br>
    <label for="">Password</label>
    <input type="text" name="password" placeholder="Enter password"> <br>
    <button type="submit" name="add">Add User</button>
</form>

<?php
  if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $place = $_POST['place'];
    $password = $_POST['password'];

    $sql = "INSERT INTO holiday(name, place, password) VALUES(?,?,?)";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute([$name, $place, $password]);
    header("location:select.php");
}


?>