	<?php
		// membuat koneksi
		$host = "localhost";
		$username = "root";
		$password = "";
		$db_name = "fahmihotel";

		$konek = new mysqli($host, $username, $password, $db_name);

		// mengecek koneksi
		if($konek->connect_error){
		  die("Koneksi Gagal Karena : ". $konek->connect_error);
		}
		$idkamar = $_POST ['idkamar'];
		$idkategori = $_POST ['idkategori'];
		$namakamar = $_POST ['namakamar'];
		$lokasilantai = $_POST ['lokasilantai'];
		
		$query = "UPDATE kamar SET idkategori='$idkategori', namakamar='$namakamar', lokasilantai='$lokasilantai' WHERE idkamar='$_GET[id]'";
		if (mysqli_query($konek,$query)){
			echo "<script>alert('Data Berhasil diedit'); window.location='admin.php';</script>";
		}else{
			echo "Data Gagal diedit".$konek->error;
		}
		$konek->close();
	?>