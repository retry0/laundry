<script>
	function myFunction()
		{
			alert("Data  Berhasil ditambah");
		}
		</script>
		<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'>Tambah Pegawai</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                            <div class="panel-body">
							<!-- /. Maka controller pegawai akan bekerja pada fungsi post -->
                                <?php echo form_open('user/post'); ?>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" placeholder="nama lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="username" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control"  name="password" placeholder="password" required>
                                </div>
                                <div class="control-group">
                <label class="control-label">Level</label>
                <div class="controls">
                    <select name="level" id="level">
                        <option value=""> = Pilih Level Akses = </option>
                        <option value="pemilik">Pemilik</option>
						<option value="karyawan">Karyawan</option>
						  <option value="pelanggan">Pelanggan</option>
                    </select>
					 </div>
					 
            </div>
			<br>
			<br>
                                <button type="submit" name="submit" onclick="myFunction()"class="btn btn-primary btn-sm">Simpan</button> 
                                <?php echo anchor('user','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->