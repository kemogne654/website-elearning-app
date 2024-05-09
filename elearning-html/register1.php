<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kelvin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    // Check if email already exists
    $check_stmt = $conn->prepare("SELECT * FROM register WHERE email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $result = $check_stmt->get_result();
    if ($result->num_rows > 0) {
        // Email already exists, show alert message
        echo "<script>alert('Email already exists!'); window.history.back();</script>";
    } else {
        // Email doesn't exist, proceed with registration
        $stmt = $conn->prepare("INSERT INTO register (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);

        // Execute SQL statement
        if ($stmt->execute()) {
            // Registration successful, show alert message
            echo "<script>alert('Registration successful!'); window.history.back();</script>";
        } else {
            // Error occurred, show alert message
            echo "<script>alert('Error: " . $stmt->error . "'); window.history.back();</script>";
        }
        // Close statement
        $stmt->close();
    }
    // Close check statement and connection
    $check_stmt->close();
    $conn->close();
}
?>
