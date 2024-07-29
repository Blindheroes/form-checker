<?php

require_once '../system/conn.php';

// Check if NRP is provided in the POST request
if (isset($_GET['NRP'])) {
    $nrp = $_GET['NRP'];

    // SQL query to delete data based on NRP
    $sql = "DELETE FROM mahasiswa WHERE NRP = '$nrp'"; // Replace "your_table_name" with the actual table name and "NRP" with the column name for NRP

    if ($conn->query($sql) === TRUE) {
        echo "Data deleted successfully";
    } else {
        echo "Error deleting data: " . $conn->error;
    }
} else {
    echo "NRP not provided in the request";
}

// Close the connection
$conn->close();
