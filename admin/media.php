<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Universitas Madura</title>

    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
	<link href="plugin/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="bootstrap/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="bootstrap/css/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="plugin/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    
  </head>
  <!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
  <body class="skin-blue layout-boxed">
    <!-- Site wrapper -->
    <div class="wrapper">
      
      <header class="main-header">
        <a href="../admin/administrator.php?page=content" class="logo"><b>Universitas</b>Madura</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="./images/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <?php if(isset($_COOKIE["username"])){
                     $login = $_COOKIE["name"];
                     $logout= "<a href=logout.php><b>Logout</b></a>";  
                    ?>                
              <p><?php echo $login; ?></p>
              <p><?php echo $logout; ?></p>
<?php } else { header('location:index.php?pesan=1&id='.$_POST[noid].'&isi=Silahkan Login Terlebih Dahulu!');} ?>         
            
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Pengumuman</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pengumuman.php"><i class="fa fa-circle-o"></i>Pengumuman</a></li>
                <li><a href="administrator.php?page=addpeng"><i class="fa fa-circle-o"></i>Tambah Pengumuman</a></li>
              </ul>
            </li>
              
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Berita</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="berita.php"><i class="fa fa-circle-o"></i>Berita</a></li>
                <li><a href="administrator.php?page=addberita"><i class="fa fa-circle-o"></i>Tambah Berita</a></li>
              </ul>
            </li>
              
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Kegiatan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="kegiatan.php"><i class="fa fa-circle-o"></i>Kegiatan</a></li>
                <li><a href="administrator.php?page=addkegiatan"><i class="fa fa-circle-o"></i>Tambah Kegiatan</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="page.php">
                <i class="fa fa-files-o"></i>
                <span>Page</span>
                <span class="fa fa-angle-left pull-right"></span>
              </a>
            </li>
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Media</span>
                <span class="fa fa-angle-left pull-right"></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="media.php"><i class="fa fa-circle-o"></i> All Media</a></li>
                <li class="active"><a href="administrator.php?page=addmedia"><i class="fa fa-circle-o"></i> Add Media</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>User</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="user.php"><i class="fa fa-circle-o"></i> All User</a></li>
                <li>
                  <a href="administrator.php?page=adduser"><i class="fa fa-circle-o"></i> Add User</a>
                </li>
              </ul>
            </li>
			<li class="treeview">
              <a href="bukutamu.php">
                <i class="fa fa-share"></i> <span>Buku Tamu</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              </li>
              </ul>
          </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
   
<div class="content-wrapper">
  <section class="content">
          <div class="row">
            <div class="col-xs-12">
			 <div class="box">
                <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
<td>1</td>
<td>Nama 1</td>
<td>Kode 1</td>
<td>Keterangan 1</td>
<td>[Edit][Delete]</td>
</tr>

<tr>
<td>2</td>
<td> Nama 1</td>
<td> Kode 1</td>
<td> Keterangan  2</td>
<td>[Edit][Delete]</td>
</tr>

<tr>
<td>3</td>
<td> Nama 3</td>
<td> Kode 1</td>
<td> Keterangan  3</td>
<td>[Edit][Delete]</td>
</tr>

<tr>
<td>4</td>
<td> Nama 4</td>
<td> Kode 4</td>
<td> Keterangan  4</td>
<td>[Edit][Delete]</td>
</tr>

<tr>
<td>5</td>
<td> Nama 5</td>
<td> Kode 5</td>
<td> Keterangan  5 </td>
<td>[Edit][Delete]</td>
</tr>

<tr>
<td>6</td>
<td> Nama 6</td>
<td> Kode 6</td>
<td> Keterangan  6</td>
<td>[Edit][Delete]</td>
</tr>

<tr>
<td>7</td>
<td>Nama 7</td>
<td>Kode 7</td>
<td> Keterangan  7</td>
<td>[Edit][Delete]</td>
</tr>

<tr>
<td>8</td>
<td> Nama 8</td>
<td> Kode 8</td>
<td> Keterangan  8</td>
<td>[Edit][Delete]</td>
</tr>

<tr>
<td>9</td>
<td> Nama 9</td>
<td> Kode 9</td>
<td> Keterangan  9</td>
<td>[Edit][Delete]</td>
</tr>

<tr>
<td>10</td>
<td> Nama 10</td>
<td> Kode 10</td>
<td> Keterangan  10</td>
<td>[Edit][Delete]</td>
</tr>

<tr>
<td>11</td>
<td> Nama 11</td>
<td> Kode 11</td>
<td> Keterangan  11</td>
<td>[Edit][Delete]</td>
</tr>

<tr>
<td>12</td>
<td> Nama 12</td>
<td> Kode 12</td>
<td> Keterangan  12</td>
<td>[Edit][Delete]</td>
</tr>

<tr>
<td>13</td>
<td> Nama 13</td>
<td> Kode 13</td>
<td> Keterangan  13</td>
<td>[Edit][Delete]</td>
</tr>

                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
  <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2015 Universitas Madura.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="./plugin/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="./bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="./plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='./plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="./bootstrap/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./bootstrap/js/demo.js" type="text/javascript"></script>  
    <!-- DATA TABES SCRIPT -->
    <script src="plugin/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugin/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

    </body>
</html>
			  
			   