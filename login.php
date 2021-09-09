<?php
session_start();
include('utility.php');
$db = connect();
$message = "";

if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
    if ($user) {
        header("location:/techify/student/dashboard.php");
    }
}

if (isset($_POST['submit'])) {
    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);

    if (empty($email) || empty($password)) {
        $message .= "Email and Password is Required";
    } else {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user["password"])) {
                $_SESSION['user'] = $user["email"];

                if ($user["user_role"] != "admin") {
                    header("location:/techify/student/dashboard.php");
                } else {
                    header("location:/techify/student/");
                }
                
            } else {
                $message .= "Invalid Email or Password";
            }
        } else {
            $message .= "Invalid Email or Password";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <title>Techify | Login</title>
</head>

<body style="background: rgb(242,241,237);">
    <div class="row header-top container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="images/pepperest-logo-white.png"></a>
    </div>
    <?php include('navigation.php') ?>


    <main class="container mt-2">
        <div class="row justify-content-center">
            <section class="slider col-md-4 mt-5 ">
                <h4 class="course-title fw-bold">Login</h4>
                <form method="POST" autocomplete="off">
                    <?php if ($message) {
                        echo '<div class="alert alert-danger" role="alert">' . $message . '</div>';
                    } ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" type="password" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-dark" name="submit">Login</button>
                </form>
            </section>
        </div>

    </main>


    <script src="js/bootstrap.js"></script>
</body>

</html>