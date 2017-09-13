<script>
	function myFunction()
		{
			alert("Data  Berhasil diubah");
		}
		</script>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'>Lokasi Cabang</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        
                            <div class="panel-body">
                                <?php echo form_open('cabang/edit'); ?>
								<input type="hidden" name="id" value="<?php echo $record['lokasi_id']?>" required>
                                <div class="form-group">
                                    <label>Nama Cabang</label>
                           <input class="form-control" name="nama" value="<?php echo $record['nama']?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Kategori Cabang</label>
                                    <select name="kategori" class="form-control">
                                        <?php foreach ($kategori as $k) {
                                            echo "<option value='$k->kategori_id'>$k->nama_kategori</option>";
                                        } ?>
                                    </select>
                                </div>
								 <div class="form-group">
                                    <label>Alamat</label>
                                     <input class="form-control" name="alamat" value="<?php echo $record['alamat']?>" required>
                                </div>
								<div class="form-group">
                                    <label>No Telepon Cabang</label>
                                     <input class="form-control" name="telp" value="<?php echo $record['telp']?>" required>
                                </div>
                                <br>
								<br>
                                <button type="submit" name="submit" onclick="myFunction()"  class="btn btn-primary btn-sm">Simpan</button>
                                <?php echo anchor('cabang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->