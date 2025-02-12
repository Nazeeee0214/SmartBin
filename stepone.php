<?php
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 365);
session_set_cookie_params(60 * 60 * 24 * 365);
session_start();

if (!isset($_SESSION['user'])) {
  header('location:login.php');
}
?>

<head>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/step.css">

  <title>BINNOVATION</title>

  <style>
    /* Full-screen background */
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
      background: url('assets/images/bottles1.jpg') no-repeat center center fixed;
      background-size: cover;
    }

    /* Centered container */
    .container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Card styling */
    .card {
      max-width: 700px;
      height: 60vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      border-radius: 25px;
      background: rgba(255, 255, 255, 0.9);
      padding: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Title styling */
    .title {
      font-size: 30px;
      font-weight: bold;
      color: #black; /* Maroon */
      font-style: italic;
    }

    /* Description styling */
    .desc {
      font-size: 18px;
      color: #800000; /* Maroon */
      font-weight: bold;
    }

    /* Custom button styling */
    .btn-custom {
      font-size: 20px;
      padding: 15px 40px;
      border-radius: 10px;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card text-center shadow-lg w-75">
      <div class="content">
        <h1 class="title">STEP 1</h1>
        <p class="desc">
          Drop your Bottle In the Bottle Deposit Gate.
        </p>
        <div class="actions d-flex justify-content-center gap-5 mt-5">
          <a class="btn btn-success btn-custom" href="steptwo.php">Next</a>
          <a class="btn btn-danger btn-custom" href="logout.php">Cancel</a>
        </div>
      </div>
    </div>
  </div>
</body>
