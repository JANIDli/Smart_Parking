<?php 

require 'DBconnection';

echo "Connection Successful";

$username = $_POST['name'];
$mobile = $_POST['mobile'];
$nic = $_POST['nic'];
$carNumber = $_POST['carNumber'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT); 
$role = 'user';

$sql = "INSERT INTO users(username, mobile_number, nic, car_number, password, role) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("ssssss", $username, $mobile, $nic, $carNumber, $hashed_password, $role);

if ($stmt->execute()) {
    echo "Registration Successful";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>
