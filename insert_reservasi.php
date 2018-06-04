<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$idb_name = "fahmihotel";
	$konek = new mysqli($host, $username, $password, $idb_name);
	
	$idcustomer = $_POST ['idcustomer'];
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
	$sql = mysqli_query($konek,"INSERT INTO reservasi(idcustomer, namacustomer, cin, cout, jmlinap, namakamar, total) VALUES ('$idcustomer','$namacustomer','$cin', '$cout', '$jmlinap', '$namakamar', '$tot')");
		if ($sql) {
			header("location:simpan_reservasi.php?id=".$idcustomer);
		}else{
			echo "Data Gagal".$konek->error;
		}
		$konek->close();
	?>