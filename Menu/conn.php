<?php
    $servername = "localhost";
    $username ="root";
    $password ="";
    $database = "restaurant";
    $conn = new mysqli($servername,$username,$password,$database);
    if($conn->connect_error){
        echo "Databse conection error";
    }

    function GetMenu(){
        global $conn;
        global $result;
        $sql = "SELECT * FROM platillos";
        $result = $conn -> query($sql);
        $conn -> close();
    }
?>