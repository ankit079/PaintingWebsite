<?php
include_once 'config.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];
    $query = "UPDATE tasks SET task=:task WHERE id=:id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':task', $task);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("Location: index.php");
    exit();
}

$query = "SELECT * FROM tasks WHERE id=:id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->execute();
$task = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h2>Edit Task</h2>
    <form method="post" action="">
        <input type="text" name="task" value="<?php echo $task['task']; ?>">
        <button type="submit">Update</button>
    </form>
    <a href="index.php">Back to List</a>
</body>
</html>