<?php
session_start(); // Ensure this is at the very top before any output

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'admin') {
    $_SESSION['admin'] = true;
    header('Location: ../index.php?page=dataList');
    exit();
} else {
    echo "<script>
            alert('Username atau password salah');
            setTimeout(function() {
                window.location.href = '../index.php?page=login';
            }, 500); // 2000 milliseconds = 2 seconds
          </script>";
    exit();
}
