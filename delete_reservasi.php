<?php
	$host = "localhost";
	$user = "root";      
	$password = "";      
	$db_name = "fahmihotel";
	$konek = new mysqli($host, $user, $password, $db_name);
		
	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}

	$query = "DELETE from reservasi where idcustomer='$_GET[id]'";
	if (mysqli_query($konek,$query)) {
		echo "<script>alert('Data Berhasil Dihapus'); window.location='admin.php';</script>";
	}else{
		echo "Data Gagal dihapus".$konek->error;
	}
	$konek->close();
?>