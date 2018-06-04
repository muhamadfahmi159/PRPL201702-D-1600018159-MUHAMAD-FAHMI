<html>
    <head><meta charset="utf-8">
        <title>PRPL Fahmi</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" type="img" href="Gambar/admin.png">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="font-family: arial; color: black; font-size: 24px;">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                        <a class="navbar-brand" href="#myPage"></a>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php">DASHBOARD</a></li>
                            <li><a href="#reservasi">RESERVASI</a></li>
                            <li><a href="#kamar">KAMAR</a></li>
                            <li><a href="#kategori">KATEGORI KAMAR</a></li>
                        </ul><br>
                    </div>
                </div>
            </nav>
            <br><br><br><br>
        <div id="reservasi" style="background-color: rgba(189, 242, 249,0.8);"><br>
                <center><h1><span style="color: #173c77;"><u>RESERVASI</u></span></h1></center><hr><br>
                <center>
                <div class="form-reservasi">
                    <div class="pemesanan-online"><br>
                        <center><h3><span style="color: #173c77;"><p style="text-align: center;">TAMBAH DATA</p></span></h3></center>
                    </div>
                    
                    <form action = "insert_reservasi.php" method="post" onSubmit="validateForm()">
                        <table>
                            <p>No.KTP *</p>
                            <input type="text" name="idcustomer" placeholder="Masukkan No.KTP" pattern="[0-9]+" required oninvalid="this.setCustomValidity('Just for number')" oninput="setCustomValidity('')"/>
                            <p>Nama Lengkap *</p>
                            <input type="text" name="namacustomer" placeholder="Masukkan Nama Lengkap" pattern="[a-zA-Z( )]+" required oninvalid="this.setCustomValidity('Just for word')" oninput="setCustomValidity('')" />
                            <p>Check-In *</p>
                            <input type="text" id="checkin" name="cin" placeholder="Pilih Tanggal Check-In" required>
                            <p>Check-Out *</p>
                            <input type="text" id="checkout" name="cout" placeholder="Pilih Tanggal Check-Out" required>
                            <p>Pilih Kamar *</p>
                            <select name="namakamar" required>
                                <?php
                                    $host = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $idb_name = "fahmihotel";
                                    $konek = new mysqli($host, $username, $password, $idb_name);
                                    //cek koneksi
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
                        <input type="submit" value="Check Availibility" name="submit">
                    </form>
                </div><br><br>
                </center>
                <br>
            </div><br>
        <div id="kamar" style="background-color: rgba(189, 242, 249,0.8);"><br>
            <center><h1><span style="color: #173c77;"><u>DATA KAMAR</u></span></h1></center><hr><br><br>
            <center>
                <div class="form-reservasi">
                    <div class="pemesanan-online"><br>
                        <center><h3><span style="color: #173c77;"><p style="text-align: center;">Isi Data Kamar</p></span></h3></center>
                    </div>
                    <form action = "simpan_kamar.php" method="post">
                        <table>
                            <p>ID Kamar</p>
                            <input type="text" name="idkamar">
                            <p>ID Kategori</p>
                            <input type="text" name="idkategori">
                            <p>Nama Kamar</p>
                            <input type="text" name="namakamar">
                            <p>Lokasi Lantai</p>
                            <select name="lokasilantai">
                                <option value="1">Lantai 1</option>
                                <option value="2">Lantai 2</option>
                                <option value="3">Lantai 3</option>
                                <option value="4">Lantai 4</option>
                            </select>
                        </table><br>
                        <input type="submit" value="Simpan" name="submit">
                    </form>
                </div><br><br>
            </center> <br><br>                      
        </div><br>
        <div id="kategori" style="background-color: rgba(189, 242, 249,0.8);"><br>
            <center><h1><span style="color: #173c77;"><u>DATA KATEGORI KAMAR</u></span></h1></center><hr><br><br>
            <center>
                <div class="form-reservasi">
                    <div class="pemesanan-online"><br>
                        <center><h3><span style="color: #173c77;"><p style="text-align: center;">Isi Data Kategori Kamar</p></span></h3></center>
                    </div>
                    <form action = "simpan_kategori.php" method="post">
                        <table>
                            <p>ID Kategori</p>
                            <input type="text" name="idkategori">
                            <p>Kategori</p>
                            <input type="text" name="kategori">
                            <p>Harga</p>
                            <input type="text" name="harga">
                        </table><br>
                        <input type="submit" value="Simpan" name="submit">
                    </form>
                </div><br><br>
            </center> <br><br>                      
        </div><br>
        <div id="inap" style="background-color: rgba(189, 242, 249,0.8);"><br>
            <center><h1><span style="color: #173c77;"><u>DATA INAP</u></span></h1></center><hr><br><br>
            <center>
                <div class="form-reservasi">
                    <div class="pemesanan-online"><br>
                        <center><h3><span style="color: #173c77;"><p style="text-align: center;">Isi Data Inap</p></span></h3></center>
                    </div>
                    <form action = "simpan_inap.php" method="post">
                        <table>
                            <p>No.Ktp</p>
                            <input type="text" name="idcustomer">
                            <p>ID Kamar</p>
                            <input type="text" name="idkamar">
                            <p>Durasi Hari</p>
                            <select name="jmlhari">
                                <option value="1">1 Malam</option>
                                <option value="2">2 Malam</option>
                                <option value="3">3 Malam</option>
                                <option value="4">4 Malam</option>
                                <option value="5">5 Malam</option>
                                <option value="6">6 Malam</option>
                                <option value="7">7 Malam</option>
                                <option value="8">8 Malam</option>
                                <option value="9">9 Malam</option>
                            </select>
                            <p>Harga</p>
                            <input type="text" name="harga">
                        </table><br>
                        <input type="submit" value="Simpan" name="submit">
                    </form>
                </div><br><br>
            </center> <br><br>                      
        </div><br>
            
        <footer class="text-center">
            <p style="color: gold; text-align: center; font-size: 18px;">
            &copy;<?php echo date(' Y ');?> Muhamad Fahmi. 1600018159. Teknik Informatika.-Universitas Ahmad Dahlan-</p>
        </footer>
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
        } );
    </script>
    <script type="text/javascript">
        function validasi(form){
            if(form.idcustomer.value == ""){
                alert("Input No.KTP Anda!");
                form.idcustomer.focus();
                return(false);
            }
            return(true);
        }
    </script>
</body>
</html>