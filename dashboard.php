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
          <h1 class="page-header"><b>Chart Reservasi</b></h1>
        </div>
      </div>
      <div class="row">
        <canvas id="myChart" width="20" height="8"></canvas><br><br>
        <canvas id="myChart2" width="20" height="8"></canvas><br>
      </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Deluxe Room","Elite Room","King Room","Twin Room"],
                    datasets: [{
                            label: '# of Votes',
                            data: [4, 3, 3, 2],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
        <script>
            var ctx = document.getElementById("myChart2");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Deluxe Room","Elite Room","King Room","Twin Room"],
                    datasets: [{
                            label: '# of Votes',
                            data: [4, 3, 3, 2],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
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