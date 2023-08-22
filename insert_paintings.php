<?php

require_once 'config.php';

$paintings = [];

$paintings[] = [
              'title' => 'Bal du moulin de la Galette',
              'finished' => '1876',
              'media' => 'oil',
              'artist' => 'August Renoir',
              'style' => 'Impressionism',
              'image' => file_get_contents("http://localhost/PaintingWebsite/images/gif_500_wide/gif_500_wide/baldumoulindelagalette.gif")
              ];


$sql = "INSERT INTO painting(title, finished, media, artist, style, image) VALUES (:title, :finished, :media, :artist, :style, :image)";

foreach ($paintings as $painting) {
    $stmt = $pdo->prepare($sql);
    $stmt->execute($painting);
}

echo "Records inserted successfully";
  