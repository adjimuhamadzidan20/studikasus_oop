<?php 

// file khusus untuk data dummy (faker)
require_once '../vendor/autoload.php';
require '../config/Database.php';
$db = new Database();

$faker = Faker\Factory::create('id_ID');

for ($i = 0; $i < 20; $i++) {
  $nama = $faker->name;
  $kelas = $faker->randomElement([10, 11, 12]);
  $jurusan = $faker->randomElement(['Rekayasa Perangkat Lunak']);
  $alamat = $faker->city(['Jakarta Timur', 'Kota Bekasi', 'Jakarta Selatan', 'Depok']);
  
  $res = $db->insertSiswa($nama, $kelas, $jurusan, $alamat);
}

if ($res) {
	echo "Data Masuk..";
}

?>