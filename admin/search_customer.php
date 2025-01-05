<?php
include("include/dbcon.php");

header('Content-Type: application/json'); // Ensure JSON response

$response = [];

if (isset($_GET['query']) && !empty($_GET['query'])) {
    $searchQuery = $_GET['query'];

    // Sanitize input
    $searchQuery = mysqli_real_escape_string($con, $searchQuery);

    // Query to fetch matching customer names
    $query = "SELECT cust_name, cust_email, cust_id, cust_number, cust_add FROM customer WHERE cust_name LIKE '%$searchQuery%' LIMIT 5";
    $result = mysqli_query($con, $query);

    if (!$result) {
        $response = ['error' => 'Database query failed', 'details' => mysqli_error($con)];
        echo json_encode($response);
        exit;
    }

    $customers = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $customers[] = $row;
    }

    echo json_encode($customers);
} else {
    $response = ['error' => 'Query parameter missing or empty'];
    echo json_encode($response);
}
?>
