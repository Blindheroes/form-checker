<?php
require_once 'system/function.php';

$data = getAllData('mahasiswa');
// Assign 'NRP', 'Nama Lengkap', 'Angkatan', dan 'Status' in $data to $mahasiswa
$mahasiswa = array_map(function ($item) {
    return [
        'NRP' => $item['NRP'],
        'Nama' => $item['Nama_lengkap'],
        'Angkatan' => $item['angkatan'],
        'Status' => $item['Status']
    ];
}, $data);

$nrp = array_column($data, 'NRP');


?>


<div class="card w-50 h-50 px-5 py-5 mx-5">
    <form action="" method="post">
        <label for="NRPinput">NRP:</label>
        <textarea id="NRPinput" name="NRPinput" rows="15" cols="25"><?php if (isset($_POST['NRPinput'])) echo $_POST['NRPinput']; ?></textarea>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>


<?php

if (isset($_POST['submit'])) {
    // Get input data and split by newline
    $inputNRP = explode("\n", trim($_POST['NRPinput']));

    // Remove any extra whitespace
    $inputNRP = array_map('trim', $inputNRP);

    // Find NRP that are not in the input list
    $notFilled = array_filter($mahasiswa, function ($item) use ($inputNRP) {
        return !in_array($item['NRP'], $inputNRP);
    });

    echo "<h3>NRP, Nama Lengkap, Angkatan, dan Status mahasiswa yang belum mengisi form:</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Status</th><th>Angkatan</th><th>NRP</th><th>Nama Lengkap</th></tr>";
    foreach ($notFilled as $student) {
        echo "<tr>";
        echo "<td>" . $student['Status'] . "</td>";
        echo "<td>" . $student['Angkatan'] . "</td>";
        echo "<td>" . $student['NRP'] . "</td>";
        echo "<td>" . $student['Nama'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>