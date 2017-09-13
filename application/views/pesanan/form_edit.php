<script>
	function myFunction()
		{
			alert("Data  Berhasil diubah");
		}
		</script>
		<link href="<?php echo base_url()?>/assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet"/>
<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'>Edit Pesanan</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        
                            <div class="panel-body">
                                <?php echo form_open('pesanan/edit'); ?>
                                <input type="hidden" name="id" value="<?php echo $record['p_detail_id']?>" required>
								<div class="form-group">
                                    <label>Jumlah</label>
                                    <input class="form-control" name="jumlah" value="<?php echo $record['jumlah']?>" required>
                                </div>
								<div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control" name="alamat" value="<?php echo $record['alamat']?>" required>
                                </div>
								<div class="form-group">
                                    <label>Tanggal Masuk</label>
                                    <input class="form-control datepicker" name="tanggal_masuk" value="<?php echo $record['tanggal_masuk']?>" required>
                                </div>
								<div class="form-group">
                                    <label>Tanggal Selesai</label>
                                    <input class="form-control datepicker" name="tanggal_selesai" value="<?php echo $record['tanggal_selesai']?>" required>
                                </div>
								<div class="form-group">
                                    <label>Tanggal Bayar</label>
                                    <input class="form-control datepicker" name="tanggal_bayar" value="<?php echo $record['tanggal_bayar']?>" required>
                                </div>
                                 <label class="control-label">Antar Jemput</label>
                <div class="controls">
                    <select name="antar_jemput" id="antar_jemput">
                        <option value="ya">Ya</option>
						<option value="tidak">Tidak</option>
                    </select>
					</div>
					<br>
					 <label class="control-label">Status Barang</label>
					<div class="controls">
                    <select name="status_barang" id="status_barang">
                        <option value="sudah_diambil">Sudah Diambil</option>
						<option value="belum_diambil">Belum Diambil</option>
                    </select>
					</div>
                         
<br>
<br>
                                <button type="submit" name="submit" onclick="myFunction()" class="btn btn-primary btn-sm">Update</button>
                                <?php echo anchor('pesanan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->