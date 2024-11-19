<?php
include 'koneksi.php';

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <a href="tambah_mahasiswa.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Nomor</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php 
        if ($result->num_rows > 0) { 
            $no = 1; // Inisialisasi nomor urut
            while ($row = $result->fetch_assoc()) { 
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo isset($row["nama"]) ? $row["nama"] : "N/A"; ?></td>
            <td><?php echo isset($row["nim"]) ? $row["nim"] : "N/A"; ?></td>
            <td><?php echo isset($row["email"]) ? $row["email"] : "N/A"; ?></td>
            <td><?php echo isset($row["nomor"]) ? $row["nomor"] : "N/A"; ?></td>
            <td><?php echo isset($row["jurusan"]) ? $row["jurusan"] : "N/A"; ?></td>
            <td>
                <a href="edit_mahasiswa.php?id=<?php echo $row["id"]; ?>">Edit</a> |
                <a href="hapus_mahasiswa.php?id=<?php echo $row["id"]; ?>">Hapus</a>
            </td>
        </tr>
        <?php 
            } 
        } else { 
        ?>
        <tr>
            <td colspan="7">Tidak ada data</td>
        </tr>
        <?php 
        } 
        ?>
    </table>
</body>

</html>

<?php $conn->close(); ?>
