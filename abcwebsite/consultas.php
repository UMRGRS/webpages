<?php
include("connection.php");
GetRegisters();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consult</title>
</head>

<table border="solid 1px">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Comment</th>
        <th>Modify</th>
        <th>Delete</th>
    </thead>
    <?php for ($i = 0; $i < mysqli_num_rows($result); $i++) : ?>
        <?php
        $row = $result->fetch_assoc();
        echo "<tr><td> {$row["ID_user"]}</td> 
        <td> {$row["name"]} </td> 
        <td> {$row["email"]} </td> 
        <td> {$row["phone"]} </td> 
        <td> {$row["comment"]} </td>
        <td> <a href=modify.php?idToGet=$row[ID_user]>Modify</a> </td>
        <td> <a href=consultas.php?idToDelete=$row[ID_user]>Delete</a> </td>
        </tr>";
        ?>
        
    <?php endfor; ?>
</table>

<body>

</body>

</html>