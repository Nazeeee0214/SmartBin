<?php
// Include the database connection
include 'dbconnect.inc.php';

// Simulate loading the stored weight (this can be from a file, database, etc.)
$weight = include 'weight_storage.php';

// Check if the weight is a valid numeric value
if (is_numeric($weight)) {
    // Cast weight to a float
    $weight = floatval($weight);

    try {
        // Query the database for the rate (from rewards_sys table)
        $stmt = $pdo->query("SELECT rate FROM rewards_sys LIMIT 1");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Fetch the rate from the database
            $rate = $result['rate'];

            // Calculate points (points = (weight / 1000) * rate)
            $points = ($weight / 1000) * $rate;

            // Round the points to two decimal places
            $points = round($points, 2);

            // Return the data as a JSON response
            header('Content-Type: application/json');
            echo json_encode([
                'status' => 'success',
                'weight' => $weight,
                'points' => $points
            ]);
        } else {
            // Return error if no rate is found in the database
            header('Content-Type: application/json');
            echo json_encode([
                'status' => 'error',
                'message' => 'Rate not found in the database.'
            ]);
        }
    } catch (PDOException $e) {
        // Return error if there's a database error
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'error',
            'message' => 'Database error: ' . $e->getMessage()
        ]);
    }
} else {
    // Return error if weight is not valid or missing
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid or missing weight value.'
    ]);
}
?>
