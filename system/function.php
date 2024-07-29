<?php

require_once 'conn.php';




function getAllData($table)
{
    global $conn;
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

function getDataByNRP($table, $NRP)
{
    global $conn;
    $sql = "SELECT * FROM $table WHERE NRP = $NRP";
    $result = $conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}


function getDataByAngkatan($table, $angkatan)
{
    global $conn;
    $sql = "SELECT * FROM $table WHERE angkatan = $angkatan";
    $result = $conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

function getDataBynama($table, $nama)
{
    global $conn;
    $sql = "SELECT * FROM $table WHERE Nama_lengkap = $nama";
    $result = $conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}
