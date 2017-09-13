<!DOCTYPE html>   
  <html>   
  <head>   
 <meta charset="utf-8">
<link href="<?php echo base_url() ?>assets/images/logo-javawebmedia.png" rel="shortcut icon">
<title>   
     Halaman Lupa password 
   </title>  
<link href="<?php echo base_url() ?>assets/css/style12.css" rel="stylesheet">
 </head>   
 <body>   
  <section class="login">
	<h1>Halaman Lupa password</h1>
    
   <p>Untuk melakukan mengetahui password, silakan masukkan username dan  email anda. </p>   
    <form role="form" method="post" action="<?php echo base_url();?>masuk/lihat_pass">
	<?php 
if($this->session->userdata('PASSWORD_DAPAT') !='') { ?>
<div class="alert alert-danger"> 
                  <p>   <strong> <i class='fa fa-times'></i> <?php echo $this->session->userdata('PASSWORD_DAPAT') ;?></strong> </p>
                            </div>
                            <?php } ?>
    <label for="username">Username</label>
   <p>   
     <input type="text" name="username" required />   
   </p> 
   <label for="email">Email</label>
   <p>   
     <input type="email" name="email" required/>   
   </p>    
   <p>   
     <input type="submit" name="submit" id="submit"  value="Submit" class="full"> 
   </p> 
    <footer>&copy; copyright Politeknik Negeri Batam 2017 </a></footer>
</section>   
 </body>   
 </html>   