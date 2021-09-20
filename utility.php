<?php

function connect(){
    $servername = "localhost";
    $username = "id16757278_hitt_root_user";
    $password = "LzYx8lpi5opA1zA[";
    $db_name = "id16757278_hiit_db";

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
