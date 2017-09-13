                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'>Keluhaan Pelanggan</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                         <div class="panel-heading">
						  <?php if ($this->session->userdata('LEVEL') =='pemilik' and 'pegawai' ){ ?>
                                 <?php echo anchor('keluhaan/lihat_data','Lihat Data',array('class'=>'btn btn-success btn-sm')) ?>
								 <?php }?>
                            </div>
                            <div class="panel-body">
                                <?php echo form_open('keluhaan/post'); ?>  <!--akan membuka controller kategori yaitu fungsi post-->
                                 <div class="form-group">
                                    <label>No Keluhaan</label>
                                    <input type="text" name="no_keluhaan" class="form-control"  readOnly value="<?php echo $no_keluhan; ?>" required>
                                </div>
								<div class="form-group">
                                    <label>No Pelanggan</label>
                                    <input type="text" name="no_pelanggan" class="form-control" placeholder="No Pelanggan" required>
                                </div>
								<div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
								<div class="form-group">
                                    <label>Keluhaan</label>
                                    <input class="form-control" name="nama_keluhaan" placeholder="Keluhaan" required>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>                           
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->