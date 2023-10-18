<?php
require_once('db_conn.php');

$mobileNumber = $_GET['mobileNumber'];


// Query to fetch past orders for the specific user

$query = "SELECT * FROM orders WHERE mobileNumber = '$mobileNumber'";
$result = mysqli_query($conn, $query);

// Check if there are past orders
if (mysqli_num_rows($result) > 0) {
    $pastOrders = array();

    while ($row = mysqli_fetch_assoc($result)) {
        
        $pastOrders[] = array('order_id' => $row['order_id'], 'order_total' => $row['total_amount'], 'order_date' => $row['order_date']);
        
    }

    // Return the past orders as JSON
    header('Content-Type: application/json');
    echo json_encode($pastOrders);
} else {
    // No past orders found
    echo json_encode(array('message' => 'No past orders found, lets order something!'));
}

// Close the database connection
mysqli_close($conn);
?>
