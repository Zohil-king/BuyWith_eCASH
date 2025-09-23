<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $email    = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Signup successful! You can login now.'); window.location.href='login.html';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
