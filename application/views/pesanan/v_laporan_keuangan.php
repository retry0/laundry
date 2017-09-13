                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                             <small><font color='green'> Cetak Laporan keuanggan </font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('pesanan/cetak_laporan_keuanggan', array('class'=>'form-inline')); ?>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Tanggal Awal bulan</label>
                                        <input type="text" name="tanggal1" class="form-control datepicker"  data-date-format="yyyy-mm-dd" placeholder="Tanggal Mulai">
                                    </div>
                                   <div class="form-group">
                                        <label for="exampleInputName2">Tanggal Akhir bulan</label>
                                        <input type="text" name="tanggal2" class="form-control datepicker"  data-date-format="yyyy-mm-dd" placeholder="Tanggal Mulai">
                                    </div>
                                    <button class="btn btn-success btn-sm" type="submit" name="submit">Cetak</button>

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
												 <th>Tanggal</th>
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