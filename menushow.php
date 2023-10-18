<?php

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "dinescanfrt.mysql.database.azure.com", "abstractcoders", "Universe$1", "dinescanmenu", 3306, MYSQLI_CLIENT_SSL);

// Get the list of food items.
$sql = "SELECT * FROM menu_items";
$result = $conn->query($sql);

// Create an array of food items.
$foodItems = [];
while ($row = $result->fetch_assoc()) {
  $foodItems[] = [
    "name" => $row["name"],
    "image" => $row["image"],
    "cost" => $row["cost"],
  ];
}

// Return the array of food items.
echo json_encode($foodItems);

?>