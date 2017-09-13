
             <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'>Tambah Kategori Jasa</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        
                            <div class="panel-body">
                                <?php echo form_open('kategori/post'); ?>  <!--akan membuka controller kategori yaitu fungsi post-->
                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <input type="text" name="kategori" class="form-control" placeholder="kategori" required>
                                </div>

                                <button type="submit" name="submit"  onclick="myFunction()" class="btn btn-primary btn-sm">Simpan</button> 
                                <?php echo anchor('kategori','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->