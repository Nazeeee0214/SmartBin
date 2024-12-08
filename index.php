<!DOCTYPE html>
<html lang="en">

<?php
ini_set('session.gc_maxlifetime', value: 60 * 60 * 24 * 365);
session_set_cookie_params(60 * 60 * 24 * 365);
session_start();

if (!isset($_SESSION['user'])) {
  header('location:login.php');
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <title>Space Dynamic - SEO HTML5 Template</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>
  <div class="container">
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
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo">
                <h4>Bin<span>novation</span></h4>
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <div class="main-red-button"><a href="logout.php">Logout</a></div>
              </ul>
              <a class='menu-trigger'>
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Barcode Container Start ***** -->
    <div class="content-wrapper" style="overflow-x: hidden;">
      <div class="row">
        <div class="col-12">
          <div class="barcode-container">
            <!-- Step Content Sections -->
            <div class="step-content">
              <div id="content-step1" class="step-content-item" style="display: block;">
                <h3>Step 1 Content</h3>
                <p>Details for step 1.</p>
                <button class="btn btn-primary" id="next1">Next</button>
                <button class="btn btn-secondary" id="cancel1">Cancel</button>
              </div>
              <div id="content-step2" class="step-content-item" style="display: none;">
                <h3>Step 2 Content</h3>
                <p>Details for step 2.</p>
                <button class="btn btn-primary" id="next2">Next</button>
                <button class="btn btn-secondary" id="prev2">Previous</button>
                <button class="btn btn-secondary" id="cancel2">Cancel</button>
              </div>
              <div id="content-step3" class="step-content-item" style="display: none;">
                <h3>Step 3 Content</h3>
                <p>Details for step 3.</p>
                <button class="btn btn-primary" id="next3">Next</button>
                <button class="btn btn-secondary" id="prev3">Previous</button>
                <button class="btn btn-secondary" id="cancel3">Cancel</button>
              </div>
              <div id="content-step4" class="step-content-item" style="display: none;">
                <h3>Step 4 Content</h3>
                <p>Details for step 4.</p>
                <button class="btn btn-primary" id="next4">Next</button>
                <button class="btn btn-secondary" id="prev4">Previous</button>
                <button class="btn btn-secondary" id="cancel4">Cancel</button>
              </div>
              <div id="content-step5" class="step-content-item" style="display: none;">
                <h3>Step 5 Content</h3>
                <p>Details for step 5.</p>
                <button class="btn btn-primary" id="next5">Next</button>
                <button class="btn btn-secondary" id="prev5">Previous</button>
                <button class="btn btn-secondary" id="cancel5">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Barcode Container End ***** -->

    <footer>
    </footer>
  </div>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.cookie.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/index.js"></script>

  <!-- Link to External JavaScript -->
  <script src="steps.js"></script> <!-- Link to the new JS file -->
</body>

</html>
