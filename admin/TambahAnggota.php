<?php
    session_start();
    require "../config.php";
      $username =  $_SESSION['username'];
      $password =  $_SESSION['password'];

      $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

      $mysql= mysqli_query($conn,$sql);
      $data = mysqli_fetch_assoc($mysql);

            require "insert.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tambahkan Anggota</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">D<b></b>EL</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Web Charity </b>IA DEL</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="gambar/admin.JPG" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $data['nama']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="gambar/<?php echo $data['foto']; ?>" class="img-circle" alt="User Image">
                  <p><?php echo $data['nama']; ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="../login.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="index.php"> <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
          <li class="active treeview">
            <a href="TambahAngota.html">
              <i class="fa fa-edit"></i> <span>Tambahkan Anggota</span>
            </a>
          <li>
            <a href="DaftarAnggota.php">
              <i class="fa fa-table"></i> <span>Daftar Anggota</span>
            </a>
          </li>
          <li>
            <a href="catat_pembayaran.php">
              <i class="fa fa-calendar"></i> <span>Catat Pembayaran</span>
            </a>
          </li>

      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Tambahkan Anggota Baru
        </h1><hr>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Data</a></li>
          <li class="active">Tambahkan Anggota</li>
        </ol>
      </section>
      <?php if(isset($_POST['submit'])) :?>
        <?php if(insert($_POST) > 0) :?>
      <section>
      <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Akun baru berhasil dibuat. Anda klik link <i> <a href="DaftarAnggota.php?username='<?php $_POST['username']; ?>'">ini</i></a> untuk melihat data yang sudah di Tambahkan
              </div>
      </section>
      <?php endif; ?>
      <?php endif; ?>
      <!-- Main content -->
      <section class="content">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Masukkan Data</h3>
            </div>

        <!-- form start -->
        <form role="form" method="POST" action=""  enctype="multipart/form-data" >
        <div class="box-body">
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama </label>
                  <input type="text" name="nama" class="form-control" id="exampleInputName" placeholder="Masukkan nama">
                </div>
              </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pekerjaan</label>
                  <input type="text" name="tahun" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Pekerjaan">
                </div>
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username </label>
                  <input type="Usernmae" name="username" class="form-control" id="exampleInputUsername" placeholder="Masukkan Username">
                </div>
                </div>
                <div class="form-group">
                <div class="box-body">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password">
                </div>
                </div>
                <div class="form-group">
                <div class="box-body">

                  <label for="exampleInputFile">File input</label><h style="color:Tomato;">*</h><small> .jpg .jpeg .png</small>
                  <input type="file" name="foto" id="exampleInputFile">
                </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
       </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.18
      </div>
      <strong>Copyright &copy; web charity All rights reserved.
    </footer>
    <!-- Control Sidebar -->

    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    })
  </script>
</body>

</html>
