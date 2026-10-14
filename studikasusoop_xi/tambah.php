<?php
    require 'config/Database.php';
    $db = new Database();
    session_start();

    // menangkap request dari form (tambah) 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = htmlspecialchars($_POST['nama']);
        $kelas = htmlspecialchars($_POST['kelas']);
        $jurusan = htmlspecialchars($_POST['jurusan']);
        $alamat = htmlspecialchars($_POST['alamat']);

        $db->insertSiswa($nama, $kelas, $jurusan, $alamat);
        $_SESSION['pesan'] = 'Siswa berhasil ditambahkan!';
        $_SESSION['status'] = 'success';

        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peserta Didik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Schools Data</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link text-white active" aria-current="page" href="index.php">Dashboard</a>
                    <a class="nav-link text-white active" aria-current="page" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-4">Tambah Data Peserta Didik</h2>
                        <form method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Peserta Didik</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" placeholder="Nama Peserta Didik" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="kelas" placeholder="Kelas" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="jurusan" placeholder="Jurusan" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" placeholder="Alamat" required></textarea>
                            </div>
                            <a href="index.php"><button type="button" class="btn btn-primary">Kembali</button></a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

