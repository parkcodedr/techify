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
            <section class="slider col-md-6 mt-5 ">
                <h4 class="course-title">Register</h4>
                <form method="POST">
                    <div class="mb-3">
                        <label for="fname" class="form-label">Firstname</label>
                        <input type="text" class="form-control" name="fname">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Lastname</label>
                        <input type="text" class="form-control" name="lname">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="dob">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" name="address" rows="5">
    </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Course</label>
                        <select class="form-select" name="course">
                            <option value="web design">Web Design</option>
                            <option value="python">Python</option>
                            <option value="graphics">Graphics Design</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-dark" name="submit">Register</button>
                </form>

            </section>
        </div>

    </main>


    <script src="js/bootstrap.js"></script>
</body>

</html>