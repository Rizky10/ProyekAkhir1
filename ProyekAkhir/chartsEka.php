<?php include("Hubung.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body id="page-top">
    <header class="header-area" id="top" style="background-color: black">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand da" href="HOME_PA.html" ><p><h5 style="color: white;">D3 Teknik Komputer</h5></p></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                             <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a href="#" class="nav-link">
                                        <span class="glyphicon glyphicon-home"></span>
                                    </a>

                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="HOME_PA.html">Berita &amp; Acara </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">Akademik</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="DosenAwal_PA.html">Dosen</a>
                                        <a class="dropdown-item" href="DosenAwal_PA.html">Staff</a>
                                        <a class="dropdown-item" href="AKREDITASI_PA.html">Akreditasi</a>
                                        <a class="dropdown-item" href="KURIKULUM_PA.html">Kurikulum</a>
                                        <a class="dropdown-item" href="KONTAK_PA.php">Contact</a>
                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="ALUMNI_PA.html" style="color: white">Alumni</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white" >Siapa Kami</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="sambutan.html">Sambutan</a>
                                        <a class="dropdown-item" href="sejarah.html">Sejarah</a>
                                        <a class="dropdown-item" href="visimisi.html">Visi Misi</a>
                                        <a class="dropdown-item" href="HIMPUNAN_PA.html">Himpunan Mahasiswa</a>
                                        <a class="dropdown-item" href="prestasi_pa.html">Prestasi Mahasiswa</a>
                                        <a class="dropdown-item" href="FASILITAS_PA.html">Fasilitas</a>
                                    </div>
                                </li>
                            </ul>
                            <!-- Search Form  -->
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

  <div class="col-lg-8"></div>

  <br><br><br>
  <div id="wrapper">


    <!-- Sidebar -->
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->

        <div class="text-center">
          <div class=" ">
            <h2>Data Dosen</h2>
              <div class="" style="width:100%;">

                <div class="w3-card-4 " style="width:100%;background-color: #f2f2f2; width: 50%;position: relative;left: 25%">
                  
                  <table class="w3-table w3-striped w3-white">
                              
                              <tr>
                                <td rowspan="10" width="150"><img style="width: 100%;" src="dosen/eka.jpg"></td>
                                
                                <td>.  Nama  </td>
                                <td><i>Eka Stephani Sinambela, SST., M.Sc</i></td>
                              </tr>
                              <tr>
                                <td>Jenis Kelamin</td>
                                <td><i>Perempuan</i></td>
                              </tr>
                              <tr>
                                <td>Pendidikan Tertinggi</td>
                                <td><i>S2</i></td>
                              </tr>
                              <tr>
                                <td>NIDN</td>
                                <td><i>0117078706</i></td>
                              </tr>
                              <tr>
                                <td>Program Studi</td>
                                <td><i>DIII-Teknik Komputer</i></td>
                              </tr>
                              <tr>
                                <td>Jabatan Akademik</td>
                                <td><i>Tenaga Pengajar</i></td>
                              </tr>
                              <tr>
                                <td>Golongan Kepangkatan</td>
                                <td><i>-</i></td>
                              </tr>
                              <tr>
                                <td>Aktif Start</td>
                                <td><i>2008-09-15</i></td>
                              </tr>
                              <tr>
                                <td>Aktif End</td>
                                <td><i>-</i></td>
                              </tr>

                            </table>
                            <br>  
                      
                </div>

              </div>
          </div>
          

        </div>    
        <br>  <br>  

        <!-- Area Chart Example-->
        <div class="card mb-3 col-lg-12">
          <div></div>
          <div class="card-header text-center">
            <i class="fas fa-chart-area"></i>
            Penelitian Dosen</div>
          <div class="card-body">
            <div id="myAreaChart" width="100%" height="30"></div>
          </div>
          <div class="text-center text-muted">TAHUN</div>
          <br>  
        </div>

        
        <p class="small text-center text-muted my-5">
          <em></em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      

    </div>
    <!-- /.content-wrapper -->

  </div>
  <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tahun</th>
                    
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tahun</th>
                    
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                    settype($var,'integer');
                    $var = 1;
                    $sql = "SELECT * FROM eka";
                    $query = mysqli_query($mysqli , $sql);
                    $hitung=mysqli_num_rows($query);
                    if($hitung>0){
                        while($komen = mysqli_fetch_array($query)){
                          echo "<tr>";
                          echo "<td>".$var."</td>";
                          echo "<td>".$komen['judul']."</td>";
                          echo "<td>".$komen['tahun']."</td>";
                          echo "</tr>";
                          $var++;
                        }
                    }
                    else{
                       while($komen = mysqli_fetch_array($query)){
                          echo "<tr>";
                          echo "<td>".$var."</td>";
                          echo "<td>"."Tidak ada Penelitian"."</td>";
                          echo "<td>"."Tidak Ada Penelitian"."</td>";
                          echo "</tr>";
                          $var++;
                        }
                    }
               
              ?>

                </tbody>
              </table>
            </div>
          </div>
          
        </div>

  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  


  <!-- Logout Modal-->
  <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                       <h3 style="color: white"> D3 Teknik  Komputer</h3><hr style="background-color: white"><h5 style="color: white"> Institut Teknologi Del</h5>
                        <div class="copywrite-text mt-30">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="www.del.ac.id">Institut Teknologi Del</a></li>
                            <li><a href="del.or.id">Yayasan Del</a></li>
                            <li><a href="MAP_PA.html">Maps</a></li>
                            <li><a href="visimisi.html">Visi Misi</a></li>

                            <li><a href="sambutan.html">Sambutan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <p>Institut Teknologi Del
                        <p>Jl. Sisingamangaraja, Sitoluama
                        <p>Laguboti, Toba Samosir
                        <p>Sumatera Utara, Indonesia
                        <p>Kode Pos: 22381
                        <p>Telp: +62 632 331234
                        <p>Fax: +62 632 331116   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
   

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/active.js"></script>


  <script type="text/javascript">
    
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tahun', 'Penelitian'],
          <?php
            if ($hitung > 0 ) {
              $sql = "SELECT * FROM eka";
              $query = mysqli_query($mysqli , $sql);
              $ok = 10;
              $ok12 = 2007;
              $hitung=mysqli_num_rows($query);
              while($ok12 <2020){
                        $var1=mysqli_query($mysqli,"SELECT COUNT(*) as b FROM eka WHERE tahun = {$ok12} ");
                        $hitung1=$row=mysqli_fetch_assoc($var1);
                          echo "['".$ok12."', ".$hitung1['b']."],";
                          $ok12++;
                        }
                       

            }
          ?>
        ]);

        var options = {
          title: 'Penelitian Eka Stephani Sinambela, SST., M.Sc',
          hAxis: {title: 'Tahun',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('myAreaChart'));
        chart.draw(data, options);
      }
  
  </script>


</body>

</html>
