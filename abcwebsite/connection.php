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
    Register();
  }
  else if(isset($_POST["update"])){
    ModifyUser();
  }
}
if($_GET){
  if(isset($_GET["idToDelete"])){
    DeleteUser();
  }
}

function Register()
{
  global $conn;
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $comment = $_POST["comment"];
  $sql = "INSERT INTO users (name,email,phone,comment) values('$name','$email','$phone','$comment')";
  $conn->query($sql);
}

function GetRegisters()
{
  global $conn;
  $sql = "SELECT * FROM users";
  global $result;
  $result = $conn->query($sql);
}

function DeleteUser(){
  global $conn;
  $id = $_GET["idToDelete"];
  $sql = "DELETE FROM users WHERE `users`.`ID_user` = $id";
  $conn ->query($sql);
}
function ModifyUser(){
  global $conn;
  $nameToModify = $_POST["nameToModify"];
  $emailToModify = $_POST["emailToModify"];
  $phoneToModify = $_POST["phoneToModify"];
  $commentToModify = $_POST["commentToModify"];
  $id = $_POST["IdToModify"];
  $sql = "UPDATE users SET name = '$nameToModify', email = '$emailToModify', 
  phone = '$phoneToModify', comment = '$commentToModify' WHERE ID_user = '$id'";
  $conn -> query($sql);
  header("Location: consultas.php");
}
function GetUser(){
  global $conn;
  $id=$_GET["idToGet"];
  $sql = "SELECT * FROM users where ID_user = $id";
  global $result;
  $result = $conn->query($sql);
}

