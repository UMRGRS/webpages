<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "integradora";

$con = new mysqli($servername, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$result = mysqli_query($con, "CALL GetUser(11)");

while ($row = mysqli_fetch_array($result)) {
    echo $row["idUsuarios"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>