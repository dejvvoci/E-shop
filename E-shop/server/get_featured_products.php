<?php

include('connection.php');

$stmt = $connection->prepare("SELECT * FROM PRODUCTS LIMIT 4");
$stmt ->execute();
$featured_products = $stmt->getResult();


?>