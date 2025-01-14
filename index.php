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

  <title>BINNOVATION</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
</head>

<style>
  .barcode-container {
    text-align: center;
    background-color: white;
    margin: 15px 26px 0px 26px;
    height: 200px;
    padding: 2em;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .row-container {
    background-color: white;
    margin: -420px 26px 0px 26px;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .chart-container {
    text-align: center;
    background-color: whitesmoke;
    margin: 10px 26px;
    height: 450px;
    padding: 2em;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }


  input,
  button {
    padding: 10px;
    margin: 0px 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  button {
    color: white;
    cursor: pointer;
  }

  button:hover {
    background-color: #ddddddd5;
  }






  #botlcap {
    width: 100%;
    height: 100%;
  }

  #main {
    width: 100%;
    height: 100%;
  }



  .form-control:focus {
    box-shadow: none;
    border-color: #800000;
  }

  .profile-button {
    background: rgb(95, 6, 6);
    box-shadow: none;
    border: none
  }

  .profile-button:hover {
    background: #800000;
  }

  .profile-button:focus {
    background: #800000;
    box-shadow: none
  }

  .profile-button:active {
    background: #800000;
    box-shadow: none
  }

  .back:hover {
    color: #800000;
    cursor: pointer
  }

  .labels {
    font-size: 11px;
    color: #800000;

  }

  .add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
  }

  #search-bar::placeholder {
    color: #fff;
  }

  #search-bar {
    color: #fff;
  }

  .ttl_points {
    align-items: center;
    text-align: center;
    margin: 20px 0px 30px 0px;
  }

  .btn-points {
    padding: 0;
    width: 180px;
    /* Button width */
    height: 180px;
    /* Button height */
    border: 2px solid rgba(3, 195, 236, 0.85);
    outline: none;
    background-color: #ffffff;
    border-radius: 20px;
    /* Adjusted border-radius */
    box-shadow:
      -3px -10px 15px #ffffff,
      -3px -5px 8px #ffffff,
      -10px 0px 15px #ffffff,
      3px 10px 12px rgba(0, 0, 0, 0.2);
    transition: 0.3s ease-in-out;
    /* Smooth animation */
    cursor: pointer;
  }

  /* Hover animation: Scaling the button and adjusting shadow */
  .btn-points:hover {
    transform: scale(1.1);
    /* Button grows slightly */
    background-color: #f4f5f6;
    box-shadow:
      -3px -15px 20px #ffffff,
      -3px -10px 10px #ffffff,
      -10px 0px 15px #ffffff,
      5px 15px 15px rgba(0, 0, 0, 0.3);
  }

  /* Active click animation */
  .btn-points:active {
    transform: scale(0.95);
    /* Button shrinks slightly */
    background-color: #f4f5f6;
    box-shadow: none;
    /* Shadow disappears when clicked */
  }

  /* Centering and styling the content */
  .btn-points-content {
    display: flex;
    /* Enables Flexbox */
    flex-direction: column;
    /* Align items vertically */
    justify-content: center;
    /* Centers items vertically */
    align-items: center;
    /* Centers items horizontally */
    padding: 10px;
    /* Padding for spacing */
    width: 100%;
    height: 100%;
    box-shadow:
      inset 0px -4px 0px #dddddd,
      0px -4px 0px #f4f5f6;
    border-radius: 20px;
    transition: 0.3s ease-in-out;
    z-index: 1;
  }

  /* Styling the h1 text */
  .btn-points-icon h1 {
    font-size: 59px !important;
    margin: 0;
    /* Removes any default margin */
    font-size: 24px;
    /* Adjust size as needed */
    color: #800000;
    /* Text color */
    text-align: center;
  }

  /* Styling the small text */
  .btn-points-text {
    margin: 5px 0 0 0;
    /* Adjust spacing above and below */
    font-size: 14px;
    /* Adjust size as needed */
    color: #555555;
    /* Text color */
    text-align: center;
    transition: 0.3s ease-in-out;
  }

  /* Hover effect on text */
  .btn-points:hover .btn-points-text {
    transform: translateY(-5px);
    /* Move the text up slightly on hover */
  }

  .data-manager-title {
    font-size: 2rem;
    text-align: center;
    margin-top: 20px;
    /* Adjust margin as needed */
    margin-bottom: 20px;
    /* Provide spacing below the title */
    color: #800000;
    /* Ensure text color contrasts with the background */
    font-weight: bold;
    /* Make the title more prominent */
  }
</style>

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
                </li>
              </ul>

              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div class="content-wrapper" style="overflow-x: hidden; margin-top:100px; ">
      <!-- Main Content Area -->
      <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
          <h1 class="data-manager-title">DATA MANAGER</h1>
        </div>

        <div class="row">
          <div class="col-12" style="width: 97.5%;">
            <div class="chart-container" style="background-color: whitesmoke ">
              <div id="botlcap" style="width: 100%; height: 400px;"></div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="chart-container" style="background-color: whitesmoke ">
                <div id="main1" style="width: 100%; height: 400px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End of Layout Page -->

    </div> <!-- End of Layout Container -->

    <!-- Overlay for Layout Menu Toggle -->
    <div class="layout-overlay layout-menu-toggle"></div>

  </div> <!-- End of Layout Wrapper -->

  <!-- Footer JS Include -->





  <footer>
  </footer>
  </div>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.cookie.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/index.js"></script>
  <script src="assets/js/echarts.min.js"></script>

  <script>
    // JavaScript for #main chart


    // JavaScript for #botlcap chart with percentage labels on bars
    var chartDomBotlcap = document.getElementById('botlcap');
    var myChartBotlcap = echarts.init(chartDomBotlcap);
    var optionBotlcap;
    optionBotlcap = {
      xAxis: {
        data: ['Clear Bottle ', 'Colored Bottle'],
        axisLine: {
          show: false
        },
        splitLine: {
          show: false
        },
        axisLabel: {
          fontSize: 16, // Adjust the font size for the name labels
          color: 'grey', // Optionally change the color of the name
          fontWeight: 'bold' // Optional: Make the name text bold
        }
      },
      yAxis: {
        max: 100,
        min: 0, // Set the minimum value to 0
        axisLine: {
          show: false
        },
        splitLine: {
          show: true, // Enable the background grid lines
          lineStyle: {
            type: 'dashed', // Optional: You can change this to 'solid' or other styles
            color: '#cccccc' // Optional: Set the color of the grid lines
          }
        },
        axisLabel: {
          show: false // Hide the labels on the y-axis
        },
        interval: 10, // Set interval for the ticks (i.e., grid lines will appear at 10, 20, 30, etc.)
      },
      dataGroupId: '',
      animationDurationUpdate: 500,
      series: {
        type: 'bar',
        id: 'sales',
        data: [{
            value: 30,
            groupId: 'clear',
            name: 'Clear Bottle',
            itemStyle: {
              color: '#00FFFF',
              borderRadius: [10, 10, 0, 0],
              shadowBlur: 10,
              shadowOffsetX: 2,
              shadowOffsetY: 2,
              shadowColor: 'rgba(0, 0, 0, 0.3)'
            },
            label: {
              show: true,
              position: 'top',
              formatter: '{c}%',
              color: 'grey',
              fontSize: 20
            }
          },
          {
            value: 90,
            groupId: 'colored',
            name: 'Colored Bottle',
            itemStyle: {
              color: 'green',
              borderRadius: [10, 10, 0, 0],
              shadowBlur: 10,
              shadowOffsetX: 2,
              shadowOffsetY: 2,
              shadowColor: 'rgba(0, 0, 0, 0.3)'
            },
            label: {
              show: true,
              position: 'top',
              formatter: '{c}%',
              color: 'grey',
              fontSize: 20
            }
          }
        ],
        universalTransition: {
          enabled: true,
          divideShape: 'clone'
        }
      }
    };

    optionBotlcap && myChartBotlcap.setOption(optionBotlcap);


    //ECHARTS 2


    var chartDom = document.getElementById('main1');
    var myChart = echarts.init(chartDom);
    var option;

    option = {
      title: {
        text: 'STORAGE CAPACITY',
        subtext: '100 Capacity',
        left: 'center'
      },
      tooltip: {
        trigger: 'item'
      },
      legend: {
        orient: 'vertical',
        left: 'left'
      },
      series: [{
        name: 'Access From',
        type: 'pie',
        radius: '50%',
        data: [{
            value: 45,
            name: 'Cleared Bottle'
          },
          {
            value: 80,
            name: 'Colored Bottle'
          },
          {
            value: 75,
            name: 'Available Storage'
          },

        ],
        emphasis: {
          itemStyle: {
            shadowBlur: 10,
            shadowOffsetX: 0,
            shadowColor: 'rgba(0, 0, 0, 0.5)'
          }
        }
      }]
    };

    option && myChart.setOption(option);
  </script>


</body>

</html>