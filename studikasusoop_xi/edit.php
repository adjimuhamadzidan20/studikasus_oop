<?php
    include 'config/Database.php';
    $db = new Database();

    $id = $_GET['id'];
    $row = $db->getSiswaId($id);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];

        $db->updateSiswa($id, $nama, $kelas, $jurusan, $alamat);
        header("Location: index.php");
    }
?>

<style>
    .input-kolom {
        margin-bottom: 10px;
    }
</style>

<h2>Edit Data Peserta Didik</h2>
<form method="post">
    <div class="input-kolom">
        <label for="">Nama Peserta Didik</label><br>
        <input type="text" name="nama" value="<?= $row['nama'] ?>">
    </div>
    <div class="input-kolom">
        <label for="">Kelas</label><br>
        <input type="text" name="kelas" value="<?= $row['kelas'] ?>">
    </div>
    <div class="input-kolom">
        <label for="">Jurusan</label><br>
        <input type="text" name="jurusan" value="<?= $row['jurusan'] ?>">
    </div>
    <div class="input-kolom">
        <label for="">Alamat</label><br>
        <textarea name="alamat"><?= $row['alamat'] ?></textarea>
    </div>
    <br>
    <a href="index.php"><button type="button">Kembali</button></a>
    <button type="submit">Update</button>
</form>