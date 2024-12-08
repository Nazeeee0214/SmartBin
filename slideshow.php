<!DOCTYPE html>
<html lang="en">

<?php
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 365);
session_set_cookie_params(60 * 60 * 24 * 365);
session_start();

if (!isset($_SESSION['user'])) {
  header('location:login.php');
  exit();
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Space Dynamic - SEO HTML5 Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">

  <style>
    /* Scale the iframe to 5x the original size */
    #stepOneIframe {
      transform: scale(5); /* Scale it 5x */
      transform-origin: top left; /* Ensure scaling starts from the top left corner */
      width: 10%; /* Make the iframe occupy the full width of its parent */
      height: 10%; /* Make the iframe occupy the full height of its parent */
    }
  </style>
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
    <div>
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

  <!-- Main Content Area Start -->
  <div class="content-wrapper" style="overflow-x: hidden;">
    <div class="row">
      <div class="col-12">
        <div class="barcode-container">
          <!-- Embed the contents of stepone.php here -->
          <iframe src="stepone.php" id="stepOneIframe" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Content Area End -->

  <footer>
  </footer>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.cookie.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/index.js"></script>
</body>

</html>
