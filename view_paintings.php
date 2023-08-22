<?php
include_once 'db.php';

try{
    // Prepare and execute the SQL query to fetch items
    $stmt = $pdo->query("SELECT * FROM painting");
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
// Close the connection
$pdo = null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Paintings</title>
</head>
<body>
    <h1>Items List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Finished</th>
        </tr>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['title']; ?></td>
                <td><?php echo $item['finished']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
