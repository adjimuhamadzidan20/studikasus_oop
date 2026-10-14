<?php  


class Database {
    // config instalasi koneksi database
	protected $host = 'localhost';
	protected $username = 'root';
	protected $password = '';
	protected $database = 'my_sekolah';
	protected $connectDB;	

	public function __construct() {
        $this->connect();
    }

    // koneksi ke database
    private function connect() {
        $this->connectDB = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->connectDB->connect_error) {
            die("Koneksi gagal: " . $this->connectDB->connect_error);
        }
    }
}

?>