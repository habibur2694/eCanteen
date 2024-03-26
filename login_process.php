<?php
include "conn.php";

// Retrieve form data
$student_id = $_POST['username']; // Retrieve student ID from POST data
$password = $_POST['password'];

// SQL query to check if user exists
$sql = "SELECT * FROM users WHERE student_id = '$student_id'";
$result = $conn->query($sql);

// Check if user exists
if ($result->num_rows > 0) {
    // User found, verify password
    $row = $result->fetch_assoc();
    if ($password === $row['password']) {
        // Password is correct, redirect to dashboard or another page
        header("Location: we.html"); // Change this to your dashboard page
        exit();
    }
}

// Close connection
$conn->close();
?>
