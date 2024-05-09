<?php
$servername = 'localhost'; 
$usernames = 'root';
$password = '';
$dbname = 'kelvindb';

$conn = new mysqli($servername, $usernames, $password, $dbname);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $subjects = $_POST['subjects'];
    $comments = $_POST['comments'];

    $sql = 'INSERT INTO comment(username, email, subjects, comments) VALUES (?, ?, ?, ?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $username, $email, $subjects, $comments);
    if ($stmt->execute()) {
        echo '<p>Your message has been sent successfully!</p>';
    } else {
        echo '<p>Oops! Something went wrong, please try again later.</p>'; // Fix typo in echo
    }

    $stmt->close(); 
}
$conn->close();
?>
