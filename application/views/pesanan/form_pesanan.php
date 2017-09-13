
 <script>
function hapusBarang() {
 tanya=confirm("Apa Anda Ingin Menghapus Data Ini ?");
 if (tanya==true) return true;
 else return false;
}
</script>
<link href="<?php echo base_url()?>/assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet"/>
<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
							<small><font color='green'>   Pesanan</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('pesanan', array('class'=>'form-horizontal')); ?>
								<div class="form-group">
                                        <label class="col-sm-2 control-label">No Nota</label>
                                        <div class="col-sm-10">
                                          <input list="text" name="no_nota"  readOnly value="<?php echo $no_nota; ?>" class="form-control" required>
                                        </div>
                                    </div>
								<div class="form-group">
                                        <label class="col-sm-2 control-label">No Pelanggan</label>
                                        <div class="col-sm-10">
                                          <input list="text" name="no_pelanggan"  readOnly value="<?php echo $no_pelanggan; ?>"class="form-control" required  >
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-sm-2 control-label">Nama</label>
                                        <div class="col-sm-10">
                                          <input list="text" name="nama"  class="form-control" placeholder="Masukkan Nama " required  >
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-sm-2 control-label">No Telepon</label>
                                        <div class="col-sm-10">
                                          <input list="text" name="telp"  class="form-control" placeholder="Masukkan No Telepon " required  >
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Cabang</label>
                                        <div class="col-sm-10">
                                          <input list="text" name="nama_cabang"  placeholder="Masukkan nama cabang" class="form-control" required  >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Jasa</label>
                                        <div class="col-sm-10">
                                          <input list="barang" name="barang" placeholder="masukan nama jasa" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Berat *Kg/Satuan</label>
                                        <div class="col-sm-10">
                                          <input type="text" name="jumlah" placeholder="Berat" class="form-control" required>
                                        </div>
										</div>
										<div class="form-group">
                                        <label class="col-sm-2 control-label">Alamat</label>
                                        <div class="col-sm-10">
                                          <input list="text" name="alamat" placeholder="masukan Alamat" class="form-control" required>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal Masuk *Tahun/Bulan/Hari</label>
                                        <div class="col-sm-10">
								<input name="tanggal_masuk" id="tanggal_masuk" class="form-control datepicker"  data-date-format="yyyy-mm-dd" placeholder="tanggal masuk" type="text" required>                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal Selesai *Tahun/Bulan/Hari</label>
                                        <div class="col-sm-10">
                                          <input list="date" name="tanggal_selesai" class="form-control datepicker" placeholder="tanggal selesai"  data-date-format="yyyy-mm-dd" required >
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal Bayar *Tahun/Bulan/Hari</label>
                                        <div class="col-sm-10">
                                          <input list="date" name="tanggal_bayar" class="form-control datepicker"  data-date-format="yyyy-mm-dd" placeholder="tanggal bayar" required>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-sm-2 control-label">Bayar</label>
                                        <div class="col-sm-10">
                                          <input list="int" name="bayar" placeholder="Masukkan Yang dibayar" class="form-control" required>
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label class="col-sm-2 control-label">Antar Jemput</label>
										<div class="controls">
                    <select name="antar_jemput" id="antar_jemput">
                        <option value="ya">YA</option>
                        <option value="tidak">Tidak</option>
                    </select>
					 </div>
					  </div>
					  <div class="form-group">
                                        <label class="col-sm-2 control-label">Status Barang</label>
										<div class="controls">
                    <select name="status_barang" id="status_barang">
                        <option value="sudah_diambil">Sudah Diambil</option>
                        <option value="belum_diambil">Belum Diambil</option>
                    </select>
					 </div>
					  </div>
					
									 
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | <?php echo anchor('pesanan/selesai_belanja','Selesai',array('class'=>'btn btn-success btn-sm'))?>
                                        </div>
                                    </div>
                                </form>
								 <datalist id="barang">
                                    <?php foreach ($barang->result() as $b) {
                                        echo "<option value='$b->nama_barang'>";
                                    } ?>
                                    
                                </datalist>

                              
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>


                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No </th>
												<th>No Nota</th>
												 <th>No Pelanggan</th>
                                                <th>Nama Jasa</th>
                                                <th>Jumlah</th>
                                                <th>Harga</th>
												 <th>Alamat</th>
												<th>Antar Jemput</th>
												<th>Tanggal Masuk<th>												
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $kembalian=0; $total=0;    foreach ($detail as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
												<td><?php echo $r->no_nota ?></td>
												<td><?php echo $r->no_pelanggan ?></td>
                                                <td><?php echo $r->nama_barang?></td>
                                                <td><?php echo $r->jumlah ?></td>
                                                <td>Rp. <?php echo number_format($r->harga,2) ?></td>
												<td><?php echo $r->alamat ?></td>
												<td><?php echo $r->antar_jemput ?></td>
												<td><?php echo $r->tanggal_masuk ?></td>
												<td >
											   <?php echo anchor('pesanan/edit/'.$r->p_detail_id,'Edit',array('class'=>'btn btn-primary btn-sm')); ?>
                                                    <a onclick = "return hapusBarang()" <?php echo anchor('pesanan/hapusitem/'.$r->p_detail_id,'Delete',array('class'=>'btn btn-danger btn-sm')); ?>

                                                </td>												
                                            </tr>
                                       <?php $total=$total+($r->jumlah*$r->harga);$no++; ?>
                                         <?php $kembalian=$kembalian+($r->bayar-$total);$no++;} ?>
                                            <tr class="gradeA">
                                                <td colspan="4">T O T A L</td>
                                                <td>Rp. <?php echo number_format($total,2);?></td>
                                            </tr>
											 <tr class="gradeA">
                                                <td colspan="4">Kembalian</td>
                                                <td>Rp. <?php echo number_format($kembalian,2);?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /. TABLE  -->
                               </div>
                        </div>
                    </div>
                </div>
               <script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

<script type="text/javascript">
 $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });
</script> 

 