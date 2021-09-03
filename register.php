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
    $password = clean_input($_POST['password']);
    $password_confirmation = clean_input($_POST['confirm_password']);
    $hash_password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);

    if (
        empty($fname) || empty($lname) || empty($gender)
        || empty($email) || empty($it_center) || empty($address)
        || empty($course) || empty($password)
    ) {
        $error .= " All fields are required.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error .= " Invalid Email address.";
    } //SIMILAR TO  (BUT BETTER THAN) SPECIFYING INPUT TYPE OF THE EMAIL FEILD TO BE EMAIL AND NOT TEXT
    else if (strlen($password) < 8) {
        $error .= " Password must not be less than 8 characters.";
    } else if ($password != $password_confirmation) {
        $error .= " Passwords do not match.";
    } else {
        $role = "student";
        $user_row = $db->query("SELECT * FROM users where email = '$email'");

        if ($user_row->num_rows > 0) {
            $error .= " Email already registered.";
        } else {
            $sql = "INSERT INTO users(fname, lname, email, gender, course, it_center, `address`, `password`, `user_role`) VALUES('$fname', '$lname', '$email', '$gender', '$course', '$it_center', '$address', '$hash_password', '$role')";
            $result = $db->query($sql);

            if ($result) {
                $message .= " Registration successful.";
                $fname = "";
                $lname = "";
                $gender = "";
                $email = "";
                $it_center = "";
                $address = "";
                $course = "";
            } else {
                $error .= " Sorry. Something went wrong! Try again.";
                // $error .= "Error occurred ".$db->error;
            }
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
    <title> Techify | Register</title>
</head>

<body style="background: rgb(242,241,237);">
    <div class="row header-top container-fluid">
        <a class="navbar-brand" href="index.php">
            <a class="navbar-brand" href="index.php"><img src="images\smartcoderound.png" width="50px" height="50px"></a>
    </div>

    <?php include('navigation.php') ?>

    <main class="container mt-2">
        <div class="row justify-content-center">
            <section class="slider col-md-6 mt-5">
                <h4 class="course-title">Register</h4>
                <?php if ($error) {
                    echo '<div class = "alert alert-danger" role = "alert">' . $error . '</div>';
                }
                if ($message) {
                    echo '<div class = "alert alert-success" role = "alert">' . $message . '</div>';
                } ?>
                <form method="POST">
                    <hr>
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
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email" value="<?php if (isset($email)) {
                                                                                        echo $email;
                                                                                    } ?>">
                    </div>
                    <div class="mb-3">
                        <label for="it_center" class="form-label">IT Center</label>
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
                            <option value="">Choose Gender</option>
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
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Course</label>
                        <select class="form-select" name="course">
                            <option value="">Choose Course</option>
                            <option value="web design" <?php echo (isset($course) && ($course == "web design")) ? "selected" : "" ?>>Web Design</option>
                            <option value="python" <?php echo (isset($course) && ($course == "python")) ? "selected" : "" ?>>Python</option>
                            <option value="graphics" <?php echo (isset($course) && ($course == "graphics")) ? "selected" : "" ?>>Graphics Design</option>
                            <!-- <option value = "" selected>Choose Course</option> -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password">
                    </div>
                    <button type="submit" class="btn btn-dark" name="submit">Register</button>
                </form>

            </section>
        </div>

    </main>
    <!-- <button class="btn btn-info">Login</button>
    <script src = "js/bootstrap.js"></script> -->

    <?php include('footer.php') ?>
</body>

</html>