<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "database1"; 

    $conn = new mysqli($host, $user, $pass, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the form data
$stmt = $conn->prepare("INSERT INTO student (full_name, mother_name, address, email, Mobile, dob, category, gender, course, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $full_name, $mother_name, $address, $Email, $Mobile, $dob, $category, $gender, $course, $image);

// Get the form data
$full_name = $_POST['full_name'];
$mother_name = $_POST['mother_name'];
$address = $_POST['address'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$dob = $_POST['dob'];
$category = $_POST['category'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$image = $_FILES['image']['name']; // Assuming the file input field name is 'image'

// Upload the image file
$target_directory = "upload/"; // Specify the directory to store the uploaded images
$target_file = $target_directory . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>