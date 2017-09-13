<script>
	function myFunction()
		{
			alert("Data  Berhasil diubah");
		}
		</script>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'>Edit Pelanggan</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        
                            <div class="panel-body">
                                <?php echo form_open('pelanggan/edit'); ?>
								<input type="hidden" name="id" value="<?php echo $record['p_detail_id']?>" required>
                                <div class="form-group">
                                    <label>Nama</label>
                                      <input class="form-control" name="nama" value="<?php echo $record['nama']?>" required>
                                </div>
								 <div class="form-group">
                                    <label>No Telepon</label>
                                     <input class="form-control" name="telp" value="<?php echo $record['telp']?>" required>
                                </div>
								<div class="form-group">
                                    <label>Alamat</label>
                                     <input class="form-control" name="alamat" value="<?php echo $record['alamat']?>" required>
                                </div>
                                <br>
								<br>
                                <button type="submit" name="submit"  onclick="myFunction()" class="btn btn-primary btn-sm">Simpan</button>
                                <?php echo anchor('pelanggan/lihat_data','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->