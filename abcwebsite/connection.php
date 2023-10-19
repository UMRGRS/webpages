<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "abcdatabase";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_POST) {
  if (isset($_POST["register"])) {
    register();
  }
}

function register()
{
  global $conn;
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $comment = $_POST["comment"];
  $sql = "INSERT INTO users (name,email,phone,comment) values('$name','$email','$phone','$comment')";
  $conn->query($sql);
}

function getRegisters()
{
  global $conn;
  $sql = "SELECT * FROM users";
  global $result;
  $result = $conn->query($sql);
}
