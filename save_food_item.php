<?php
// Establish a database connection
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "dinescanfrt.mysql.database.azure.com", "abstractcoders", "Universe$1", "dinescanmenu", 3306, MYSQLI_CLIENT_SSL);

if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if data is sent via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the JSON data sent from JavaScript
    $data = json_decode(file_get_contents("php://input"));
   
    if ($data && isset($data->name) && isset($data->image) && isset($data->description) && isset($data->cost)) {
        $name = mysqli_real_escape_string($conn, $data->name);
        $image = mysqli_real_escape_string($conn, $data->image);
        $description = mysqli_real_escape_string($conn, $data->description);
        $cost = floatval($data->cost);

        // Inserting data into the database
        $query = "INSERT INTO menu_items (name, image, description, cost) VALUES ('$name', '$image', '$description', $cost)";

        if (mysqli_query($conn, $query)) {
            $response = array("success" => true, "message" => "Food item added successfully!");
        } else {
            $response = array("success" => false, "message" => "Failed to add food item. Please try again.");
        }

        echo json_encode($response);
    } else {
        // Invalid or missing data
        echo json_encode(array("success" => false, "message" => "Invalid data received."));
    }
} else {
    // If Not a POST request
    echo json_encode(array("success" => false, "message" => "Invalid request method."));
}

// Close the database connection
mysqli_close($conn);
?>
