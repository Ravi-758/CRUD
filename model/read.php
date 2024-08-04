<?php 
$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();
?>