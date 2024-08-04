<?php
include 'db.php';
$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();
     
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // $password = $_POST['password'];
    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password',$password);
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>