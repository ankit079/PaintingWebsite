<!DOCTYPE html>
<html>
<head>
<title> All Paintings </title>
</head>
<body>
		<ul>
        <?php         
        require_once 'db.php';
        foreach ($paintings as $painting): ?>
            <li><?php echo $painting['title']; ?> - <?php echo $painting['finished']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>