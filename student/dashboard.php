<?php
session_start();
include('../utility.php');
$db = connect();
$user_email = $_SESSION["user"];
$sql = "SELECT * FROM users WHERE email = '$user_email'";
$result = $db->query($sql);
$user = $result->fetch_assoc();

if ($user["user_role"] == "admin") {
    header("location:/techify/student/");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Techify | Dashboard</title>
</head>

<body>
    <h1>Welcome <?php echo $user_email ?></h1>
    <a href="/techify/student/logout.php">
        <button class="btn btn-primary">Logout</button>
    </a>
</body>

</html>