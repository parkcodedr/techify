<?php
include('utility.php');
$error = "";
$message = "";
$db = connect();

if (isset($_POST['submit'])) {
    $fname = clean_input($_POST['fname']);
    $lname = clean_input($_POST['lname']);
    $gender = clean_input($_POST['gender']);
    $email = clean_input($_POST['email']);
    $it_center = clean_input($_POST['it_center']);
    $address = clean_input($_POST['address']);
    $course = clean_input($_POST['course']);

    if (
        empty($fname) || empty($lname) || empty($gender)
        || empty($email) || empty($it_center) || empty($address)
        || empty($course)
    ) {
        $error .= "All fields are required";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error .= "Invalid Email address";
    } else {

        $sql = "INSERT INTO users(fname,lname,email,gender,course,it_center,`address`) VALUES('$fname','$lname','$email','$gender','$course','$it_center','$address')";
        $result = $db->query($sql);
        if ($result) {
            $message .= "Registered Successfully";
            $fname = "";
            $lname = "";
            $email = "";
            $gender = "";
            $course = "";
            $it_center = "";
            $address = "";
        } else {
            $error .= "Oops! Somethinge went wrong! try again" . $db->error;
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

    <title>Techify | Register</title>
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
                <?php
                if ($error) {
                    echo '
                    <div class="alert alert-danger" role="alert">
                    ' .
                        $error . '
                </div>
                    ';
                }
                if ($message) {
                    echo '
                    <div class="alert alert-success" role="alert">
                        ' .
                        $message . '
                    </div>
                    ';
                }
                ?>


                <form method="POST">
                    <div class="mb-3">
                        <label for="fname" class="form-label">Firstname</label>
                        <input type="text" class="form-control" name="fname" value="<?php if (isset($fname)) {
                                                                                        echo $fname;
                                                                                    } ?>">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Lastname</label>
                        <input type="text" class="form-control" name="lname" value="<?php if (isset($lname)) {
                                                                                        echo $lname;
                                                                                    } ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php if (isset($email)) {
                                                                                        echo $email;
                                                                                    } ?>">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">IT Center</label>
                        <select class="form-select" name="it_center">
                            <option value="">Choose Center</option>
                            <option value="abuja" <?php echo (isset($it_center) && ($it_center == "abuja")) ? "selected" : "" ?>>Abuja Center</option>
                            <option value="lagos" <?php echo (isset($it_center) && ($it_center == "lagos")) ? "selected" : "" ?>>Lagos Center</option>
                            <option value="ibadan" <?php echo (isset($it_center) && ($it_center == "ibadan")) ? "selected" : "" ?>>Ibadan Center</option>
                            <option value="kano" <?php echo (isset($it_center) && ($it_center == "kano")) ? "selected" : "" ?>>Kano Center</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option value="male" <?php echo (isset($gender) && ($gender == "male")) ? "selected" : "" ?>>Male</option>
                            <option value="female" <?php echo (isset($gender) && ($gender == "female")) ? "selected" : "" ?>>Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" name="address" rows="5">
                        <?php if (isset($address)) {
                            echo $address;
                        } ?>

                        </textarea>
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Course</label>
                        <select class="form-select" name="course">
                            <option value="">Choose Course</option>
                            <option value="web design" <?php echo (isset($course) && ($course == "web design")) ? "selected" : "" ?>>Web Design</option>
                            <option value="python" <?php echo (isset($course) && ($course == "python")) ? "selected" : "" ?>>Python</option>
                            <option value="graphics" <?php echo (isset($course) && ($course == "graphics")) ? "selected" : "" ?>>Graphics Design</option>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-dark" name="submit">Register</button>
                </form>

            </section>
        </div>

    </main>
    <?php include('footer.php') ?>

</body>

</html>