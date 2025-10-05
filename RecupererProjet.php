<?php
require 'BD.php';

$sql = "SELECT * FROM projects ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$projects = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $projects[] = $row;
    }
}

echo json_encode($projects);
?>
