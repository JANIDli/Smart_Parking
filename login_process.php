<?php
session_start();

require 'DBconnection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password, role FROM users WHERE username = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $username);

    $stmt->execute();
    $stmt->bind_result($user_id, $db_username, $db_password, $db_role);
    if ($stmt->fetch()) {
        if (password_verify($password, $db_password)) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $db_username;
            $_SESSION['role'] = $db_role;
            if ($db_role == 'admin') {
                header("Location: admin_dashboard.php");
            } else {
                header("Location: user_dashboard.php");
            }
            exit();
        } else {
            echo "Incorrect password. Please try again.";
        }
    } else {
        echo "Username not found. Please register first.";
    }
    $stmt->close();
}

$mysqli->close();
?>
