
		
  	<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Aplikasi Kasir<br>
							<small><font color='red'>Ubah Password</font></small>
                        </h2>
                    </div>
                </div> 
				  <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">  
   <?php echo form_open('password/save_password'); ?>
<table class="input"><tr><td> Password Lama</td><tr>
<tr><td class="input-width"> <br><input type="password" name="old" value="<?php echo set_value('old');?>" required></td></tr>
<tr><td>Password Baru</td><tr>
<tr><td class="input-width"> <br><input type="password" name="new" value="<?php echo set_value('new');?>"  required></td></tr>
<tr><td>Ulang Password Baru</td><tr>
<tr><td class="input-width"> <br><input type="password" name="re_new" value="<?php echo set_value('re_new'); ?>" required></td></tr>
<tr><td> <br> 
   <button type="submit" name="submit" class="btn btn-primary btn-sm">Save</button> | 
   <?php echo anchor('user','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
</td></tr>
</table>
</form>
</div>
<div class="error">
<?= validation_errors() ?>
<?= $this->session->flashdata('error') ?>
</div>
</div>