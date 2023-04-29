<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/icon.jpg"/>
    <title>Sotware Department</title>
    <link rel="stylesheet" href="../assets/css/fontawsome.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../assets/css/app's.css"/>
    <link rel="stylesheet" href="../assets/css/dashboard.css"/>
    <link rel="stylesheet" href="../assets/css/system.css"/>
    <link rel="stylesheet" href="../assets/css/service.css"/>
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>

<?php if (isset($_SESSION['id'])) {?>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Wellcome !!! &#128519; </a>
        <ul class="navbar-nav">

            <?php if($_SESSION['user_type'] == 1) {?>

            <li><a href="./dashboard.php" class="nav-link">Dashboard</a></li>
            <li><a href="./app.php" class="nav-link">App's</a></li>
            <li><a href="./services.php" class="nav-link">Services</a></li>
            <li><a href="./system.php" class="nav-link">System</a></li>
            <li><a href="" class="nav-link">MQTT</a></li>

            <?php } else if($_SESSION['user_type'] == 0) { ?>

            <li><a href="./dashboard.php" class="nav-link">Dashboard</a></li>
            <li><a href="" class="nav-link">iShuttle</a></li>
            <li><a href="./app.php" class="nav-link">App's</a></li>
            <li><a href="./services.php" class="nav-link">Services</a></li>
            <?php }else if($_SESSION['user_type'] == 2) {?>

            <li><a href="./dashboard.php" class="nav-link">Dashboard</a></li>
            <li><a href="" class="nav-link">iShuttle</a></li>
            <li><a href="./app.php" class="nav-link">App's</a></li>
            <li><a href="./services.php" class="nav-link">Services</a></li>
            <li><a href="./system.php" class="nav-link">System</a></li>
            <li><a href="" class="nav-link">MQTT</a></li>

            <?php }?>

            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <?php echo isset($_SESSION['name']) ? $_SESSION['name']: ''; ?>
                </a>
                <ul class="dropdown-menu navbar-dark">
                    <li><a href="" class="dropdown-item">Profile</a></li>
                    <li><a href="action.php?status=logout" class="dropdown-item">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<?php } else {?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" >
        <div class="container">
            <a href=""><img src="../assets/img/logo.jpeg" class="navbar-brand" height="50px" width="50px"/></a>
            <ul class="navbar-nav">
            <li><a href="home.php" alt="" class="nav-link text-white">Home</a></li>
            <li class="d-flex"><button class="btn text-white my-0 " onclick="location.href='login.php'">Login</button></li>
            </ul>
        </div>
    </nav>
<?php }?>