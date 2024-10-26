<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kode_prodi = $_POST['kode_prodi'];

$sql = "UPDATE mahasiswa SET nama = '$nama', nim = $nim, kode_prodi = '$kode_prodi' WHERE id = $id";
if ($koneksi->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>
