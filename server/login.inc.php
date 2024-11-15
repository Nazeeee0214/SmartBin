<?php
include "dbconnect.inc.php";
session_start();

$user_id = $_POST["user_id"];

if (!empty('user_id')) {  // Use the correct variable
    try {
        // Create a PDO instance
        $pdo = new PDO("mysql:host=$databaseHost;dbname=$databaseName", $databaseUsername, $databasePassword);
        // Set PDO to throw exceptions for errors
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Query to find the user by user_id
        $query = "SELECT id, user_id, password, restriction, fullname FROM users WHERE user_id = :user_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the user exists
        if ($result) {
            $_SESSION['user'] = [
                'id' => $result['id'],
                'restriction' => $result['restriction']
            ];
            echo "success";
        } else {
            echo 'Invalid Student ID.';
        }
    } catch (PDOException $e) {
        // Handle database connection errors
        echo 'Database error: ' . $e->getMessage();
    }
} else {
    echo 'Please enter Student ID.';
}
