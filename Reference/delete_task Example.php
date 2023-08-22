<?php
include_once 'config.php';

$id = $_GET['id'];
$query = "DELETE FROM tasks WHERE id=:id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->execute();
header("Location: index.php");
exit();
?>