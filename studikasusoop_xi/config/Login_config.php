<?php  
// koneksi database
require 'Database.php';

class Login extends Database {
	// fungsi untuk login
    public function getLogin($username) {
        $sql = "SELECT * FROM tb_admin WHERE username = ?";
        $stmt = $this->connectDB->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        return $stmt->get_result();
    }
}

?>