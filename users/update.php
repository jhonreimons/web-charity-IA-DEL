<?php
     session_start();
     require "../config.php";

      $password = $_SESSION['password'];
      $username = $_SESSION['username'];
      $donatur = "SELECT * FROM donatur WHERE username = '$username' AND password = '$password'";
      $sql = mysqli_query($conn,$donatur);
      $result = mysqli_fetch_assoc($sql);

        require "function.php";

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Update</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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

<body class="hold-transition skin-green   sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
      <!-- Logo -->
      <a href="index.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>D</b>EL</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Web Charity</b> IA DEL</span>
      </a>
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="gambar/<?php echo $result['foto']; ?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $result['nama']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="gambar/<?php echo $result['foto'];?>" class="img-circle" alt="User Image">
                  <p><?php echo$result['nama']; ?><small>Member since <?php echo $result['tahun_aktif'];?></small>
                  </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
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
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="index.php">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li class="treeview active">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Update Profile</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
          <li>
            <a href="history.php">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
              <span class="pull-right-container">
              </span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Dashboard </h1>
        <hr>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Profile</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Masukkan Data</h3>
            </div>
            <?php  if(isset($_POST['submit'])) :?>
              <?php if(update($_POST) > 0) :?>
      <section>
      <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data Berhasil di tambahkan. Klik link <i> <a href="profile.php?username='<?php $_POST['username']; ?>'">ini</i></a> untuk melihat data yang sudah di Tambahkan
              </div>
            </section>
            <?php endif; ?>
      <?php endif; ?>
        <!-- form start -->
        <form role="form" method="POST" action=""  enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo $result['id_anggota']; ?>">
        <input type="hidden" name="FotoLama" value="<?php echo $result['foto']; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="nama" class="form-control"  value="<?php echo $result['nama'];?>" id="exampleInputName" placeholder="Masukkan nama">
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email </label>
                  <input type="email" name="email" class="form-control" value="<?php echo $result['email'];?>" id="exampleInputName" placeholder="contoh: contoh@domain.com">
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" name="alamat" class="form-control" value="<?php echo $result['alamat'];?>" id="exampleInputName" placeholder="Masukkan Alamat anda">
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">No ijazah</label>
                  <input type="text" name="akt" class="form-control" value="<?php echo $result['no_ijazah'];?>" id="exampleInputName" placeholder="Masukkan Nomor Akta Lahir">
                </div>
              </div>
              <div class="box-body">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Kelamin </label><br>
                  <p>
                  <input type="radio" name="gender" value="Laki-Laki" <?php if($result['jenis_kelamin']=='Laki-Laki') echo 'checked'?>> Laki-Laki
                  </p><br>
                  <p>
                  <input type="radio" name="gender" value="Perempuan" <?php if($result['jenis_kelamin']=='Perempuan') echo 'checked'?>> Perempuan
                  </p>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pekerjaan </label>
                  <input type="text" name="tahunAngkatan" class="form-control" value="<?php echo $result['pekerjaan'];?>" id="exampleInputName" placeholder="Masukkan Pekerjaan Anda">
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">No. Telepon </label>
                  <input type="text" name="telepon" class="form-control" value="<?php echo $result['no_telepon'];?>" id="exampleInputName" placeholder="Masukkan NO. HP Anda">
                </div>
              </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username </label>
                  <input type="Usernmae" name="username" class="form-control" value="<?php echo $result['username'];?>" id="exampleInputUsername" placeholder="Masukkan Username">
                </div>
                </div>
                <div class="form-group">
                <div class="box-body">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" value="<?php echo $result['password'];?>" id="exampleInputPassword1" placeholder="Masukkan password">
                </div>
                </div>
                <div class="form-group">
                <div class="box-body">

                  <label for="exampleInputFile">Foto</label><h style="color:Tomato;">*</h><small> .jpg .jpeg .png</small>
                  <input type="file" name="foto" value="<?php echo $result['foto'];?>" placeholder="Masukkan foto anda" id="exampleInputFile">
                    <b><small>Jika anda tidak mengupload foto baru maka gambar yang di gunakan adalah gambar sebelumnya</small></b>
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
    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs"> Anything you want </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>
    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <!-- REQUIRED JS SCRIPTS -->
 <!-- jQuery 3 -->
 <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="bower_components/raphael/raphael.min.js"></script>
    <script src="bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="bower_components/moment/min/moment.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>
