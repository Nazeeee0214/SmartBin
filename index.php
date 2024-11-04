<!DOCTYPE html>
<html lang="en">

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
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="sidebar-active"> <!-- add this class dynamically -->
  <div class="container-fluid d-flex flex-column">
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
      <div class="container d-flex justify-content-between align-items-center">
        <button class="open-btn" onclick="toggleSidebar()">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </button>
        <nav class="main-nav">
          <a href="index.php" class="logo">
            <h4>BIN<span>NOVATION</span></h4>
          </a>
        </nav>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="d-flex flex-row">
      <div class="sidebar" id="sidebar">
        <button class="close-btn" onclick="toggleSidebar()"></button>
        <div class="sidebar-header">
          <h2>Dashboard Menu</h2>
        </div>
        <ul class="sidebar-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Analytics</a></li>
          <li><a href="#">Calendar</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Messages</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Settings</a></li>
        </ul>
      </div>

      <div class="main-content flex-grow-1">
        <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center">
                <div class="left-content header-text wow fadeInLeft " data-wow-duration="1s" data-wow-delay="1s">
                  <h6>Welcome to Space Dynamic</h6>
                  <h2>We Make <em>Digital Ideas</em> &amp; <span>SEO</span> Marketing</h2>
                  <p>Space Dynamic is a professional looking HTML template using a Bootstrap 5 (beta 2). This CSS
                    template
                    is free for you provided by <a rel="nofollow" href="https://templatemo.com/page/1"
                      target="_parent">TemplateMo</a>.</p>
                  <form id="search" action="#" method="GET">
                    <fieldset>
                      <input type="address" name="address" class="email" placeholder="Your website URL..."
                        autocomplete="on" required>
                    </fieldset>
                    <fieldset>
                      <button type="submit" class="main-button">Analyze Site</button>
                    </fieldset>
                  </form>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                  <img src="assets/images/banner-right-image.png" alt="team meeting">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/index.js"></script>
</body>

</html>