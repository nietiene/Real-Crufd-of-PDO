<?php include('conn.php');?>

<h2>All users</h2>
<table border="1" cellpadding="5" cellspacing="5">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Place</th>
        <th>Password</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    $stmt = $conn -> query("SELECT * FROM holiday");
    while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
        echo "
             <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['place']}</td>
                <td>{$row['password']}</td>
                
                <td><a href='update.php?id={$row['id']}'>Update</a></td>
                <td><a href='delete.php?id={$row['id']}'>Delete</a></td>
            </tr>
            ";
    }
   ?>
</table>