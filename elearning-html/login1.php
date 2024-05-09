<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kelvin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM register WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Set session variables
        $_SESSION["email"] = $email;
        // Redirect to dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid email or password.'); window.history.back();</script>";
    }
    $stmt->close();
}
$conn->close();
?>
