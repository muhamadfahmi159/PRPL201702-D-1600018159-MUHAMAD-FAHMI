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
				$idkategori = $_POST ['idkategori'];
				$kategori = $_POST ['kategori'];
				$harga = $_POST ['harga'];

				$sql = "INSERT INTO kategorikamar(idkategori, kategori, harga) VALUES ('$idkategori','$kategori','$harga')";
				if($konek->query($sql)){
					echo "<script>alert('Data Berhasil Dihapus'); window.location='tampil_data.php';</script>";
				}
				else{
					echo "Data Kategori Gagal Di Tambah : ".$konek->error."<br/>";
				}
				$konek->close();
				echo "<a href = 'admin.php'>Tambah Data Kategori<a/>";
			?>