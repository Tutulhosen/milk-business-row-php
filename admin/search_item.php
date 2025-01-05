<?php
include("include/dbcon.php");

header('Content-Type: application/json'); // Ensure JSON response

$response = [];

if (isset($_GET['query']) && !empty($_GET['query'])) {
    $searchQuery = $_GET['query'];

    // Sanitize input
    $searchQuery = mysqli_real_escape_string($con, $searchQuery);

    // Query to fetch matching items
    $query = "SELECT pid, title, price, image FROM furniture_product WHERE title LIKE '%$searchQuery%' LIMIT 5";
    $result = mysqli_query($con, $query);

    if (!$result) {
        $response = ['error' => 'Database query failed', 'details' => mysqli_error($con)];
        echo json_encode($response);
        exit;
    }

    $items = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $items[] = $row;
    }

    echo json_encode($items);
} else {
    $response = ['error' => 'Query parameter missing or empty'];
    echo json_encode($response);
}
?>
