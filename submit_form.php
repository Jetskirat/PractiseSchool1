<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$parent_name = $_POST['parent_name'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$student_id = $_POST['student_id'];
$email = $_POST['email'];
$dob = $_POST['dob'];

// File upload paths
$photo_path = "uploads/" . basename($_FILES["photo"]["name"]);
$father_photo_path = "uploads/" . basename($_FILES["father_photo"]["name"]);
$mother_photo_path = "uploads/" . basename($_FILES["mother_photo"]["name"]);

// Move uploaded files to the server
move_uploaded_file($_FILES["photo"]["tmp_name"], $photo_path);
move_uploaded_file($_FILES["father_photo"]["tmp_name"], $father_photo_path);
move_uploaded_file($_FILES["mother_photo"]["tmp_name"], $mother_photo_path);

// Prepare and execute the SQL statement to insert data
$stmt = $conn->prepare("INSERT INTO students (first_name, last_name, parent_name, gender, class, student_id, email, dob, photo, father_photo, mother_photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssss", $first_name, $last_name, $parent_name, $gender, $class, $student_id, $email, $dob, $photo_path, $father_photo_path, $mother_photo_path);
$stmt->execute();

// Check if the data was successfully inserted
if ($stmt->affected_rows > 0) {
    echo "Data submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>
