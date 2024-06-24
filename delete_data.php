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

$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];

$sql = "DELETE FROM data_table WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    $response = array(
        'success' => true,
        'message' => 'Data berhasil dihapus'
    );
} else {
    $response = array(
        'success' => false,
        'message' => 'Error deleting data: ' . $conn->error
    );
    header('HTTP/1.1 500 Internal Server Error');
}

header('Content-Type: application/json');
echo json_encode($response);

$conn->close();
?>
