<?php
include 'koneksi.php';

$id = intval($_POST['id']); // Sanitasi ID untuk menghindari SQL Injection
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$nim = mysqli_real_escape_string($conn, $_POST['nim']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$nomor = mysqli_real_escape_string($conn, $_POST['nomor']);
$jurusan = mysqli_real_escape_string($conn, $_POST['jurusan']);

$sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', email='$email', nomor='$nomor', jurusan='$jurusan' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
