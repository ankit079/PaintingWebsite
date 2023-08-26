<?php

require_once 'db.php';

$id = 5;


// $sql = "INSERT INTO painting(title, finished, media, artist, style, image) VALUES (:title, :finished, :media, :artist, :style, :image)";

$stmt = $pdo->prepare('DELETE FROM painting WHERE id=:id');
$stmt->bindParam(':id', $id);
$stmt->execute();    


echo "Records deleted successfully";
    // Close the connection
    $pdo = null;
    ?>