                                
				 <script>
function hapusData() {
 tanya=confirm("Apa Anda Ingin Menghapus Data Ini ?");
 if (tanya==true) return true;
 else return false;
}
</script>

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'> Pesanan</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('pesanan','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>
                            </div>
                            <div class="panel-body">
							 <?php echo form_open('pesanan/transaksi_bulan', array('class'=>'form-inline')); ?>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Tanggal Awal bulan</label>
                                        <input type="text" name="tanggal1" class="form-control datepicker"  data-date-format="yyyy-mm-dd" placeholder="Tanggal Mulai">
                                    </div>
                                   <div class="form-group">
                                        <label for="exampleInputName2">Tanggal Akhir bulan</label>
                                        <input type="text" name="tanggal2" class="form-control datepicker"  data-date-format="yyyy-mm-dd" placeholder="Tanggal Mulai">
                                    </div>
                                    <button class="btn btn-success btn-sm" type="submit" name="submit">Cari</button>

                                </form>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
												<th>No Nota</th>
												<th>No Pelanggan</th>
                                                <th>Nama Jasa</th>
                                                <th>Jumlah</th>
												 <th>Harga</th>
												 <th>Alamat</th>
												 <th>Antar Jemput</th>
												 <th>Tanggal Masuk</th>
												 <th>Tanggal Selesai</th>
												 <th>Tanggal Bayar</th>
												 <th>Status Barang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
												<td><?php echo $r->no_nota ?></td>
												<td><?php echo $r->no_pelanggan ?></td>
                                                <td><?php echo $r->nama_barang ?></td>
                                                <td><?php echo $r->jumlah ?></td>
												<td>Rp. <?php echo number_format($r->harga,2) ?></td>
												<td><?php echo $r->alamat ?></td>
												<td><?php echo $r->antar_jemput ?></td>
												<td><?php echo $r->tanggal_masuk ?></td>
												<td><?php echo $r->tanggal_selesai ?></td>
												<td><?php echo $r->tanggal_bayar ?></td>
												<td><?php echo $r->status_barang ?></td>
                                                <td class="center">
                                                  <?php echo anchor( 'pesanan/edit/'.$r->p_detail_id,'Edit',array('class'=>'btn btn-primary btn-sm')); ?> 
                                                    <a onclick = "return  hapusData()"<?php echo anchor('pesanan/hapusitem/'.$r->p_detail_id,'Delete',array('class'=>'btn btn-danger btn-sm'));?>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </diva>
                </div>
                <!-- /. ROW  -->


