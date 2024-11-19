<?php
include 'koneksi.php';

$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$nim = mysqli_real_escape_string($conn, $_POST['nim']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$nomor = mysqli_real_escape_string($conn, $_POST['nomor']);
$jurusan = mysqli_real_escape_string($conn, $_POST['jurusan']);

$sql = "INSERT INTO mahasiswa (nama, nim, email, nomor, jurusan) VALUES ('$nama', '$nim', '$email', '$nomor', '$jurusan')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
