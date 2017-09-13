<script>
	function myFunction()
		{
			alert("Data  Berhasil ditambah");
		}
		</script> 
 <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'>Tambah Kota Cabang</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        
                            <div class="panel-body">
                                <?php echo form_open('kategori_cabang/post'); ?>  <!--akan membuka controller kategori yaitu fungsi post-->
                                <div class="form-group">
                                    <label>Nama Kota Cabang</label>
                                    <input type="text" name="nama_kategori" class="form-control" placeholder="nama kota Cabang" required>
                                </div>
								

                                <button type="submit" name="submit"  onclick="myFunction()" class="btn btn-primary btn-sm">Simpan</button> 
                                <?php echo anchor('kategori_cabang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->