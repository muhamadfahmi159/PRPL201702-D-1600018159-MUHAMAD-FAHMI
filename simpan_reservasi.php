<!DOCTYPE html>
<html>
	<head>
		<title>PRPL Fahmi</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="icon" type="img" href="Gambar/F.png">
		<style>
			* {
			  box-sizing: border-box;
			}
			#myInput {
			  background-image: url('/css/searchicon.png');
			  background-position: 10px 10px;
			  background-repeat: no-repeat;
			  width: 100%;
			  font-size: 16px;
			  padding: 12px 20px 12px 40px;
			  border: 1px solid #ddd;
			  margin-bottom: 12px;
			}
			#myTable {
			  border-collapse: collapse;
			  width: 100%;
			  border: 1px solid #ddd;
			  font-size: 18px;
			}
			#myTable th, #myTable td {
			  text-align: left;
			  padding: 12px;
			}
			#myTable tr {
			  border-bottom: 1px solid #ddd;
			}
			#myTable tr.header, #myTable tr:hover {
			  background-color: #f1f1f1;
			}
			@media (max-width: 800px) {
				.row {
				    flex-direction: column-reverse;
				}
				.col-25 {
				    margin-bottom: 20px;
				}
			}
			.container {
	    		border-radius: 5px;
	    		background-color: #f2f2f2;
	    		padding: 20px;
	    	}
	    	* {
				box-sizing: border-box;
			}
			.col-50 {
				-ms-flex: 50%; /* IE10 */
				flex: 50%;
			}
			input[type=text] {
				width: 100%;
				margin-bottom: 20px;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 3px;
			}
			label {
				margin-bottom: 10px;
				display: block;
			}
			img {
		      	display: block;
		      	background: black;
		    }
		    .print-area {border:1px solid red;padding:1em;margin:0 0 1em}
		</style>
	</head>
<body style="font-family: arial; color: black; font-size: 16px; background-color: #e5e7ea;border: 1px solid gold;">
	<center><h1><span style="color: #173c77;">TRANSAKSI PEMBAYARAN</span></h1></center><hr><br>
	<div class="container">
		<h2><span style="color: #173c77;">Data Transaksi</span></h2><br>
		<table id="myTable" border='0' align="center">
			<tr>
				<th style='width:15%;'>Id Customer</th>
				<th style='width:15%;'>Nama Customer</th>
				<th style='width:10%;'>Check-In</th>
				<th style='width:10%;'>Check-Out</th>
				<th style='width:10%;'>Jumlah Menginap</th>
				<th style='width:10%;'>Tipe Kamar</th>
				<th style='width:10%;'>Total Biaya</th>
			</tr>
		<?php
			$host = "localhost";
			$username = "root";
			$password = "";
			$idb_name = "fahmihotel";
			$konek = new mysqli($host, $username, $password, $idb_name);	
			$ss = mysqli_query($konek,"SELECT * FROM reservasi inner join kategorikamar on idkategori=namakamar where idcustomer='$_GET[id]'");
			$row = mysqli_fetch_assoc($ss);
				echo "<tr>";echo "<td>".$row['idcustomer']."<br></td>";
				echo "<td>".$row['namacustomer']."<br></td>";
				echo "<td>".$row['cin']."<br></td>";
				echo "<td>".$row['cout']."<br></td>";
				echo "<td>".$row['jmlinap']." Malam<br></td>";
				echo "<td>".$row['kategori']." Room <br></td>";
				echo "<td> Rp ".$row['total']."<br></td>";echo "</tr>";
		?>
		</table><br>
	  	<h3>Nota Transaksi</h3>
	  	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Nota</button>
	  	<div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		    	<div id="print-area-1" class="print-area">
			      	<div class="modal-content">
			        	<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal">&times;</button>
			        		<div class="row"><br>
			        			<div class="col-sm-6"><img src="Gambar/LOGO.png" width="250px"></div>
			        			<div class="col-sm-6"><b><p><span class="glyphicon glyphicon-map-marker"></span> Jl. Veteran, Gg.Ranudimejo, UH 2 Muja Muju, Yogyakarta &#8211; Indonesia</p><p><span class="glyphicon glyphicon-phone"></span> (+62) 812 517 226 63 </p></b>
			        			</div>
			        		</div>
			        	</div>
				        <div class="modal-body">
				        	<p align="right">Tanggal Terbit	: <?php $tgl = date(' j F Y ');echo $tgl; ?></p>
				        	<table class="table table-striped ">
				        		<tr><td>Id Customer</td>
				        			<td align="right"><?=$row['idcustomer'];?></td></tr>
				        		<tr><td>Nama Customer</td>
				        			<td align="right"><?=$row['namacustomer'];?></td></tr>
				        		<tr><td>Tanggal Check-In</td>
				        			<td align="right"><?=$row['cin'];?></td></tr>
				        		<tr><td>Tanggal Check-Out</td>
				        			<td align="right"><?=$row['cin'];?></td></tr>
				        		<tr><td>Jumlah Menginap</td>
				        			<td align="right"><?=$row['jmlinap'];?> Malam</td></tr>
				        		<tr><td>Tipe Kamar</td>
				        			<td align="right"><?=$row['kategori'];?> Room</td></tr>
				        		<tr><td>Harga Kamar</td>
				        			<td align="right">Rp<?=$row['harga'];?></td></tr>
				        	</table>
					        <h4 align="right"><b>Total Biaya Rp<?=$row['total'];?></b></h4>
				        </div>
				        <div class="modal-footer">
				        	<a class="no-print btn btn-sm btn-warning" href="javascript:printDiv('print-area-1');" ><span class="glyphicon glyphicon-print"></span> Print</a>
				        </div>
			      	</div>
		    	</div>
  			</div>
  		</div>
  		<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
  	
	</div><br><br><br>
			<script>
				function myFunction() {
					var input, filter, table, tr, td, i;
						input = document.getElementById("myInput");
					  	filter = input.value.toUpperCase();
					  	table = document.getElementById("myTable");
					  	tr = table.getElementsByTagName("tr");
					  	for (i = 0; i < tr.length; i++) {
					    	td = tr[i].getElementsByTagName("td")[0];
					    	if (td) {
					    		if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
					        		tr[i].style.display = "";
					      		}else {
					        		tr[i].style.display = "none";
					      		}
					    	}       
					  	}
					}
			</script>
			<script type="text/javascript">
			   	function printDiv(elementId) {
				    var a = document.getElementById('print-area-1').value;
				    var b = document.getElementById(elementId).innerHTML;
				    window.frames["print_frame"].document.title = document.title;
				    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
				    window.frames["print_frame"].window.focus();
				    window.frames["print_frame"].window.print();
				}
			</script>
	</body>
</html>