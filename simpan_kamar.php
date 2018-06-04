		<?php
			//membuat koneksi
			$host = "localhost";
			$user = "root";      
			$password = "";      
			$db_name = "fahmihotel";  
			 
			$konek = new mysqli($host, $user, $password, $db_name);
			
			if($konek->connect_error){
			die("Koneksi Gagal Karena : ". $konek->connect_error);
			}

			$idkamar = $_POST ['idkamar'];
			$idkategori = $_POST ['idkategori'];
			$namakamar = $_POST ['namakamar'];
			$lokasilantai = $_POST ['lokasilantai'];

			$sql = "INSERT INTO kamar(idkamar, idkategori, namakamar, lokasilantai) VALUES ('$idkamar','$idkategori','$namakamar','$lokasilantai')";
			if($konek->query($sql)){
				echo "<script>alert('Data Berhasil Dihapus'); window.location='tampil_data.php';</script>";
			}
			else{
				echo "Data Kamar Gagal Di Tambah : ".$konek->error."<br/>";
			}
			$konek->close();
			echo "<a href = 'admin.php'>Tambah Data Kamar<a/>";
		?>