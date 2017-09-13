    <div class="col-sm-4 sidebar" style="padding-right: 20px;">
        <div class="panel">
         
          <div class="panel-body">
           
          </div>
        </div>

      </div>
<div class="col-sm-8 content">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Daftar</h3>
          </div>
   <div class="panel-body">
     <?php echo form_open('register/daftar');?>
	  <div class="form-group">
                <label class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-10">
     <input type="text" name="nama_lengkap" value="<?php echo set_value('nama_lengkap') ;  ?> " required>
<?php echo form_error('nama_lengkap'); ?> 
 </div>
  </div>
  <br>
    <br>
	<br>
     <div class="form-group">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
     <input type="text" name="username" value="<?php echo set_value('username');  ?> " required> 
  <?php echo form_error('username'); ?> 
 </div>
    <br>
	<br>
 </div> <div class="form-group">
                <label class="col-sm-2 control-label"> Email</label>
                <div class="col-sm-10">
     <input type="email" name="email" value="<?php echo set_value('email'); ?>" required>
      <?php echo form_error('password_conf'); ?> 
</div>
</div>
    <br>
    <br>
	<br>
 <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
     <input type="password" name="password" value="<?php echo set_value('password');  ?>"required>
      <?php echo form_error('password'); ?> 
</div>
</div>
<br>
    <br>
	<br>
    <div class="form-group">
                <label class="col-sm-2 control-label"> Konfirmasi Password</label>
                <div class="col-sm-10">
     <input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" required >
      <?php echo form_error('password_conf'); ?> 
</div>
</div>
<br>
    <br>
	<br>
<div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="hidden" select name="level" id="level">
						  <input type="hidden" option value="pelanggan"></option>
						  	<br>
					</div>
					</div>
					<br>
    <br>
	<br>
					<div class="form-group">
                <label class="col-sm-2 control-label">Captcha</label>
                <div class="col-sm-10">
				 <p><?php echo $captcha ?><a href="#" onclick="parent.window.location.reload(true)">[refresh]</a>
				 <br>
				 <br>
                <input type="text" name="captcha" value="<?php echo set_value('captcha');  ?>" required>
				 <?php echo form_error('captcha'); ?> 
				 
					<br>
    <br>
	<br>
	
					<div class="form-group">
					<div class="form-group">
					<label class="col-sm-1 control-label"></label>
					
                <div class="col-sm-offset-2">
				
     <input type="submit" name="submit" value="Daftar" />
	 <br>
	  <br>
	   <br>
	    <?php echo anchor('masuk','Kembali',array('class'=>'btn btn-danger btn-sm')); ?>
                </div>
              </div>
     </div>
        </div>
		</div>