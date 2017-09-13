                <script type="text/javascript">
	$(function(){
		$('#mulai').datepicker({dateFormat: 'dd/mm/yy'});
		$('#akhir').datepicker({dateFormat: 'dd/mm/yy'});
	});
</script>
				
				<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                             <small><font color='green'>Laporan keuanggan Perbulan </font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
							 <div class="panel-heading">
                                 <?php echo anchor('pesanan/laporan_keuangan2/post','Cetak',array('class'=>'btn btn-success btn-sm')) ?>
                            </div>
                                <?php echo form_open('pesanan/laporan_keuangan', array('class'=>'form-inline')); ?>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Tanggal Awal Bulan</label>
                                        <input type="text" name="tanggal1" class="form-control datepicker"  data-date-format="yyyy-mm-dd" placeholder="Tanggal Awal Bulan">
                                    </div>
                                   <div class="form-group">
                                        <label for="exampleInputName2">Tanggal Akhir Bulan</label>
                                        <input type="text" name="tanggal2" class="form-control datepicker"  data-date-format="yyyy-mm-dd" placeholder="Tanggal Akhir Bulan">
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit" name="submit">Tampilkan</button>

                                </form>
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
                                                <th>No.</th>
												 <th>Tangal</th>
                                                <th>Jumlah</th>
												<th>Jasa</th>
                                                <th>tarif</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $total=0; foreach ($record->result() as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->tanggal_masuk ?></td>
                                                <td><?php echo $r->jumlah ?></td>
                                                <td><?php echo $r->nama_barang?></td>
												<td>Rp. <?php echo number_format($r->harga,2) ?></td>
                                            </tr>
										<?php $total=$total+($r->jumlah*$r->harga);$no++;} ?>
                                            <tr class="gradeA">
                                                <td colspan="4">T O T A L</td>
                                                <td>Rp. <?php echo number_format($total,2);?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /. TABLE  -->
                            </div>
                        </div>
                    </div>
                </div>				