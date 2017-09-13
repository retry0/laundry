<script>
	function myFunction()
		{
			alert("Data  Berhasil diubah");
		}
		</script>
              <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
							<small><font color='green'>Edit Kategori Jasa</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('kategori/edit'); ?>
                                <input type="hidden" name="id" value="<?php echo $record['kategori_id']?>" name="id">
                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <input class="form-control" name="nama_barang" value="<?php echo $record['nama_kategori']?>" required>
                                </div>
                               

                                <button type="submit" name="submit"   onclick="myFunction()" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('kategori','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->