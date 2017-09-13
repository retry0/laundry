<script>
	function myFunction()
		{
			alert("Data  Berhasil diubah");
		}
		</script>
		<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Aplikasi Kasir<br>
							<small><font color='red'>Edit Pegawai</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
							<!-- /. Maka controller pegawai akan bekerja pada fungsi edit -->
                                <?php echo form_open('user/edit'); ?>
                                <input type="hidden" value="<?php echo $record['user_id']?>" name="id" >
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $record['nama_lengkap']?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" value="<?php echo $record['username']?>" required>
                                </div>
                        <div class="form-group">         
							<label>Password:</label>
								<input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
								<?php echo form_error('password'); ?> 
									</div>
									   <div class="form-group">   
			<label>Password Confirm:</label>
				<input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
				 <?php echo form_error('password_conf'); ?> 
				 
								</div>
								<div>
                                <button type="submit" name="submit" onclick="myFunction()" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('user','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
								 <?php echo form_close();?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->