<?php 
    require 'config/Siswa_config.php';
    session_start();

    $id = $_GET['id'];
    $db = new Siswa();
    $db->deleteSiswa($id);

    $_SESSION['pesan'] = 'Siswa berhasil terhapus!';
    $_SESSION['status'] = 'success';

    header("Location: index.php");
    exit();
?>