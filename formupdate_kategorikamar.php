<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "fahmihotel";
$konek = new mysqli($host, $username, $password, $db_name);
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$kategori = mysqli_query($konek, " SELECT * FROM kategorikamar where idkategori='$_GET[id]'");
$row = mysqli_fetch_array($kategori);
?>
<html>
  <head>
    <title>PRPL Fahmi</title>
    <link rel="icon" type="img" href="Gambar/admin.png">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
  <body style="font-family: arial;">
    <div id="reservasi" style="background-color: rgba(189, 242, 249,0.8);"><br>
      <center><h1><span style="color: #173c77;"><u>RESERVASI</u></span></h1></center><hr><br>
      <center>
      <div class="form-reservasi">
        <div class="pemesanan-online"><br>
          <center><h3><span style="color: #173c77;"><p style="text-align: center;">UPDATE KATEGORI KAMAR</p></span></h3></center>
        </div>
        <form action = "update_kategorikamar.php?id=<?=$row['idkategori']?>" method="post">
          <table>
            <p>ID Kategori</p>
            <input type="text" readonly name="idkategori" value="<?php echo $row['idkategori'];?>">
            <p>Kategori</p>
            <input type="text" name="kategori" value="<?php echo $row['kategori'];?>">
            <p>Harga</p>
            <input type="text" name="harga" value="<?php echo $row['harga'];?>">
          </table><br>
            <input type="submit" value="Simpan" name="submit">
        </form>
      </div><br><br>
      </center><br>
    </div>
  </body>
</html>