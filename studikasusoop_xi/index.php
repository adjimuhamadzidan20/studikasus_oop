<?php
    require 'config/Database.php';
    require 'config/Siswa.php';

    $db = new Database();
    $data = $db->getDataSiswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Dashboard</h2>
    <h3>Data Daftar Siswa</h3>
    <a href="tambah.php"><button>Tambah Data</button></a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php 
            while($row = $data->fetch_assoc()) {
            $siswa = new Siswa($row['id_siswa'], $row['nama'], $row['kelas'], $row['jurusan'], $row['alamat']);
        ?>
        
        <tr>
            <td><?= $siswa->id ?></td>
            <td><?= $siswa->nama ?></td>
            <td><?= $siswa->kelas ?></td>
            <td><?= $siswa->jurusan ?></td>
            <td><?= $siswa->alamat ?></td>
            <td>
                <a href="edit.php?id=<?= $siswa->id ?>"><button>Edit</button></a>
                <a href="hapus.php?id=<?= $siswa->id ?>" onclick="return confirm('Yakin hapus?')"><button>Hapus</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>