<?php
include "conn.php";

// Retrieve form data
$name = $_POST['name'];
$student_id = $_POST['student_id'];
$department = $_POST['department'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$present_address = $_POST['present_address'];
$permanent_address = $_POST['permanent_address'];
$password = $_POST['password'];
$retype_password = $_POST['retype_password'];

// Insert data into the database
$sql = "INSERT INTO Students (Name, Student_ID, Department, Email, Phone, Present_Address, Permanent_Address, Password, Retype_Password)
VALUES ('$name', '$student_id', '$department', '$email', '$phone', '$present_address', '$permanent_address', '$password', '$retype_password')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registration successful');</script>";
    echo "<script>window.location.href='index.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
