<!DOCTYPE html>
<html lang="en">

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
    </style>
</head>

<body>

    <div class="container" id="pointsContainer">
        <h2>Points Calculation</h2>
        <p id="weight" class="weight-info"></p>
        <p id="points" class="points-info">Loading...</p>
        <p id="errorMessage" class="error-message"></p>
    </div>

    <script>
        function fetchPoints() {
            fetch('server/calc_points.php')
                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        document.getElementById('weight').textContent = 'Weight: ' + data.weight + ' grams';
                        document.getElementById('points').textContent = 'Points: ' + data.points;
                        document.getElementById('errorMessage').textContent = '';
                    } else {
                        document.getElementById('points').textContent = 'Points: N/A';
                        document.getElementById('errorMessage').textContent = data.message;
                    }
                })
                .catch(error => {
                    document.getElementById('points').textContent = 'Points: N/A';
                    document.getElementById('errorMessage').textContent = 'Error fetching data.';
                });
        }

        // Call the function to fetch points
        fetchPoints();
    </script>

</body>

</html>