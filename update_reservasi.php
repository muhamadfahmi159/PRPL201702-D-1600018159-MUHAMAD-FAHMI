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
		$namacustomer = $_POST ['namacustomer'];
		$checkin = date_create($_POST ['cin']);
		$checkout = date_create($_POST ['cout']);
		$jmlinap = date_diff($checkin,$checkout)->format('%a');

		$cin = $_POST ['cin'];
		$cout = $_POST ['cout'];
		$namakamar = $_POST ['namakamar'];
		$sq = mysqli_query($konek,"SELECT * FROM kategorikamar where idkategori='$namakamar'");
			$total = mysqli_fetch_assoc($sq);
			$tot = $total['harga']*$jmlinap;
		$query = "UPDATE reservasi SET namacustomer='$namacustomer', cin='$cin', cout='$cout', jmlinap='$jmlinap', namakamar='$namakamar' WHERE idcustomer='$_GET[id]'";
		if (mysqli_query($konek,$query)){
			echo "<script>alert('Data Berhasil diedit'); window.location='admin.php';</script>";
		}else{
			echo "Data Gagal diedit".$konek->error;
		}
		$konek->close();
	?>