<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Aplikasi Laundry Qiloan </title>
    <link href="<?php echo base_url().'assets/dist/img/favorit.png' ?>" rel="shortcut icon" type="image/ico" />
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?=base_url().'assets/' ?>bootstrap/css/bootstrap.css">
    
	   <link rel="stylesheet" href="<?=base_url().'assets/' ?>imageCarousel-master/css/styles13.css">

	 <script src="<?=base_url().'assets/' ?>/imageCarousel-master/js/jsmyjs.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url().'assets/' ?>plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url().'assets/' ?>dist/css/costum.css">
    
    <script type="text/javascript" src="<?=base_url() ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?=base_url() ?>assets/js/markerclusterer_packed.js"></script>

 
  </head>



  <!-- <body onload="initialize()"> -->
  <body>

    <div class="container bg_content">
      <div class="container">
        
        <div class="col-sm-12 header">
          <img src="<?=base_url().'uploads/' ?>header1.png" class="img-responsive">
        </div><!-- ./ HEADER -->
        
        <div class="col-sm-12 header-menu">
          <ul class="nav navbar-nav">
            <li><a href="<?=base_url().'web' ?>"><i ></i> Home</a></li>
			<li><a href="<?=base_url().'web/lokasi' ?>"></i> Lokasi</a></li>
		    <li><a href="<?=base_url().'web/harga' ?>"></i>Harga</a></li>
            <li><a href="<?=base_url().'web/komentar' ?>"></i> Komentar</a></li>
			<li><a href="<?=base_url().'masuk' ?>"></i> Masuk</a></li>
			            <li><a href="<?=base_url().'web/profil' ?>"></i> Profil</a></li>
          </ul>
		    
        </div><!-- ./ HEADER-MENU -->
        
        <?php echo $contents ?>
        
        <div class="col-sm-12 bottom-footer">
          Page rendered in <b>{elapsed_time}</b> seconds. Version <b>1.1</b><br>
          Aplikasi Laundry Qiloan Berbasis Web<br>
          Copyright © 2017, Develop By LINGGA ADI PRATAMA MUHAMMAD ALIF RAHER AKBAR ADHA | NIM 39 43 44 
        </div>
        <!-- ./ BOTTOM-FOOTER -->
      </div>
    </div>
    

    <!-- jQuery 2.2.3 -->
	  <script src="<?php echo base_url() ?>/assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>

    <!-- DataTables -->
    <script src="<?=base_url().'assets/' ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url().'assets/' ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- Page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });

        //Initialize Select2 Elements
        $(".select2").select2();
      });
    </script>
  </body>
</html>