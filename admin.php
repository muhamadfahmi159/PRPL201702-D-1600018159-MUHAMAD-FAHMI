<?php
  session_start();
  if(!isset($_SESSION['username'])) {
    header("Location: admin.php?access_denied");
  }
?>
<html>
  <head><meta charset="utf-8">
    <title>PRPL Fahmi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="img" href="Gambar/admin.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
      .row.content {height: 1500px}
      .sidenav {
        background-color: #f1f1f1;
        height: 100%;
      }
      #myInput {
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
    </style>
</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html">Fahmi Hotel</a>
      </div>
      <ul class="nav navbar-top-links navbar-right">
        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
      </ul>
      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li><a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-table fa-fw"></i> Tampil Data<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li><a href="admin.php">Data Reservasi</a></li>
                <li><a href="tampil_data.php">Data Kamar</a></li>
                <li><a href="tampil_data.php">Data Kategori Kamar</a></li>
                <li><a href="tampil_data.php">Data Contact</a></li>
              </ul>
            </li>
            <li><a href="tambah_data.php"><i class="fa fa-edit fa-fw"></i>Tambah data</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><b>Laporan Reservasi</b></h1>
        </div>
      </div>
      <div class="row">
        <h3>Search : </h3><input type="text" onkeyup="search('reservasi')" id="reservasi" placeholder="Search Data Reservasi..." class="css-input" style="width:500px;height: 40px;"/>
        <script>
          function search(kunci){
            var value = $("#"+kunci).val().toLowerCase();
            $("#data tr").filter(function(){
              $(this).toggle($(this).text().toLowerCase().indexOf(value)> -1)
            });
          }
        </script>
        <table>
          <tr>
            <td><h3>Filter : </h3></td>
            <td>
              <select id="kamar" onchange="search('kamar')" style="width:180px;height: 40px;">
                <option value="">----Tipe Kamar----</option>
                <option value="Deluxe">Deluxe Room</option>
                <option value="Elite">Elite Room</option>
                <option value="King">King Room</option>
                <option value="Twin">Twin Room</option>
              </select>
            </td>
          </tr>
        </table><br>
      <table id="myTable" border='4' align="center">
        <thead>
        <tr>
          <th style='width:5%;'>No.</th>
          <th style='width:10%;'>Id Customer</th>
          <th style='width:15%;'>Nama Customer</th>
          <th style='width:10%;'>Check-In</th>
          <th style='width:10%;'>Check-Out</th>
          <th style='width:10%;'>Tipe Kamar</th>
          <th style='width:10%;'>Status Kamar</th>
          <th style='width:10%;'>Total Biaya</th>
          <th style='width:10%; text-align: center;'>Aksi</th>
        </tr></thead>
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
          $sql = "SELECT * from reservasi inner join kategorikamar on idkategori=namakamar order by cout asc";
          $data = $konek->query($sql);
          echo "<tbody id='data'> ";
          if ($data->num_rows > 0){
              $no = 1;
              while ($row = $data->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row['idcustomer']."</td>";
                echo "<td>".$row['namacustomer']."</td>";
                echo "<td>".$row['cin']."</td>";
                echo "<td>".$row['cout']."</td>";
                echo "<td>".$row['kategori']." Room</td>";
                echo "<td>Tersedia</td>";//status kamar
                echo "<td>Rp".$row['total']."</td>";//total biaya
                echo "<td align='center'><a href='formupdate_reservasi.php?id=$row[idcustomer]' class='btn btn-info' role='button'>Edit</a>
                    <a href='delete_reservasi.php?id=$row[idcustomer]' class='btn btn-info' role='button'>Delete</a></td>";
                echo "</tr>";
              }
              echo "</tbody>";
          }else{
            echo "Data Kosong!";
          }
          $konek->close();
        ?>
      </table>

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
        <div class="row">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        <?php
          $host = "localhost";
          $username = "root";
          $password = "";
          $idb_name = "fahmihotel";
          $konek = new mysqli($host, $username, $password, $idb_name);
          if($konek->connect_error){
            die("Koneksi Gagal Karena : ". $konek->connect_error);
          }
          $reservasi = mysqli_query($konek, "SELECT * from reservasi inner join kategorikamar on idkategori=namakamar order by idcustomer asc");
          $biaya = mysqli_query($konek, "SELECT * FROM reservasi inner join kategorikamar on idkategori=namakamar order by idcustomer asc");
        ?>
      </div>
      <footer class="container-fluid text-center">
        <p style="text-align: center; font-size: 16px;">
        &copy;<?php //echo date(' Y ');?> Muhamad Fahmi. 1600018159. Teknik Informatika.-Universitas Ahmad Dahlan-</p>
      </footer>
    </div>
  </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
</body>
</html>
