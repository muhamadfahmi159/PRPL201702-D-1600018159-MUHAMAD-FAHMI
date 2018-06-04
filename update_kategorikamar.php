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
		$idkategori = $_POST ['idkategori'];
		$kategori = $_POST ['kategori'];
		$harga = $_POST ['harga'];
		
		$query = "UPDATE kategorikamar SET kategori='$kategori', harga='$harga' WHERE idkategori='$_GET[id]'";
		if (mysqli_query($konek,$query)){
			echo "<script>alert('Data Berhasil diedit'); window.location='admin.php';</script>";
		}else{
			echo "Data Gagal diedit".$konek->error;
		}
		$konek->close();
	?>