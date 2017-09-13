<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="<?php echo base_url().'assets/dist/img/favorit.png' ?>" rel="shortcut icon" type="image/ico" />
	<!-- Title-->
    <title>Aplikasi Laundry Kiloan</title>
	<!-- Bootstrap Styles-->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   <!-- Google Fonts-->
        <!-- Custom Styles-->
    <link href="<?php echo base_url() ?>/assets/css/custom-styles.css" rel="stylesheet" />
	
	 <link href="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

		
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
               <a class="navbar-brand" href="<?php echo base_url() ?>">Aplikasi Laundry Kiloan</a>
            </div>

           
        </nav>
        <!--/. NAV TOP  -->
		 <?php if ($this->session->userdata('LEVEL') =='pemilik'){ ?>
		<nav class="navbar-default navbar-side" role="navigation">
             <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
					<!--/. NAV barr -->
<li>
                        <a href="<?php echo base_url().'dashboard' ?>"> Dashboard</a>
                    </li>
					 <li>
                        <a href="<?php echo base_url().'#'?>">Laporan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li>
                                <a href="<?php echo base_url().'pesanan/laporan_keuangan'?>">Laporan Keuangan Per bulan</a>
                            </li>
							<li>
                                <a href="<?php echo base_url().'pesanan/laporan_keuangan_cabang'?>">Laporan Keuangan Percabang </a>
                            </li>
                        </ul>
                    </li>
                    <li>
					<!--/. tombol tambah kategori barang diambil dari controller kategori   -->
                        <a href="<?php echo base_url().'kategori'?>"></i>Kategori</a>
                    </li>
					<li>
					<!--/. tombol tambah kategori barang diambil dari controller barang   -->
                        <a href="<?php echo base_url().'barang'?>"></i> Jasa</a>
                    </li>
                    <li>
					<!--/. tombol tambah kategori barang diambil dari controller pegawai  -->
                        <a href="<?php echo base_url().'user'?>"> User</a>
                    </li>
					<li>
					 <li>
                        <a href="#"></i> Cabang<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url().'cabang'?>"> Lokasi Cabang</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'kategori_cabang'?>">Kota Cabang</a>
                            </li>
                            
                        </ul>
                    </li>
					 <li>
					<a href="<?php echo base_url().'pesanan'?>">Pelanggan<span class="fa arrow"></span></a>
					  <ul class="nav nav-second-level">
                             <li>
                                <a href="<?php echo base_url().'pelanggan/lihat_data'?>">Pelanggan</a>
                            </li>
					  <li>

					<!--/. tombol tambah kategori barang diambil dari controller pegawai  -->
                        <a href="<?php echo base_url().'pelanggan/tampil_laporan_pelanggan'?>">Data Pelanggan perbulan</a>
                    </li>
					</ul>
					 </li>
					<li>
					<!--/. tombol pelanggan diambil dari controller pelanggan  -->
                        <a href="<?php echo base_url().'keluhaan/lihat_data'?>"> Keluhaan</a>
					</li>
					<li>
					<!--/. tombol pelanggan diambil dari controller pelanggan  -->
                        <a href="<?php echo base_url().'komentar'?>"> Komentar</a>
					</li>
					<li>
					<!--/. tombol pelanggan diambil dari controller pelanggan  -->
                        <a href="<?php echo base_url().'password/save_password'?>"> Ubah Password</a>
					</li>
					<li>
					<!--/. tombol tetang diambil dari controller tentang  -->
                        <a href="<?php echo base_url().'tentang'?>"> Tentang</a>	
                    </li>
					 <li>
						<!-- Tombol Logout merupakan controller dari masuk fungsi logout-->
                            <a href="<?php echo base_url().'masuk/logout'?>">Keluar</a>
                        </li>
                </ul>

            </div>

        </nav>
		<br>
	 <?php }  else if ($this->session->userdata('LEVEL') =='pegawai'){ ?>
	<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li>
                        <a href="<?php echo base_url().'dashboard' ?>"> Dashboard</a>
                    </li>
				
					 <li>
                        <a href="<?php echo base_url().'pesanan'?>">Transaksi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li>
                                <a href="<?php echo base_url().'pesanan/'?>">Transaksi</a>
                            </li>
							<li>
                                <a href="<?php echo base_url().'pesanan/transaksi_bulan'?>">Lihat Data Transaksi</a>
                            </li>
                            
                        </ul>
                    </li>
					 <li>
					<!--/. tombol tambah kategori barang diambil dari controller pesan fungsi pdf   -->
                        <a href="<?php echo base_url().'pesanan/cetak_nota'?>" target="_blank"></i>Cetak Nota</a>
                    </li>
					 <li>
					<!--/. tombol tambah kategori barang diambil dari controller kategori   -->
                        <a href="<?php echo base_url().'kategori'?>"></i>Kategori</a>
                    </li>
					<li>
					<!--/. tombol tambah kategori barang diambil dari controller barang   -->
                        <a href="<?php echo base_url().'barang'?>"></i> Jasa</a>
                    </li>
					 <li>
					<a href="<?php echo base_url().'pesanan'?>">Pelanggan<span class="fa arrow"></span></a>
					  <ul class="nav nav-second-level">
                             <li>
                                <a href="<?php echo base_url().'pelanggan/lihat_data'?>">Pelanggan</a>
                            </li>
					  <li>

					<!--/. tombol tambah kategori barang diambil dari controller pegawai  -->
                        <a href="<?php echo base_url().'pelanggan/tampil_laporan_pelanggan'?>">Data Pelanggan perbulan</a>
                    </li>
					</ul>
					 </li>
					<li>
					<!--/. tombol pelanggan diambil dari controller pelanggan  -->
                        <a href="<?php echo base_url().'keluhaan/lihat_data'?>"> Keluhaan</a>
					</li>
					<li>
					<!--/. tombol tetang diambil dari controller tentang  -->
                        <a href="<?php echo base_url().'tentang'?>"> Tentang</a>	
                    </li>
					<li>
					<!--/. tombol pelanggan diambil dari controller pelanggan  -->
                        <a href="<?php echo base_url().'password/save_password'?>"> Ubah Password</a>
					</li>
					 <li>
						<!-- Tombol Logout merupakan controller dari masuk fungsi logout-->
                            <a href="<?php echo base_url().'masuk/logout'?>">Keluar</a>
                        </li>
					</ul>

            </div>

        </nav>
		 <br>
	 <?php } else { ?>
		<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				
<li>
                        <a href="<?php echo base_url().'dashboard' ?>">Dashboard</a>
                    </li>
					<li>
					<!--/. tombol tambah kategori barang diambil dari controller pesanan   -->
                        <a href="<?php echo base_url().'pesanan_pelanggan'?>"></i> Transaksi </a>
                    </li>
					<li>
					<!--/. tombol tambah kategori barang diambil dari controller pegawai  -->
                        <a href="<?php echo base_url().'keluhaan'?>"> Keluhaan </a>
                    </li>
					<li>
					<!--/. tombol pelanggan diambil dari controller pelanggan  -->
                        <a href="<?php echo base_url().'password/save_password'?>"> Ubah Password</a>
					</li>
					
					 <li>
						<!-- Tombol Logout merupakan controller dari masuk fungsi logout-->
                            <a href="<?php echo base_url().'masuk/logout'?>">Keluar</a>
                        </li>
					</ul>

            </div>

        </nav>
		 <br>
<?php } ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                    <?php echo $contents; ?>
            </div>
            <!-- /. Footer  -->
<center><font face="Consolas" size="1">&copy; 2017 Copyright Politeknik Negeri Batam</font></center>        </div
        <!-- /. PAGE WRAPPER  -->
    </div>
	</div>

<!-- jQuery Js -->
    <script src="<?php echo base_url() ?>/assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url() ?>/assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url() ?>/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
			</script>
			  <!-- Morris Chart Js -->
    <script src="<?php echo base_url() ?>/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>/assets/js/custom-scripts.js"></script>
<script src="<?php echo base_url()?>/assets/bootstrap/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>
<script type="text/javascript">
 $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });
</script> 

</body>
</html>