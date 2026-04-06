<?php
	require 'config/Database.php';
	
	$id = $_GET['id'];
	$db = new Database();
	$db->deleteSiswa($id);

	header("Location: index.php");
?>