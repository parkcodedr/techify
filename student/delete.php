<?php

include('../utility.php');
$error = "";
$message = "";
$db = connect();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("location:/techify/student/");
}
$sql = "DELETE FROM users WHERE id='$id'";
$result = $db->query($sql);

header("location:/techify/student/");
