<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/googleapis.css"
        rel="stylesheet">

    <title>BINNOVATION</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/login.css">


    <!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
</head>



<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="login.php" class="logo">
                            <h4>BIN<span>OVATION

                                </span></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">

                            <div class="main-red-button"><a href="loginAdmin.php">Login As Admin</a></div>
                            </li>
                        </ul>

                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ***** Header Area End ***** -->
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="DT_container float-end ">
                        <div class="display-date">
                            <div class="date-line">
                                <span id="day">day</span>
                                <span id="daynum">00</span>
                                <div class="year-line">
                                    <span id="month">month</span>
                                    <span id="year">0000</span>
                                </div>
                            </div>
                        </div>
                        <div class="display-time"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6   align-self-right  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="left-image" style="margin-left:120px;">
                        <img src="assets/images/id.gif" style="height:380px; width:auto;" alt="">
                    </div>
                    <h1 style="font-size:30px !important">Please Scan you Barcode to Login!</h1>
                </div>
                <div class="col-lg-6  align-self-center  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <form>
                        <div class="form-group">
                            <label>Student ID</label>
                            <input id="user_id" name="user_id" type="text" value="<?php include "server/barcode_storage.php" ?>" class="form-control p_input">
                        </div>
                        <div class="text-center d-grid gap-2 mt-1">
                            <button id="login" name="login" type="button"
                                class="btn btn-primary btn-block enter-btn">Log
                                in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p>© Copyright 2024 The Defenders Yahoo! All Rights Reserved.

                        <br>Design: <a rel="nofollow" href="#">TheDefenders!</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--function JS-->

    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/loginpg.js"></script>
    <script>
        // Polling function to fetch the latest barcode from the server
        // Polling function to fetch the latest barcode from the server
        function pollBarcode() {
            $.get("server/barcode_storage.php", function(data) {
                // Check if the data is not empty (i.e., a barcode is available)
                if (data.trim() !== "") {
                    // Update the user_id input field with the barcode
                    $("#user_id").val(data.trim());

                    // Manually trigger the input event after updating the value
                    $('#user_id').trigger('input'); // This ensures the input event is triggered
                }
            });
        }

        // Start polling the barcode storage file every 2 seconds
        setInterval(pollBarcode, 2000);

        // Listen for changes in the user_id input field
        $('#user_id').on('input', function() {
            var user_id = $(this).val().trim();

            // Check if the input field is not empty (a barcode is present)
            if (user_id !== "") {
                // Trigger the login process as soon as the user_id is populated
                $.post("server/login.inc.php", {
                    user_id: user_id
                }, function(response) {
                    if (response === "success") {
                        // After successful login, clear the barcode from storage
                        $.get("server/clear_barcode.php", function() {
                            window.location.href = "stepone.php"; // Redirect after login
                        });
                    } else {
                        alert(response); // Show error message if login fails
                    }
                });
            }
        });
    </script>

</body>

</html>