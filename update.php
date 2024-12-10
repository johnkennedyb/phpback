<?php
header("Content-Type: application/json");

// Enable CORS if needed
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Read the incoming JSON payload
$input = json_decode(file_get_contents("php://input"), true);

// Validate the count value
if (!isset($input['count']) || !is_numeric($input['count'])) {
    echo json_encode(["success" => false, "message" => "Invalid input data"]);
    exit;
}

// Process the count (e.g., save it to a database, etc.)
$response = [
    "success" => true,
    "message" => "Count updated successfully",
    "count" => $input['count'],
];

echo json_encode($response);
?>
