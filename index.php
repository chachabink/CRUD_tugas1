<?php
include 'koneksi.php';

$sql = "SELECT * FROM mahasiswa";
$result = $koneksi->query($sql);
?>

<h2>Data Mahasiswa</h2>
<a href="tambahData.php">Tambah Data</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>nim</th>
        <th>nama</th>
        <th>kode_prodi</th>
        <th>status_aktivitas</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['kode_prodi'] ?></td>
        <td><?= $row['status_aktivitas'] ?></td>
        <td>
            <a href="editData.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
