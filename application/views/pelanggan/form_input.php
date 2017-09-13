<script>
	function myFunction()
		{
			alert("Data  Berhasil ditambah");
		}
		</script>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'>Tambah Pelanggan</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                      
                            <div class="panel-body">
                                <?php echo form_open('pelanggan/post'); ?>
                                <div class="form-group">
                                    <label>No Pelanggan</label>
                                    <input list="text" class="form-control" name="no_pelanggan"  readOnly value="<?php echo $no_pelanggan; ?>"  required>
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                     <input class="form-control" name="nama" placeholder="Nama" required>
                                </div>
								 <div class="form-group">
                                    <label>No Telepon</label>
                                    <input class="form-control" name="telp" placeholder="No Telepon" required>
                                </div>
								 <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control" name="alamat" placeholder="Alamat" required>
                                </div>
                                <br>
								<br>
                                <button type="submit" name="submit"  onclick="myFunction()"class="btn btn-primary btn-sm">Simpan</button>
                                <?php echo anchor('pelanggan/lihat_data','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->