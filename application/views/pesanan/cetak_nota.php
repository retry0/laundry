                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                             <small><font color='green'>Cetak Nota </font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('pesanan/cetak_notapdf', array('class'=>'form-inline')); ?>
                                    <div class="form-group">
                                        <label for="exampleInputName2">No Nota</label>
                                        <input type="text" name="no_nota" class="form-control" placeholder="No Nota">
                                    </div>
                                   
                                    <button class="btn btn-primary btn-sm" type="submit" name="submit">Cetak</button>
                                  <?php //echo anchor( 'pesanan/cetak_notapdf','Cetak',array('class'=>'btn btn-success btn-sm')); ?> 


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
												 <th>No Nota</th>
												 <th>No Pelanggan</th>
                                                <th>Tanggal Masuk</th>
												<th>Tanggal Selesai</th>
                                                <th>Status Barang</th>
												<th>Berat</th>
												<th>Jasa</th>
												<th>Harga</th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $total=0; foreach ($record->result() as $r){ ?>
                                            <tr class="gradeU">

                                                <td><?php echo $r->no_nota ?></td>
                                                <td><?php echo $r->no_pelanggan ?></td>
                                                <td><?php echo $r->tanggal_masuk?></td>
												<td><?php echo $r->tanggal_selesai?></td>
												<td><?php echo $r->status_barang?></td>
												<td><?php echo $r->jumlah?></td>
												<td><?php echo $r->nama_barang?></td>
												<td>Rp. <?php echo number_format($r->harga,2) ?></td>
												
                                            </tr>
										<?php $total=$total+($r->jumlah*$r->harga);} ?>
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