<script>
	function myFunction()
		{
			alert("Data  Berhasil ditambah");
		}
		</script>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'>Tambah Lokasi Cabang</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                      
                            <div class="panel-body">
                                <?php echo form_open('cabang/post'); ?>
                                <div class="form-group">
                                    <label>Nama Cabang</label>
                                    <input class="form-control" name="nama" placeholder="nama cabang" required>
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
                                    <input class="form-control" name="alamat" placeholder="Alamat Cabang" required>
                                </div>
								 <div class="form-group">
                                    <label>No Telepon Cabang</label>
                                    <input class="form-control" name="telp" placeholder="No Telepon Cabang" required>
                                </div>
                                <br>
								<br>
                                <button type="submit" name="submit"  onclick="myFunction()" class="btn btn-primary btn-sm">Simpan</button>
                                <?php echo anchor('cabang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->