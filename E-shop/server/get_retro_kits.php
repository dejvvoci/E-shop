<?php

include('connection.php');

// Prepare the statement
$stmt = $connection->prepare("SELECT * FROM PRODUCTS WHERE product_category='retro_kit' LIMIT 3");
$stmt->execute();

// Fetch the results
$retro_kits = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

$stmt->close();

// Now $featured_products is an array of associative arrays
?>
