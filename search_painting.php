<head>
<title>Results</title>
</head>
<body>
    <h3>Search Results</h3>
<?php

$searchTitle = trim($_POST['title']);

include_once 'db.php';
$query = "SELECT * FROM painting WHERE $searchTitle LIKE :keyword";
$stmt = $conn->prepare($query);
$stmt->bindValue(':keyword', '%' . $searchKeyword . '%', PDO::PARAM_STR);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

printf($results);
?>
</body>