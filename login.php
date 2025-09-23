<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['username'] = $row['username'];
            header("Location: success.php");
            exit();
        } else {
            echo "<script>alert('Invalid password'); window.location.href='login.html';</script>";
        }
    } else {
        echo "<script>alert('No user found with this email'); window.location.href='signup.html';</script>";
    }
}
?>
