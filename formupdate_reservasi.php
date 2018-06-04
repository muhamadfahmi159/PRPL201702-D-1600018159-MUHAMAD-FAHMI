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

$customer = mysqli_query($konek, " SELECT * FROM reservasi where idcustomer='$_GET[id]'");
$row = mysqli_fetch_array($customer);
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
          <center><h3><span style="color: #173c77;"><p style="text-align: center;">UPDATE RESERVASI</p></span></h3></center>
        </div>
        <form action = "update_reservasi.php?id=<?=$row['idcustomer']?>" method="post" onSubmit="validateForm()">
          <table>
            <p>No.KTP *</p>
            <input type="text" name="idcustomer" disabled  value="<?php echo $row['idcustomer'];?>"/>
            <p>Nama Lengkap *</p>
            <input type="text" name="namacustomer" placeholder="Masukkan Nama Lengkap" pattern="[a-zA-Z( )]+" required oninvalid="this.setCustomValidity('Just for word')" oninput="setCustomValidity('')" value="<?php echo $row['namacustomer'];?>"/>
            <p>Check-In *</p>
            <input type="text" id="checkin" name="cin" placeholder="Pilih Tanggal Check-In" required value="<?php echo $row['cin'];?>">
            <p>Check-Out *</p>
            <input type="text" id="checkout" name="cout" placeholder="Pilih Tanggal Check-Out" required value="<?php echo $row['cout'];?>">
            <p>Pilih Kamar *</p>
            <select name="namakamar" required>
              <?php
                $host = "localhost";
                $username = "root";
                $password = "";
                  $idb_name = "fahmihotel";
                $konek = new mysqli($host, $username, $password, $idb_name);
                if($konek->connect_error){
                  die("Koneksi Gagal Karena : ". $konek->connect_error);
                  }                 
                $sql = mysqli_query($konek,"SELECT * FROM kategorikamar");
                while ($hargakmr = mysqli_fetch_assoc($sql)) {
                  echo "<option value='$hargakmr[idkategori]'>$hargakmr[kategori] Room - Rp$hargakmr[harga]</option>";
                }
                $konek->close();
              ?>
            </select>
          </table><br>
          <input type="submit" value="Update" name="submit">
        </form>
      </div><br><br>
      </center><br>
    </div>
  <script>
    $( function() {
      from = $( "#checkin" ).datepicker({
            defaultDate: "+1w",
            dateFormat: "yy/mm/dd",
            changeMonth: true,
            changeYear: false,
            numberOfMonths: 1
        })
      .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
      }),
      to = $( "#checkout" ).datepicker({
        defaultDate: "+1w",
        dateFormat: "yy/mm/dd",
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
      function getDate( element ) {
        var date;
        try {
          date = $.datepicker.parseDate( dateFormat, element.value );
        }catch( error ) {
          date = null;
        }
          return date;
        }
    });
  </script>
  </body>
</html>