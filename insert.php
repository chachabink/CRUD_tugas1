<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$umur = $_POST['nim'];
$kode_prodi = $_POST['kode_prodi'];

$sql = "INSERT INTO mahasiswa (nama, nim, kode_prodi) VALUES ('$nama', $nim, '$kode_prodi')";
if ($koneksi->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>
