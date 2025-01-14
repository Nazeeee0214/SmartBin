<?php
// Include the database connection
include "dbconnect.inc.php";
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    echo json_encode(["status" => "error", "message" => "User not logged in"]);
    exit();
}

// Check if the new points are provided
if (isset($_POST['points'])) {
    $total_pts = (float) $_POST['points'];

    try {
        // Create PDO instance
        $pdo = new PDO("mysql:host=$databaseHost;dbname=$databaseName", $databaseUsername, $databasePassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the UPDATE query
        $sql = "UPDATE users SET points = :points WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':points', $total_pts);
        $stmt->bindParam(':id', $_SESSION['user']['id']); // Update the points for the logged-in user

        // Execute the query
        if ($stmt->execute()) {
            // Update the session to reflect the new points
            $_SESSION['user']['points'] = $total_pts;
            echo json_encode(["status" => "success", "message" => "Points updated successfully"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error updating points"]);
        }
    } catch (PDOException $e) {
        // Handle database connection errors
        echo json_encode(["status" => "error", "message" => "Database error: " . $e->getMessage()]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Points not provided"]);
}
