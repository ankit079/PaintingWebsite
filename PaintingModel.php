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
        $sql = "INSERT INTO painting(title, finished, media, artist, style, image) VALUES (?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam('image', $image, PDO::PARAM_LOB);
        $stmt->execute([$title, $finished, $media, $artist, $style, $image]);       
    }

    public function updatePainting($id, $title, $finished, $media, $artist, $style, $image) {
        global $pdo;
        $sql = "UPDATE painting SET title=?, finished=?, media=?, artist=?, style=?, image=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam('image', $image, PDO::PARAM_LOB);
        $stmt->execute([$title, $finished, $media, $artist, $style, $image,$id]);       
    }

    public function deletePainting($id) {
        global $pdo;
        $sql = "DELETE FROM painting WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);    
    }
}
?>