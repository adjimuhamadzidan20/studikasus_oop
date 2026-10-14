<?php
// koneksi database
require 'Database.php';

class Siswa extends Database {
    // fungsi untuk menampilkan seluruh data  
    public function getDataSiswa() {
        $sql = "SELECT * FROM tb_siswa";
        $result = $this->connectDB->query($sql);
        return $result;
    }

    // fungsi menampilkan data berdasarkan ID nya
    public function getSiswaId($id) {
        $sql = "SELECT * FROM tb_siswa WHERE id_siswa = ?";
        $stmt = $this->connectDB->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // fungsi menambahkan data baru
    public function insertSiswa($nama, $kelas, $jurusan, $alamat) {
        $sql = "INSERT INTO tb_siswa (nama, kelas, jurusan, alamat) VALUES (?, ?, ?, ?)";
        $stmt = $this->connectDB->prepare($sql);
        $stmt->bind_param("ssss", $nama, $kelas, $jurusan, $alamat);
        return $stmt->execute();
    }

    // fungsi merubah data 
    public function updateSiswa($id, $nama, $kelas, $jurusan, $alamat) {
        $sql = "UPDATE tb_siswa SET nama = ?, kelas = ?, jurusan = ?, alamat = ? WHERE id_siswa = ?";
        $stmt = $this->connectDB->prepare($sql);
        $stmt->bind_param("ssssi", $nama, $kelas, $jurusan, $alamat, $id);
        return $stmt->execute();
    }

    // fungsi menghapus data
    public function deleteSiswa($id) {
        $sql = "DELETE FROM tb_siswa WHERE id_siswa = ?";
        $stmt = $this->connectDB->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

?>