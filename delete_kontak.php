<?php
	$host = "localhost";
	$user = "root";      
	$password = "";      
	$db_name = "fahmihotel";
	$konek = new mysqli($host, $user, $password, $db_name);
		
	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	$email = $_GET['email'];
	$query = "DELETE from kontak where email='$email'";
	if (mysqli_query($konek,$query)) {
		echo "<script>alert('Data Berhasil Dihapus'); window.location='tampil_data.php';</script>";
	}else{
		echo "Data Gagal dihapus".$konek->error;
	}
	$konek->close();
?>