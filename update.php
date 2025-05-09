<?php
include ("conn.php");

$id = $_GET['id'];
$stmt = $conn -> prepare("SELECT * FROM holiday WHERE id = ?");
$stmt -> execute([$id]);
$user = $stmt -> fetch();

?>

<form  method="post">
    <h2>Update <?php echo $user['name'];?></h2>
    <label for="">Id</label>
    <input type="text" name="id" value="<?php echo $user['id']?>" readonly><br>
    <label for="">Name</label>
    <input type="text" name="name"  value="<?php echo $user['name']?>"> <br>
    <label for="">Place</label>
    <input type="text" name="place"  value="<?php echo $user['place']?>"> <br>
    <label for="">Password</label>
    <input type="text" name="password"  value="<?php echo $user['password']?>"> <br>

    <button type="submit" name="update">Update User</button>
</form>

<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $place = $_POST['place'];
    $password = $_POST['password'];
    $sql = "UPDATE holiday SET name = ?, place = ?, password = ? WHERE id = ?";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute([$name, $place, $password, $id]);
    header("location:select.php");
}

?>