<?php
require 'db.php';

$data = json_decode(file_get_contents('php://input'), true);

if(isset($data['name'], $data['client'], $data['status'], $data['budget'])) {
    $name = mysqli_real_escape_string($conn, $data['name']);
    $client = mysqli_real_escape_string($conn, $data['client']);
    $status = mysqli_real_escape_string($conn, $data['status']);
    $budget = floatval($data['budget']);
    $progress = ($status === 'Terminé') ? 100 : rand(10, 80);

    $sql = "INSERT INTO projects (name, client, status, budget, progress) 
            VALUES ('$name', '$client', '$status', $budget, $progress)";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => mysqli_error($conn)]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Données manquantes']);
}
?>
