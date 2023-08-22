<?php
require_once 'db.php';

class PaintingModel {
    public function getAllPaintings() {
        global $pdo;
        $stmt = $pdo->query('SELECT * FROM painting');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addPainting($title, $finished, $media, $artist, $style, $image) {
        global $pdo;
        $stmt = $pdo->prepare('INSERT INTO painting (title, finished, media, artist, style, image) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$title, $finished, $media, $artist, $style, $image]);       
    }
}
?>