<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <title>Techify | Home</title>
</head>

<body style="background: rgb(242,241,237);">
    <div class="row header-top container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="images/pepperest-logo-white.png"></a>
    </div>

    <?php include('navigation.php') ?>

    <main class="container mt-2">
        <div class="row">
            <section class="slider col-md-8">
                <div class="carousel slide" id="imgslider" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#imgslider" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#imgslider" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#imgslider" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/student1.jpg" class="d-block w-100 img-thumbnail">
                        </div>
                        <div class="carousel-item">
                            <img src="images/student2.jpg" class="d-block w-100 img-thumbnail">
                        </div>
                        <div class="carousel-item">
                            <img src="images/student8.jpg" class="d-block w-100 img-thumbnail">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#imgslider"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#imgslider"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <section class="col-md-12 mt-5 mb-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                About Techify Online Training
                            </div>
                        </div>
                        <div class="card-body">
                            Our commitment is to deliver Best Value for your Money & Time in Learning outcomes, anywhere
                            you are comfortable via the internet real-time.
                            A trial will convince you!
                        </div>
                        <div class="card-footer">
                            <a class="card-link btn btn-dark" href="#">Get started Today</a>
                        </div>
                    </div>
                </section>
            </section>

            <section class="courses col-md-4">
                <ul class="list-group list-group-flush">
                    <h4 class="course-title">Trending Courses</h4>
                    <li class="list-group-item">
                        HTML5 Master class
                    </li>
                    <li class="list-group-item">
                        CSS3 Pro
                    </li>
                    <li class="list-group-item">
                        JavaScript Front to Back
                    </li>
                    <li class="list-group-item">
                        Java Master Guide
                    </li>
                    <li class="list-group-item">
                        React step by step
                    </li>
                    <li class="list-group-item">
                        Graphics Design Intern
                    </li>
                    <li class="list-group-item">
                        Data Science
                    </li>
                    <li class="list-group-item">
                        Database Management
                    </li>
                    <li class="list-group-item">
                        Mobile App Development
                    </li>

                </ul>
            </section>

        </div>

        <div class="row">
            <p class="lead text-center menu-header">WHAT OUR CLIENT SAYS</p>
            <section class="card col-md-4 mb-3">
                <div class="">
                    <img src="images/helen.jpg" class="rounded-circle mt-2" height="90px" width="90px">
                    <p class="mt-1"><b>Ola Helen</b></p>
                    <p class="text-justify"><i>"Am highly overwelmed by the quality of service i received,
                            during my stay at Techify. keep it up"</i>
                    </p>
                </div>
            </section>
            <section class="card col-md-4 mb-3">
                <div class="">
                    <img src="images/parkcodedr.jpg" class="rounded-circle mt-1" height="90px" width="90px">
                    <p class="mt-2"><b>Ola Helen</b></p>
                    <p class="text-justify"><i>"Am highly overwelmed by the quality of service i received,
                            during my stay at Techify. keep it up"</i>
                    </p>
                </div>
            </section>
            <section class="card col-md-4 mb-3">
                <div class="">
                    <img src="images/corper.jpg" class="rounded-circle mt-2" height="90px" width="90px">
                    <p class="mt-1"><b>Ola Helen</b></p>
                    <p class="text-justify"><i>"Am highly overwelmed by the quality of service i received,
                            during my stay at Techify. keep it up"</i>
                    </p>
                </div>
            </section>
        </div>

    </main>
    <section class="container-fluid">
        <section class="footer menu-header">
            <div class="col-md-4 d-flex flex-column">
                <li><a href="about.php" class="text-white">About us</a></li>
                <li><a href="contact.php" class="text-white">Contact</a></li>
                <li><a href="subscribe.php" class="text-white">Subscribe</a></li>
            </div>
            <div class="text-center">Copyright &copy2021</div>
        </section>

    </section>


    <script src="js/bootstrap.js"></script>
</body>

</html>