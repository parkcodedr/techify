<?php
$page = $_SERVER['PHP_SELF'];
$p = explode("/", $page);
$page_name = explode(".", $p[2]);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarIT" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarIT">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link 
                    <?php echo $page_name[0] === 'index' ? 'active' : '' ?> " href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page_name[0] === 'about' ? 'active' : '' ?> " href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            </ul>

            <ul class="nav justify-content-lg-end">
                <li class="nav-item">
                    <a class="nav-link <?php echo $page_name[0] === 'login' ? 'active' : '' ?>" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page_name[0] === 'register' ? 'active' : '' ?>" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page_name[0] === 'student' ? 'active' : '' ?> " href="#">Students</a>
                </li>
            </ul>
        </div>
    </div>

</nav>