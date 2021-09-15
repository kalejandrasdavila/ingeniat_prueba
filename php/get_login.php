<?php
include("db/conexion.php");

    $email = $_GET['email'];
    $pass  = $_GET['password'];

    echo $email + " ----- " + $pass;

   /* $result = $mysqli->query("SELECT * FROM login WHERE login.email = $email and login.password=$pass");
    if(mysqli_num_rows($result)> 0){
            while($row = mysqli_fetch_assoc($result)){
                $data = array("user" => $row["email"], "pass" => $row["password"]);
            }
            echo json_encode($data, JSON_PRETTY_PRINT);
    }*/






















?>