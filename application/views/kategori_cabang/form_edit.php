<script>
	function myFunction()
		{
			alert("Data  Berhasil diubah");
		}
		</script>              <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
							<small><font color='green'>Edit Kota Cabang</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('kategori_cabang/edit'); ?>
                                <input type="hidden" name="id" value="<?php echo $record['kategori_id']?>" name="id">
                                <div class="form-group">
                                    <label>Nama Kota Cabang</label>
                                    <input class="form-control" name="nama_kategori" value="<?php echo $record['nama_kategori']?>" required>
                                </div>
                               

                                <button type="submit" name="submit" onclick="myFunction()" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('kategori_cabang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->