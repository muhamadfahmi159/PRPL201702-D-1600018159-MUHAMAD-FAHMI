<?php
	$host = "localhost";
	$user = "root";      
	$password = "";      
	$db_name = "fahmihotel";  
			 
	$konek = new mysqli($host, $user, $password, $db_name);
	
	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	$email = $_POST ['email'];
	$phone = $_POST ['phone'];
	$message = $_POST ['message'];
	
	$sql = "INSERT INTO kontak(email, phone, message) VALUES ('$email','$phone','$message')";
	if($konek->query($sql)){
		echo "Data Kontak Berhasil Di tambah! <br/>";
	}
	else{
		echo "Data Kontak Gagal Di Tambah : ".$konek->error."<br/>";
	}
	session_start();
	if(session_destroy()){
		header("Location: index.php");
	}
	$konek->close();
?>