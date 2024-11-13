<?php
include "dbconnect.inc.php";
session_start();

$student_id = $_POST["student_id"];

if (!empty('student_id')) {  // Use the correct variable
    try {
        // Create a PDO instance
        $pdo = new PDO("mysql:host=$databaseHost;dbname=$databaseName", $databaseUsername, $databasePassword);
        // Set PDO to throw exceptions for errors
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Query to find the user by student_id
        $query = "SELECT id, student_id, password, restriction, fullname FROM users WHERE student_id = :student_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':student_id', $student_id, PDO::PARAM_STR);
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
