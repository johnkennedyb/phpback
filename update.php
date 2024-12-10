<?php
header("Content-Type: application/json");

// Read the input
$input = json_decode(file_get_contents("php://input"), true);

// Validate input
if (!isset($input['count']) || !is_numeric($input['count'])) {
    echo json_encode(["success" => false, "message" => "Invalid input data"]);
    exit;
}

// Process the count (e.g., save it to a database, file, etc.)
// For demonstration purposes, we'll just return the count
$response = [
    "success" => true,
    "message" => "Count updated successfully",
    "count" => $input['count'],
];

echo json_encode($response);
?>
