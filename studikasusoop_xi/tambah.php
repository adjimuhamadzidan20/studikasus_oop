<?php
    require 'config/Database.php';
    $db = new Database();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];

        $db->insertSiswa($nama, $kelas, $jurusan, $alamat);
        header("Location: index.php");
    }
?>

<style>
    .input-kolom {
        margin-bottom: 10px;
    }
</style>

<h2>Tambah Data Peserta Didik</h2>
<form method="post">
    <div class="input-kolom">
        <label for="">Nama Peserta Didik</label><br>
        <input type="text" name="nama" placeholder="Nama Peserta Didik">
    </div>
    <div class="input-kolom">
        <label for="">Kelas</label><br>
        <input type="text" name="kelas" placeholder="Kelas">
    </div>
    <div class="input-kolom">
        <label for="">Jurusan</label><br>
        <input type="text" name="jurusan" placeholder="jurusan">
    </div>
    <div class="input-kolom">
        <label for="">Alamat</label><br>
        <textarea name="alamat" placeholder="Alamat"></textarea>
    </div>
    <br>
    <a href="index.php"><button type="button">Kembali</button></a>
    <button type="submit">Simpan</button>
</form>