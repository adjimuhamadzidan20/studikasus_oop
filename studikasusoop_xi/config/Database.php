<?php  

class Database {
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'my_sekolah';
	private $connectDB;	

	public function __construct() {
        $this->connect();
    }

    private function connect() {
        $this->connectDB = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->connectDB->connect_error) {
            die("Koneksi gagal: " . $this->connectDB->connect_error);
        }
    }

    public function getDataSiswa() {
    	$sql = "SELECT * FROM tb_siswa";
        $result = $this->connectDB->query($sql);
        return $result;
    }

    public function getSiswaId($id) {
    	$sql = "SELECT * FROM tb_siswa WHERE id_siswa = ?";
        $stmt = $this->connectDB->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function insertSiswa($nama, $kelas, $jurusan, $alamat) {
    	$sql = "INSERT INTO tb_siswa (nama, kelas, jurusan, alamat) VALUES (?, ?, ?, ?)";
        $stmt = $this->connectDB->prepare($sql);
        $stmt->bind_param("ssss", $nama, $kelas, $jurusan, $alamat);
        return $stmt->execute();
    }

    public function updateSiswa($id, $nama, $kelas, $jurusan, $alamat) {
    	$sql = "UPDATE tb_siswa SET nama = ?, kelas = ?, jurusan = ?, alamat = ? WHERE id_siswa = ?";
        $stmt = $this->connectDB->prepare($sql);
        $stmt->bind_param("ssssi", $nama, $kelas, $jurusan, $alamat, $id);
        return $stmt->execute();
    }

    public function deleteSiswa($id) {
    	$sql = "DELETE FROM tb_siswa WHERE id_siswa = ?";
        $stmt = $this->connectDB->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

?>