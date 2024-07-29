<?php

require_once '../system/conn.php';

$NRP = $_GET['NRP'];

$sql = "SELECT * FROM mahasiswa WHERE NRP = '$NRP'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan";
    exit;
}

if (isset($_POST['submit'])) {
    $status = $_POST['status'];
    $sql = "UPDATE mahasiswa SET Status = '$status' WHERE NRP = '$NRP'";
    if ($conn->query($sql) === TRUE) {
        echo "Status berhasil diubah";
        header("Location: ../index.php?page=dataList");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
