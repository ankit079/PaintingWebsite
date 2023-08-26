<?php

require_once 'db.php';

$painting = [
              'id' => '1',
              'title' => 'Bal du moulin de la Galette',
              'finished' => '1876',
              'media' => 'oil',
              'artist' => 'August Renoir',
              'style' => 'Impressionism',
              'image' => file_get_contents("http://localhost/PaintingWebsite/resources/images/gif_500_wide/thepersistenceofmemory.gif"),
              ];


   $sql = "UPDATE painting SET title=:title, finished=:finished, media=:media, artist=:artist, style=:artist,image=:image WHERE id=:id";

   $stmt = $pdo->prepare($sql);
   $stmt->execute($painting);


echo "Records inserted successfully";
    // Close the connection
    $pdo = null;
    ?>