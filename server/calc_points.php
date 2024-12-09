<?php
// Simulate loading the stored weight (this can be from a file, database, etc.)
$weight = include 'weight_storage.php';

// Check if the weight is a valid numeric value
if (is_numeric($weight)) {
    // Cast weight to a float
    $weight = floatval($weight);

    // Calculate points (points = (weight / 1000) * 7.8)
    $points = ($weight / 1000) * 7.8;

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
    // Return error if weight is not valid or missing
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid or missing weight value.'
    ]);
}
