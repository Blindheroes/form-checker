<?php
require_once '../system/conn.php';


$data = $_POST['data'];

$lines = explode("\n", $data);

foreach ($lines as $line) {
    $line = trim($line);
    if (!empty($line)) {
        list($nrp, $nama, $angkatan) = explode("\t", $line);
        $stmt = $conn->prepare("INSERT INTO mahasiswa (NRP, Nama_lengkap, angkatan, Status) VALUES (?, ?, ?, 'aktif')");
        $stmt->bind_param("ssi", $nrp, $nama, $angkatan);
        $stmt->execute();
    }
}
echo "Data inserted successfully";
header("Location: ../index.php?php=DataList");
