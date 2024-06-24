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

$sql = "SELECT * FROM data_table";
$result = $conn->query($sql);

if ($result === false) {
    $response = array(
        'success' => false,
        'message' => 'Error reading table data: ' . $conn->error
    );
    header('Content-Type: application/json');
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode($response);
} else {
    $tableData = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tableData[] = $row;
        }
    }

    $response = array(
        'success' => true,
        'data' => $tableData
    );
    header('Content-Type: application/json');
    echo json_encode($response);
}

$conn->close();
