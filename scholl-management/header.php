<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- font-awesome-icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

     <!-- responsive css -->
     <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>
<body>
    <!-- header section -->
    <div class="mobile_menu">
            <div class="container">
                <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="index.php">Home</a>
                <a href="#">Menu
                <ul class="submenu">
                                <li title="Sudent information"><a href="all_users.php">Student information</a></li>
                                <li title="Teachers information"><a href="teacheers.php">Teachers Information</a></li>
                                <li title="Guardian information"><a href="#">Guardian Information</a></li>
                                <li title="Result  Summary"><a href="#">Result  Summary</a></li>
                                <li title="Payment Information"><a href="#">Payment Information</a></li>
                            </ul>
                </a>
                <a href="login.php">Log in</a>
                <a href="registration.php">registration</a>
                </div>
                <button class="openbtn" onclick="openNav()">☰</button> 
            </div>
        </div> 
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                       <a href="index.php"> <img src="img/images.jpg" alt="School Logo" class="w-100"></a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="menu">
                       <ul>
                        <li title="Home"><a href="index.php" class="All_links">Home</a></li>
                        <li title="Menu"><a href="" class="All_links">Menu<i class="fa-solid fa-arrow-down"></i></a>
                            <!-- sub-menu -->
                            <ul class="submenu">
                                <li title="Sudent information"><a href="all_users.php">Student information</a></li>
                                <li title="Teachers information"><a href="teacheers.php">Teachers Information</a></li>
                                <li title="Guardian information"><a href="#">Guardian Information</a></li>
                                <li title="Result  Summary"><a href="#">Result  Summary</a></li>
                                <li title="Payment Information"><a href="#">Payment Information</a></li>
                            </ul>
                        </li>
                        <li title="log in"><a href="login.php" class="All_links">Log In</a></li>
                        <li title="Registration"><a href="registration.php" Class="All_links">Registration</a></li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- header-section end -->
<script src="js/script.js"></script>


    