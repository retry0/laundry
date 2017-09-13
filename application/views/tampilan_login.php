<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?php echo base_url() ?>assets/images/logo-javawebmedia.png" rel="shortcut icon">
<title>Halaman Masuk</title>
<link href="<?php echo base_url() ?>assets/css/style12.css" rel="stylesheet">
</head>

<body>
<script>
	function myFunction()
		{
			alert("Login Berhasil");
		}
		</script>
<section class="login">
	<h1>Halaman Masuk</h1>
	<?php 
if($this->session->userdata('PASSWORD_DAPAT') !='') { ?>
<div class="alert alert-success"> 
                            <p>   <strong> <i class='fa fa-check'></i> Password Anda Sekarang : <?php echo $this->session->userdata('PASSWORD_DAPAT') ;?></strong> </p>
                            </div>
                            <?php } ?>
    
     <?php
	 // Cetak session
	if($this->session->flashdata('sukses')) {
		echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
	}
	// Cetak error
	echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
	?>
    
    <form action="<?php echo base_url('masuk/login') ?>" method="post">
		  <?php echo $this->session->flashdata("result"); ?>
      <p>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username"  required>
        
      </p>
      <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password"  required>
      </p>
	   <p> <label for="captcha">Captcha</label>
	  <p><?php echo $captcha ?><a href="#" onclick="parent.window.location.reload(true)">[refresh]</a></p>
                <input type="text" name="captcha" placeholder="masukkan kode diatas" >
       </p>
	  <p>
        <input type="submit" name="submit" id="submit"  value="Masuk" class="full">
		<br>
		<br>
		<font color='green'><a href="masuk/oh_saya_lupa"    class="full">Lupa Password</a></font>
		<br>
		<br>
		<font color='green'><a href="register"    class="full">Daftar</a></font>
		<br>
      </p>
    </form>
    <footer>&copy; copyright Politeknik Negeri Batam 2017 </a></footer>
</section>
</body>
</html>
