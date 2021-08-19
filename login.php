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
                <h4 class="course-title">Login</h4>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="input-group mb-3">
                    <input class="form-control" type="password" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-dark" name="submit">Login</button>
            </section>
        </div>

    </main>


    <script src="js/bootstrap.js"></script>
</body>

</html>