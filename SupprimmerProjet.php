<?php
require 'BD.php';

$data = json_decode(file_get_contents('php://input'), true);

if(isset($data['id'])) {
    $id = intval($data['id']);
    $sql = "DELETE FROM projects WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => mysqli_error($conn)]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'ID manquant']);
}
?>
