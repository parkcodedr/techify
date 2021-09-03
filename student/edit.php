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

$sql = "SELECT * FROM users WHERE id = '$id'";
$result = $db->query($sql);

if ($result->num_rows == 0) {
    header("location:/techify/student/");
}
$user = $result->fetch_assoc();

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
        $error .= " All fields are required.";
    } else {

        $sql = "UPDATE users SET fname='$fname', lname='$lname', gender='$gender', 
            course='$course', it_center='$it_center', `address`='$address' WHERE id='$id'";
        $result = $db->query($sql);
        if ($result) {
            $message .= " User Updated successfully.";
        } else {
            $error .= " Sorry. Something went wrong! Try again." . $db->error;
            // $error .= "Error occurred ".$db->error;
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
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <title> Students | Edit</title>
</head>

<body style="background: rgb(242,241,237);">
    <div class="row header-top container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="../images/pepperest-logo-white.png"></a>
    </div>

    <?php include('../navigation.php') ?>

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
                    <div class="mb-3">
                        <label for="fname" class="form-label">Firstname</label>
                        <input type="text" class="form-control" name="fname" value="<?php echo $user['fname'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Lastname</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $user['lname'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $user['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="it_center" class="form-label">IT Center</label>
                        <select class="form-select" name="it_center">
                            <option value="">Choose Center</option>
                            <option value="abuja" <?php echo ($user['it_center'] == 'abuja') ? "selected" : "" ?>>Abuja Center</option>
                            <option value="lagos" <?php echo ($user['it_center'] == 'lagos') ? "selected" : "" ?>>Lagos Center</option>
                            <option value="ibadan" <?php echo ($user['it_center'] == 'ibadan') ? "selected" : "" ?>>Ibadan Center</option>
                            <option value="kano" <?php echo ($user['it_center'] == 'kano') ? "selected" : "" ?>>Kano Center</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option value="">Choose Gender</option>
                            <option value="male" <?php echo ($user['gender'] == 'male') ? "selected" : "" ?>>Male</option>
                            <option value="female" <?php echo ($user['gender'] == 'female') ? "selected" : "" ?>>Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" name="address" rows="5">
            <?php echo $user['address'] ?>
            </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Course</label>
                        <select class="form-select" name="course">
                            <option value="">Choose Course</option>
                            <option value="web design" <?php echo ($user['course'] == 'web design') ? "selected" : "" ?>>Web Design</option>
                            <option value="python" <?php echo ($user['course'] == 'python') ? "selected" : "" ?>>Python</option>
                            <option value="graphics" <?php echo ($user['course'] == 'graphics') ? "selected" : "" ?>>Graphics Design</option>
                            <!-- <option value = "" selected>Choose Course</option> -->
                        </select>
                    </div>

                    <button type="submit" class="btn btn-dark" name="submit">Update</button>
                </form>

            </section>
        </div>

    </main>
    <!-- <button class="btn btn-info">Login</button>
    <script src = "js/bootstrap.js"></script> -->

    <?php include('../footer.php') ?>
</body>

</html>