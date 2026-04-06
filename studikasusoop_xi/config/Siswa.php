<?php

class Siswa {
    public $id;
    public $nama;
    public $kelas;
    public $jurusan;
    public $alamat;

    public function __construct($id, $nama, $kelas, $jurusan, $alamat) {
        $this->id = $id;
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->jurusan = $jurusan;
        $this->alamat = $alamat;
    }

    public function tampilkanData() {
        echo "ID: $this->id <br>";
        echo "Nama: $this->nama <br>";
        echo "Kelas: $this->kelas <br>";
        echo "Jurusan: $this->jurusan <br>";
        echo "Alamat: $this->alamat <br><br>";
    }
}
?>