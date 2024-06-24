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
$sppa = $data['sppa'];
$uraian = $data['uraian'];
$spby = $data['spby'];
$jumlah = $data['jumlah'];

$sql = "UPDATE data_table SET sppa='$sppa', uraian='$uraian', spby='$spby', jumlah='$jumlah' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $response = array(
        'success' => true,
        'message' => 'Data berhasil diperbarui'
    );
} else {
    $response = array(
        'success' => false,
        'message' => 'Error updating data: ' . $conn->error
    );
    header('HTTP/1.1 500 Internal Server Error');
}

header('Content-Type: application/json');
echo json_encode($response);

$conn->close();
?>
