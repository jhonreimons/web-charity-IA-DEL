<?php
        session_start();
        require "../config.php";
        
        
        // Menampung data username dan password dari session  
        $username =  $_SESSION['username'];
        $password =  $_SESSION['password'];
        
        // Query untuk menampilkan data admin untuk mengisi bagian profile
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $mysqli= mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($mysqli);
        
        
        
        ?>
<?php
    // menampilkan data donatur
    $catat = "SELECT * FROM donatur";
    $mysql = mysqli_query($conn,$catat);

    // Total Donasi

    $result = mysqli_query($conn,"SELECT SUM(jumlah_donasi) AS total FROM history");
    $total = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pencatatan</title>
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
                <img src="gambar/<?php echo $data['foto']?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $data['nama']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="gambar/admin.JPG" class="img-circle" alt="User Image">
                  <p><?php echo $data['nama']; ?> </p>
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
          <li>
            <a href="TambahAnggota.php">
              <i class="fa fa-edit"></i> <span>Tambahkan Anggota</span>
            </a>
          <li>
            <a href="DaftarAnggota.php">
              <i class="fa fa-table"></i> <span>Daftar Anggota</span>
            </a>
          </li>
          <li class="active treeview">
            <a href="">
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
        <h1> Data Tables <small>Catat</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Catat</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Total Donasi</th>
                <th>Catat Donasi</th>
              </tr>
            </thead>
            <tbody>
              <?php while($row = mysqli_fetch_assoc($mysql)):?>
              <?php
                  $id =  $row['id_anggota'];
                  $sql = "SELECT SUM(jumlah_donasi) as total FROM history WHERE id_anggota = '$id'";
                    $query = mysqli_query($conn,$sql);
                  $data = mysqli_fetch_assoc($query);
              ?>
              <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo"Rp".number_format($data['total'], 2, ",", "."); ?></td>
                <td><a href ="catat.php?id=<?php echo $id; ?>"><button type="submit" class="btn btn-info ">Catat</button></td>
              </tr>
              <?php endwhile;?>
            </tbody>
              <tr>
                    <td></td>
                   <td> <b>TOTAL DONASI :</b></td>
                    <td><b><?php  echo"Rp".number_format($total['total'], 2, ",", "."); ?></b></td>
              </tr>
          </table>
        </div>
        <!-- /.box-body -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; web charity</strong> All rights reserved.
  </footer>
  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
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