<?php
include 'koneksi.php';

if ($conn->connect_error) {
    $response = array(
        'success' => false,
        'message' => 'Koneksi ke database gagal: ' . $conn->connect_error
    );
    header('Content-Type: application/json');
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode($response);
    exit();
}

$sql = "TRUNCATE TABLE data_table";

if ($conn->query($sql) === TRUE) {
    $response = array(
        'success' => true,
        'message' => 'Table truncated successfully'
    );
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    $response = array(
        'success' => false,
        'message' => 'Error truncating table: ' . $conn->error
    );
    header('Content-Type: application/json');
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode($response);
}

$conn->close();
