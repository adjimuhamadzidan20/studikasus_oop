<?php
    require 'config/Siswa_config.php';

    $db = new Siswa();
    $data = $db->getDataSiswa();

    // mencegah masuk melalui URL
    session_start();
    if (!isset($_SESSION['login'])) {
        header('Location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.8/css/dataTables.bootstrap5.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php">Schools Data</a>
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
    
    <div class="container mb-4 pb-5">
        <div class="row mb-3">
            <div class="col">
                <h2 class="my-3">Dashboard</h2>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0">Data Daftar Siswa</h5>
                    </div>
                    <a href="tambah.php">
                        <button class="btn btn-primary">Tambah Data</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <!-- menampilkan notif pesan -->
                <?php  
                    if (isset($_SESSION['pesan']) && isset($_SESSION['status'])) {
                ?>
                    <div class="alert alert-<?= $_SESSION['status']; ?> small" role="alert">
                      <?= $_SESSION['pesan']; ?>
                    </div>
                <?php
                        unset($_SESSION['pesan']);  
                        unset($_SESSION['status']);  
                    }
                ?>

                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Peserta Didik</th>
                            <th class="text-center">Kelas</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 0;
                            while($siswa = $data->fetch_assoc()) :
                            $no++;
                        ?>
                            <tr>
                                <td class="text-center"><?= $no; ?></td>
                                <td><?= $siswa['nama'] ?></td>
                                <td class="text-center"><?= $siswa['kelas'] ?></td>
                                <td><?= $siswa['jurusan'] ?></td>
                                <td><?= $siswa['alamat'] ?></td>
                                <td class="text-center">    
                                    <a href="edit.php?id=<?= $siswa['id_siswa'] ?>"><button class="btn btn-success">Edit</button></a>
                                    <a href="hapus.php?id=<?= $siswa['id_siswa'] ?>" onclick="return confirm('Yakin hapus?')">
                                    <button class="btn btn-success">Hapus</button></a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.3.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.8/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    
    <script>
        new DataTable('#example');
    </script>
</body>
</html>