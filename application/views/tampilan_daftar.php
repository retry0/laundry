<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Pendaftaran Akun | Tutorial Simple Login Register CodeIgniter @ http://recodeku.blogspot.com
   </title>
 </head>
 <body>
     <h2>Pendaftaran Akun</h2>
 
     <?php echo form_open('register');?>
     <p>Nama:</p>
     <p>
     <input type="text" name="name" value="<?php echo set_value('name'); ?>"/>
     </p>
     <p> <?php echo form_error('name'); ?> </p>
 
     <p>Username:</p>
     <p>
     <input type="text" name="username" value="<?php echo set_value('username'); ?>"/> 
     </p>
     <p> <?php echo form_error('username'); ?> </p>
 
     <p>Password:</p>
     <p>
     <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
     </p>
     <p> <?php echo form_error('password'); ?> </p>
 
     <p> Captcha</p>
	  <p><?php echo $captcha ?>
                <input type="text" name="captcha" value="<?php echo set_value('password'); ?>"/>
       </p>
	    <p> <?php echo form_error('captcha'); ?> </p>
     <p> <?php echo form_error('password_conf'); ?> </p>
<div>
                    <select name="level" id="level">
                        <option value=""> = Pilih Level Akses = </option>
						  <option value="pelanggan">Pelanggan</option>
					</div>
	<p> Captcha</p>
	  <p><?php echo $captcha ?>
                <input type="text" name="captcha" value="<?php echo set_value('password'); ?>"/>
       </p>
	    <p> <?php echo form_error('captcha'); ?> </p>
     <p>
     <input type="submit" name="submit" value="Daftar" />
     </p>
 
 
     <p>
    <a href="masuk">Kembali</a>
     </p>
 </body>
 </html>