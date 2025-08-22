<?php

include('connection.php');

// Prepare the statement
$stmt = $connection->prepare("SELECT * FROM PRODUCTS LIMIT 4");
$stmt->execute();

// Fetch the results
$featured_products = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

$stmt->close();

// Now $featured_products is an array of associative arrays
?>
