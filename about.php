<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <title>Techify | About</title>
</head>

<body style="background: rgb(242,241,237);">
    <div class="row header-top container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="images/pepperest-logo-white.png"></a>
    </div>
    
    <?php include('navigation.php') ?>


    <main class="container mt-2">
        <div class="row">
            <section class="slider col-md-6 mt-5">
                <h4 class="course-title">About us</h4>
                <p class="text-justify"> Techify is Nigeria’s best Indigenous IT Training Establishment. We have
                    excelled in IT
                    Training/Education, Publishing, IT Consultancy and IT Solutions Development & Services. In our 20
                    years of successful existence, we have graduated over 50,000 students at our CPN-accredited IT
                    Training Centres located in Lagos, Abuja, Ibadan, Kano and other cities nationwide. </p>
            </section>

            <section class="courses col-md-6">
                <div class="accordion accordion-flush" id="about">
                    <div class="accordion-item">
                        <h2 class="accordion-header bg-primary " id="headingOne">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseMission" aria-expanded="true" aria-controls="collapseMission">
                                Mission
                            </button>
                        </h2>
                        <div id="collapseMission" class="accordion-collapse collapse" aria-labelledby="collapseMission" data-bs-parent="#about">
                            <div class="accordion-body">
                                To encourage the effective application of higher education to the needs of the State
                                through research and extension and consultancy
                                3. To provide ready access for Benue State Citizens to higher education for self
                                reliance
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header bg-primary " id="headingTwo">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseVision" aria-expanded="true" aria-controls="collapseVision">
                                Vision
                            </button>
                        </h2>
                        <div id="collapseVision" class="accordion-collapse collapse" aria-labelledby="collapseVision" data-bs-parent="#about">
                            <div class="accordion-body">
                                To encourage and promote advancement of knowledge and to hold out to all persons
                                without discrimination of race, creed or political conviction, the opportunity of
                                acquiring University education;


                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header bg-primary " id="headingThree">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseValue" aria-expanded="true" aria-controls="collapseValue">
                                Core Value
                            </button>
                        </h2>
                        <div id="collapseValue" class="accordion-collapse collapse" aria-labelledby="collapseValue" data-bs-parent="#about">
                            <div class="accordion-body">
                                To promote, preserve and propagate the social and cultural heritage of the diverse
                                people of the state and
                                To engage in any other activities of a developmental University of the highest
                                standard.
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>

    </main>


    <script src="js/bootstrap.js"></script>
</body>

</html>