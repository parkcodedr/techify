<?php

function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "hiit_db";

    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn){
        return $conn;
    } else{
        return null;
    }
}

function clean_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



?>