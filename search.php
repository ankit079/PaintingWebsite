<?php
$searchKeyword = "your_search_keyword"; // Replace with your actual search term

$query = "SELECT * FROM products WHERE product_name LIKE :keyword";
$stmt = $conn->prepare($query);
$stmt->bindValue(':keyword', '%' . $searchKeyword . '%', PDO::PARAM_STR);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>