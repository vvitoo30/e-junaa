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

// Mendapatkan data dari permintaan POST
$tableData = json_decode(file_get_contents('php://input'), true);

$success = true;
$errorMessages = array();

// Menyisipkan data secara langsung
foreach ($tableData as $rowData) {
    $sppa = $rowData['sppa'];
    $uraian = $rowData['uraian'];
    $spby = $rowData['spby'];
    $jumlah = $rowData['jumlah'];

    $sql = "INSERT INTO data_table (sppa, uraian, spby, jumlah) VALUES ('$sppa', '$uraian', '$spby', '$jumlah')";
    if ($conn->query($sql) !== TRUE) {
        $success = false;
        $errorMessages[] = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$response = array(
    'success' => $success,
    'message' => $success ? 'Data berhasil disimpan' : 'Terjadi kesalahan saat menyimpan data',
    'errors' => $errorMessages
);

header('Content-Type: application/json');

if ($success) {
    echo json_encode($response);
} else {
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode($response);
}

$conn->close();
