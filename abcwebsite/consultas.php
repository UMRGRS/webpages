<?php
include("connection.php");
include("header.html");
GetRegisters();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Consult</title>
</head>

<div class="container-fluid">
<table class="table table-bordered">
    <thead class="text-center">
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
        <td class=text-center> <a class='btn btn-primary' href=modify.php?idToGet=$row[ID_user]>Modify</a> </td>
        <td class=text-center> <a class='btn btn-danger' href=consultas.php?idToDelete=$row[ID_user]>Delete</a> </td>
        </tr>";
        ?>
    <?php endfor; ?>
</table>
</div>


<body>

</body>

</html>