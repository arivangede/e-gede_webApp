<?php

require '../../fungsi/functions.php';

$category = $_GET['category'];

if (!empty($category)) {
    // Prevent SQL injection
    $category = mysqli_real_escape_string($conn, $category);

    // Modify the query to filter products by category
    $query = "SELECT * FROM ePasar WHERE category = '$category'";
    $result = mysqli_query($conn, $query);

    $products = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($products);
} else {
    echo "No category specified.";
}
