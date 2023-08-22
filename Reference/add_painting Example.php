<?php
include_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];
    $query = "INSERT INTO tasks (task) VALUES (:task)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':task', $task);
    $stmt->execute();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Painting</title>
</head>
<body>
    <h2>Add New Painting</h2>
    <form method="post" action="">
        <input type="text" name="task" placeholder="Enter task">
        <button type="submit">Add</button>
    </form>
    <a href="index.php">Back to List</a>
</body>
</html>



