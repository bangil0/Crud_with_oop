<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon"  a href="img/icon.png" type="image/gif" sizes="16x16">
  <title>Crud With Oop</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-save"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Daftar Teman <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Heading -->
      <div class="sidebar-heading">
        Utama
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-id-card"></i>
          <span>Input</span></a>
      </li>



      <li class="nav-item active">
        <a class="nav-link" href="read.php">
          <i class="fas fa-fw fa-user-circle"></i>
          <span>Read</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">




          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-8">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h1 class="h3 mb-0 text-gray-800">Mengedit Data</h1>
                </div>
                <?php
                include 'model.php';
                //mengambil data
                $ambil = new database();
                $id = $_REQUEST['id'];
                $row = $ambil->edit($id);




                ?>
                <!-- Card Body -->
                <div class="card-body">

                  <form name='kirim'  method='post'>


                  <div class="row ml-5 mb-2">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                      <p><b>Nama Anda:</b></p>
                    <input class="form-control" type="text" name='nama' placeholder="Nama Anda..." value="<?php echo $row['nama']; ?>" required>
                    </div>

                    <div class="col-md-5 col-sm-12 col-xs-12">
                      <p><b>Alamat:</b></p>
                      <input class="form-control" type="text" name='alamat' placeholder="Alamat Anda..." value="<?php echo $row['alamat']; ?>" required>
                    </div>
                  </div>

                  <div class="row ml-5 mb-4">

                    <div class="col-md-5 col-sm-12 col-xs-12">
                      <p><b>Umur:</b></p>
                    <input class="form-control" type="number" name='umur' placeholder="Umur Anda..." value="<?php echo $row['umur']; ?>" required>
                    </div>

                  <div class="col-md-5 col-sm-12 col-xs-12 mt-4">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" name='ganti'>Kirim</button>


                  </div>


                  </div>




                  </form>

<?php
$ambil1 = new database;


if(isset($_POST['ganti'])){
  $data['id'] = $_GET['id'];
  $data['nama'] = $_POST['nama'];
  $data['alamat'] = $_POST['alamat'];
  $data['umur'] = $_POST['umur'];

   $update = $ambil1->update($data);


 if($update){

                                    echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                       echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
                                      echo "<p><center>Berhasil Mengupdate</center></p>";
                                       echo   "</div>";
                                       echo "</div>";
 }else{

                                    echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
                                       echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                                      echo "<p><center>Gagal Mengupdate</center></p>";
                                       echo   "</div>";
                                       echo "</div>";
 }

}

?>



                </div>

            </div>


          </div>



      </div>
      <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
