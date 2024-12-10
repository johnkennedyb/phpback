<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// Get JSON payload from the request
$inputData = json_decode(file_get_contents("php://input"), true);

if (!$inputData) {
    echo json_encode([
        "success" => false,
        "message" => "Invalid input data",
    ]);
    exit;
}

// Simulate saving data (Replace with database logic)
$count = $inputData['count'] ?? 0;
$progress = $inputData['progress'] ?? 0;

// Example response (You can update this to save to a database)
echo json_encode([
    "success" => true,
    "message" => "Data updated successfully",
    "updated_count" => $count,
    "updated_progress" => $progress,
]);
?>
