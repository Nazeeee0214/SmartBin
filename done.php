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
<?php
// Fetch points data from calc_points.php
$response = file_get_contents('http://localhost/SmartBin/server/calc_points.php');
$data = json_decode($response, true);

// Check if the request was successful
$points = 0;
$weight = 0;
$error_message = '';
if ($data['status'] === 'success') {
    $points = $data['points'];
    $weight = $data['weight'];
} else {
    $error_message = $data['message'];
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Points Calculation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .container h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .weight-info,
        .points-info {
            font-size: 18px;
            color: #555;
            margin: 10px 0;
        }

        .points-info {
            font-weight: bold;
            font-size: 28px;
            color: #4caf50;
            /* Green color for points */
        }

        .ttl_points {
            font-weight: bold;
            font-size: 32px;
            color: #4caf50;
            /* Green color for points */
        }


        .error-message {
            color: #f44336;
            /* Red for error messages */
            font-size: 16px;
            margin-top: 15px;
        }

        .loading {
            color: #2196f3;
            font-size: 20px;
        }

        .container p {
            margin: 10px 0;
        }

        .row {
            display: flex;
            flex-direction: row;
            /* Ensures items are arranged in a row */
            gap: 10px;
            /* Adds spacing between columns */
        }

        .col-6 {
            flex: 1;
            /* Makes each column take up equal space */
            padding: 10px;
            background-color: #f0f0f0;
            text-align: center;
        }

        #updatePointsBtn {
            margin-top: 20px;
            background-color: #4CAF50;
            /* Green background */
            color: white;
            /* White text */
            border: none;
            /* Remove border */
            border-radius: 5px;
            /* Rounded corners */
            padding: 12px 24px;
            /* Padding inside the button */
            font-size: 16px;
            /* Font size */
            cursor: pointer;
            /* Pointer cursor on hover */
            transition: background-color 0.3s ease;
            /* Smooth transition for background color */
        }
    </style>
</head>
<?php
$weight = include 'server/weight_storage.php';
$total_pts = (float)  htmlspecialchars($points)  + (float) $_SESSION['user']['points'];
?>

<body>

    <div class="container" id="pointsContainer">
        <h2>Points Calculation</h2>
        <p id="weight" class="weight-info"></p>
        <p id="points" class="points-info">Loading...</p>
        <p id="errorMessage" class="error-message"></p>
        <br><br>
        <div class="row">
            <div class="col-6">
                <h2>Current Points:</h2>
                <p class="ttl_points"><?php echo  number_format($_SESSION['user']['points'], 2) ?></p>
            </div>

        </div>
        <!-- Button to trigger points update -->
        <div class="row">
            <button id="updatePointsBtn" href="">Done</button>


        </div>

    </div>

    <script>
        function fetchPoints() {
            fetch('server/calc_points.php')
                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        document.getElementById('weight').textContent = 'Weight: ' + data.weight + ' grams';
                        document.getElementById('points').textContent = 'Points Updated Successfully ';
                        document.getElementById('errorMessage').textContent = '';
                    } else {
                        document.getElementById('points').textContent = 'Points calculated: N/A';
                        document.getElementById('errorMessage').textContent = data.message;
                    }
                })
                .catch(error => {
                    document.getElementById('points').textContent = 'Points calculated: N/A';
                    document.getElementById('errorMessage').textContent = 'Error fetching data.';
                });
        }

        function startPolling(interval) {
            // Call fetchPoints initially
            fetchPoints();

            // Set interval for polling
            setInterval(fetchPoints, interval);
        }

        // Start polling every 5 seconds
        startPolling(1000);

        document.getElementById('updatePointsBtn').addEventListener('click', function() {
            // Get the total points from PHP (make sure this is passed as a variable)
            var totalPts = <?php echo json_encode($total_pts); ?>;

            // Trigger the function to update points on the server
            updatePointsOnServer(totalPts);
        });
    </script>

</body>

</html>