<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id = $id";
$result = $koneksi->query($sql);
$row = $result->fetch_assoc();
?>

<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $row['nama'] ?>"><br>
    <label>Umur:</label><br>
    <input type="number" name="nim" value="<?= $row['nim'] ?>"><br>
    <label>Kelas:</label><br>
    <input type="text" name="kode_prodi" value="<?= $row['kode_prodi'] ?>"><br><br>
    <input type="submit" value="Update">
</form>
