<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Simulate fetching data (Replace with your database logic if needed)
$data = [
    "name" => "Hamster Kombat",
    "count" => 100,
    "progress" => 8,
];

echo json_encode($data);
?>
