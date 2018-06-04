<!DOCTYPE html>
<html>
<head>
	<title>Data Pemesan Beserta Pesanan</title>
	<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>
<a href="home.php">Cancel </a>
<h2>Masukkan Data Pememsan Dan Pesanan</h2>
<div class="container">
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>
	function hitung2() {
	var a = $(".a2").val();
	var b = $(".b2").val();
	var c = $(".c2").val();
	var d = $(".d2").val();
	var e = $(".e2").val();
	var f = $(".f2").val();
	g = (a * b)+(c * d)+(e * f); 
	$(".g2").val(g);
	}
	function isNumberKey(evt){
	 var charCode = (evt.which) ? evt.which : event.keyCode;
	 if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
	 return false;
	 return true;
	}
  </script>
  <form action="simpan_pesanan.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">ID Customer : </label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="idcustomer" pattern="^\d{3}$" title="diisi angka" required />
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Nama Makanan: </label>
      </div>
      <div class="col-75">
		<br>
        <input type="radio" id="lname" name="namamakanan" value="CHIKEN STEAK | Rp. 23.000,00"/>CHIKEN STEAK | Rp. 23.000,00
		<br>  
		<br>
		<input type="radio" id="lname" name="namamakanan" value="DOUBLE CHIKEN STEAK | Rp. 30.000,00"/>DOUBLE CHIKEN STEAK | Rp. 30.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="CHIKEN STEAK WITH HONEY SAUCE | Rp. 26.000,00"/>CHIKEN STEAK WITH HONEY SAUCE | Rp. 26.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="DOUBLE CHIKEN STEAK WITH HONEY SAUCE| Rp. 33.000,00"/>DOUBLE CHIKEN STEAK WITH HONEY SAUCE | Rp. 33.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="CHIKEN STEAK WITH CHEESE SAUCE| Rp. 27.000,00"/>CHIKEN STEAK WITH CHEESE SAUCE| Rp. 27.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="DOUBLE CHIKEN STEAK WITH CHEESE SAUCE| Rp. 34.000,00"/>DOUBLE CHIKEN STEAK WITH CHEESE SAUCE| Rp. 34.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="CHIKEN STEAK WITH SPACY SAUCE| Rp. 26.000,00"/>CHIKEN STEAK WITH SPACY SAUCE | Rp. 26.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="DOUBLE CHIKEN STEAK WITH SPACY SAUCE| Rp. 33.000,00"/>DOUBLE CHIKEN STEAK WITH SPACY SAUCE| Rp. 33.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="BEEF STEAK | Rp. 33.000,00"/>BEEF STEAK | Rp. 33.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="DOUBLE BEEF STEAK | Rp. 40.000,00"/>DOUBLE BEEF STEAK | Rp. 40.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="BEEF STEAK WITH HONEY SAUCE| Rp. 36.000,00"/>BEEF STEAK WITH HONEY SAUCE | Rp. 36.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="DOUBLE BEEF STEAK WITH HONEY SAUCE| Rp. 43.000,00"/>DOUBLE BEEF STEAK WITH HONEY SAUCE | Rp. 43.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="BEEF STEAK WITH CHEESE SAUCE| Rp. 37.000,00"/>BEEF STEAK WITH CHEESE SAUCE| Rp. 37.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="DOUBLE BEEF STEAK WITH CHEESE SAUCE| Rp. 44.000,00"/>DOUBLE BEEF STEAK WITH CHEESE SAUCE| Rp. 44.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="BEEF STEAK WITH SPACY SAUCE| Rp. 36.000,00"/>BEEF STEAK WITH SPACY SAUCE| Rp. 36.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="DOUBLE BEEF STEAK WITH SPACY SAUCE| Rp. 43.000,00"/>DOUBLE BEEF STEAK WITH SPACY SAUCE| Rp. 43.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="SIRLOIN STEAK | Rp. 33.000,00"/>SIRLOIN STEAK | Rp. 38.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="DOUBLE SIRLOIN STEAK | Rp. 40.000,00"/>DOUBLE SIRLOIN STEAK | Rp. 45.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="SIRLOIN STEAK WITH HONEY SAUCE| Rp. 36.000,00"/>SIRLOIN STEAK WITH HONEY SAUCE | Rp. 41.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="DOUBLE SIRLOIN STEAK WITH HONEY SAUCE| Rp. 43.000,00"/>DOUBLE SIRLOIN STEAK WITH HONEY SAUCE | Rp. 48.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="SIRLOIN STEAK WITH CHEESE SAUCE| Rp. 37.000,00"/>SIRLOIN STEAK WITH CHEESE SAUCE| Rp. 42.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="DOUBLE SIRLOIN STEAK WITH CHEESE SAUCE| Rp. 44.000,00"/>DOUBLE SIRLOIN STEAK WITH CHEESE SAUCE| Rp. 49.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="SIRLOIN STEAK WITH SPACY SAUCE| Rp. 36.000,00"/>SIRLOIN STEAK WITH SPACY SAUCE| Rp. 41.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="DOUBLE SIRLOIN STEAK WITH SPACY SAUCE| Rp. 43.000,00"/>DOUBLE SIRLOIN STEAK WITH SPACY SAUCE| Rp. 48.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="SPAGETTI BOLLOGNESE SAUCE | Rp. 33.000,00"/>SPAGETTI BOLLOGNESE SAUCE | Rp. 35.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="SPAGETTI CHEESE SAUCE | Rp. 40.000,00"/>SPAGETTI CHEESE SAUCE | Rp. 35.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="FETTUCINI BOLLOGNESE SAUCE | Rp. 33.000,00"/>FETTUCINI BOLLOGNESE SAUCE | Rp. 37.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="FETTUCINI CHEESE SAUCE | Rp. 40.000,00"/>FETTUCINI CHEESE SAUCE | Rp. 37.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="FUSILI BOLLOGNESE SAUCE | Rp. 33.000,00"/>FUSILI BOLLOGNESE SAUCE | Rp. 35.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="FUSILI CHEESE SAUCE | Rp. 40.000,00"/>FUSILI CHEESE SAUCE | Rp. 35.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="LASAGNA | Rp. 40.000,00"/>LASAGNA | Rp. 40.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namamakanan" value="TIDAK MEMBELI MAKANAN"/>TIDAK MEMBELI MAKANAN
		<br>
      </div>
    </div>
	<div id="inputa">
	  <div class="col-25">
        <label for="fname">Harga : </label>
      </div>
	  <div class="col-75">
		<input type="text" name="hargamakanan" id="harga" class="a2" onkeyup="hitung2();" required="" size="40" onkeypress="return isNumberKey(event)" >
	  </div>
	</div>
	<div id="inputa">
	  <div class="col-25">
        <label for="fname">Jumlah: </label>
      </div>
	  <div class="col-75">
		<input type="text" name="jumlahmakanan" id="jumlah" class="b2" onkeyup="hitung2();" required="" size="40" onkeypress="return isNumberKey(event)" >
	  </div>
	</div>
	<div class="row">
      <div class="col-25">
        <label for="lname">Nama Snack: </label>
      </div>
      <div class="col-75">
		<br>
        <input type="radio" id="lname" name="namasnack" value="KENTANG GORENG SMALL | Rp. 15.000,00"/>KENTANG GORENG SMALL | Rp. 15.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="KENTANG GORENG LARGE | Rp. 18.000,00"/>KENTANG GORENG LARGE | Rp. 18.000,00
        <br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="KENTANG GORENG SPACY POWDER SMALL | Rp. 15.000,00"/>KENTANG GORENG SPACY POWDER SMALL | Rp. 15.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="KENTANG GORENG SPACY POWDER LARGE | Rp. 18.000,00"/>KENTANG GORENG SPACY POWDER LARGE | Rp. 18.000,00
        <br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="KENTANG GORENG CHEESE SAUCE SMALL | Rp. 17.000,00"/>KENTANG GORENG CHEESE SAUCE SMALL | Rp. 17.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="KENTANG GORENG CHHESE SAUCE LARGE | Rp. 21.000,00"/>KENTANG GORENG CHEESE SAUCE LARGE | Rp. 21.000,00
        <br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="KENTANG GORENG WITH MOZARELLA SMALL | Rp. 18.000,00"/>KENTANG GORENG WITH MOZARELLA SMALL | Rp. 18.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="KENTANG GORENG WITH MOZARELLA LARGE | Rp. 22.000,00"/>KENTANG GORENG WITH MOZARELLA LARGE | Rp. 22.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="ONION RING SMALL | Rp. 15.000,00"/>ONION RING SMALL | Rp. 15.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="ONION RING LARGE | Rp. 18.000,00"/>ONION RING LARGE | Rp. 18.000,00
        <br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="ONION RING SPACY POWDER SMALL | Rp. 15.000,00"/>ONION RING SPACY POWDER SMALL | Rp. 15.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="ONION RING SPACY POWDER LARGE | Rp. 18.000,00"/>ONION RING SPACY POWDER LARGE | Rp. 18.000,00
        <br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="ONION RING CHEESE SAUCE SMALL | Rp. 17.000,00"/>ONION RING CHEESE SAUCE SMALL | Rp. 17.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="ONION RING CHHESE SAUCE LARGE | Rp. 21.000,00"/>ONION RING CHEESE SAUCE LARGE | Rp. 21.000,00
        <br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="ONION RING WITH MOZARELLA SMALL | Rp. 18.000,00"/>ONION RING WITH MOZARELLA SMALL | Rp. 18.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="ONION RING WITH MOZARELLA LARGE | Rp. 22.000,00"/>ONION RING WITH MOZARELLA LARGE | Rp. 22.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="SPACY CHIKEN WINGS SMALL | Rp. 20.000,00"/>SPACY CHIKEN WINGS SMALL | Rp. 20.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="SPACY CHIKEN WINGS LARGE | Rp. 28.000,00"/>SPACY CHIKEN WINGS LARGE | Rp. 28.000,00
        <br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="CHEESE SPACY CIKEN WINGS SMALL | Rp. 22.000,00"/>CHEESE SPACY CIKEN WINGS SMALL | Rp. 22.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="CHEESE SPACY CIKEN WINGS LARGE | Rp. 30.000,00"/>CHEESE SPACY CIKEN WINGS LARGE | Rp. 30.000,00
        <br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="MOZARELLA SPACY CHIKEN WINGS SMALL | Rp. 23.000,00"/>MOZARELLA SPACY CHIKEN WINGS SMALL | Rp. 23.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="MOZARELLA SPACY CHIKEN WINGS LARGE | Rp. 31.000,00"/>MOZARELLA SPACY CHIKEN WINGS LARGE | Rp. 31.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="HAMBURGER CHIKEN | Rp. 20.000,00"/>HAMBURGER CHIKEN | Rp. 20.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="HAMBURGER CHIKEN WITH CHEESE | Rp. 23.000,00"/>HAMBURGER CHIKEN WITH CHEESE | Rp. 23.000,00
        <br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="HAMBURGER CHIKEN WITH CHEESE + ONION RING | Rp. 25.000,00"/>HAMBURGER CHIKEN WITH CHEESE + ONION RING | Rp. 25.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="HAMBURGER BEEF | Rp. 25.000,00"/>HAMBURGER BEEF | Rp. 25.000,00
        <br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="HAMBURGER BEEF WITH CHEESE | Rp. 28.000,00"/>HAMBURGER BEEF WITH CHEESE | Rp. 28.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="HAMBURGER BEEF WITH CHEESE + ONION RING | Rp. 30.000,00"/>HAMBURGER BEEF WITH CHEESE + ONION RING | Rp. 30.000,00
        <br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="FISH AND CHIPS | Rp. 25.000,00"/>FISH AND CHIPS | Rp. 25.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namasnack" value="TIDAK MEMBELI SNACK"/>TIDAK MEMBELI SNACK
		<br>
      </div>
    </div>
	<div id="inputa">
	  <div class="col-25">
        <label for="fname">Harga : </label>
      </div>
	  <div class="col-75">
		<input type="text" name="hargasnack" id="harga" class="c2" onkeyup="hitung2();" required="" size="40" onkeypress="return isNumberKey(event)" >
	  </div>
	</div>
    <div class="inputa">
      <div class="col-25">
        <label for="fname">Jumlah Snack : </label>
      </div>
      <div class="col-75">
        <input type="text" name="jumlahsnack" id="jumlah" class="d2" onkeyup="hitung2();" required="" size="40" onkeypress="return isNumberKey(event)" >
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="lname">Nama Minuman: </label>
      </div>
      <div class="col-75">
		<br>
        <input type="radio" id="lname" name="namaminuman" value="ICE TEA | Rp. 10.000,00"/>ICE TEA | Rp. 10.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="HOT TEA | Rp. 10.000,00"/>HOT TEA | Rp. 10.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="ICE ORANGE | Rp. 13.000,00"/>ICE ORANGE | Rp. 13.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="HOT ORANGE | Rp. 13.000,00"/>HOT ORANGE | Rp. 13.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="ICE CHOCOLATE | Rp. 18.000,00"/>ICE CHOCOLATE | Rp. 18.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="HOT CHOCOLATE | Rp. 18.000,00"/>HOT CHOCOLATE | Rp. 18.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="ICE STRAWBERRY CHOCOLATE | Rp. 18.000,00"/>ICE STRAWBERRY CHOCOLATE | Rp. 18.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="HOT STRAWBERRY CHOCOLATE | Rp. 18.000,00"/>HOT STRAWBERRY CHOCOLATE | Rp. 18.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="ICE CAFFE LATTE | Rp. 20.000,00"/>ICE CAFFE LATTE | Rp. 20.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="HOT CAFFE LATTE | Rp. 20.000,00"/>HOT CAFFE LATTE | Rp. 20.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="ICE VANILA LATTE | Rp. 22.000,00"/>ICE VANILA LATTE | Rp. 22.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="HOT VANILA LATTE | Rp. 22.000,00"/>HOT VANILA LATTE | Rp. 22.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="ICE MATCHA LATTE | Rp. 22.000,00"/>ICE MATCHA LATTE | Rp. 22.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="HOT MATCHA LATTE | Rp. 22.000,00"/>HOT MATCHA LATTE | Rp. 22.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="ICE MOCHACINNO | Rp. 18.000,00"/>ICE MOCHACINNO | Rp. 18.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="HOT MOCHACINNO | Rp. 18.000,00"/>HOT MOCHACINNO | Rp. 18.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="ICE CHAPUCINNO | Rp. 18.000,00"/>ICE CHAPUCINNO | Rp. 18.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="HOT CHAPUCINNO | Rp. 18.000,00"/>HOT CHAPUCINNO | Rp. 18.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="ICE BLEND COFFE | Rp. 19.000,00"/>ICE BLEND COFFE | Rp. 19.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="ICE BLEND COOKIES AND CREAM | Rp. 19.000,00"/>ICE BLEND COOKIES AND CREAM | Rp. 19.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="ICE BLEND CHOCOLATE | Rp. 19.000,00"/>ICE BLEND CHOCOLATE | Rp. 19.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="MILKSHAKE STRAWBERRY | Rp. 20.000,00"/>MILKSHAKE STRAWBERRY | Rp. 20.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="MILKSHAKE CHOCOLATE | Rp. 20.000,00"/>MILKSHAKE CHOCOLATE | Rp. 20.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="MILKSHAKE BANANA | Rp. 20.000,00"/>MILKSHAKE BANANA | Rp. 20.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="AVOCADO JUICE | Rp. 15.000,00"/>AVOCADO JUICE | Rp. 15.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="STRAWBERRY JUICE | Rp. 15.000,00"/>STRAWBERRY JUICE | Rp. 15.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="APPLE JUICE | Rp. 15.000,00"/>APPLE JUICE | Rp. 15.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="BANANA JUICE | Rp. 15.000,00"/>BANANA JUICE | Rp. 15.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="MANGGO JUICE | Rp. 15.000,00"/>MANGGO JUICE | Rp. 15.000,00
		<br>
		<br>
		<input type="radio" id="lname" name="namaminuman" value="TIDAK MEMBELI MINUMAN"/>TIDAK MEMBELI MINUMAN
      </div>
    </div>
	<div id="inputa">
	  <div class="col-25">
        <label for="fname">Harga : </label>
      </div>
	  <div class="col-75">
		<input type="text" name="hargaminuman" id="harga" class="e2" onkeyup="hitung2();" required="" size="40" onkeypress="return isNumberKey(event)" >
	  </div>
	</div>
    <div class="inputa">
      <div class="col-25">
        <label for="fname">Jumlah Minuman : </label>
      </div>
      <div class="col-75">
        <input type="text" name="jumlahminuman" id="jumlah" class="f2" onkeyup="hitung2();" required="" size="40" onkeypress="return isNumberKey(event)" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Email : </label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="untuk contoh nando@gmail.com" required />
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Alamat : </label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="alamat" style="height:150px" required></textarea>
      </div>
    </div>
	<div class="inputa">
      <div class="col-25">
        <label for="fname">Total Harga : </label>
      </div>
      <div class="col-75">
        <input type="text" name="total" id="total" class="g2" readonly size="40">
      </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</body>
</html>