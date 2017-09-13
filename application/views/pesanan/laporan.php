                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                             <small><font color='green'>Cetak Pelanggan perbulan</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('pesanan/cetak_laporan_pelanggan', array('class'=>'form-inline')); ?>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Tanggal Awal Bulan</label>
                                        <input type="text" name="tanggal1" class="form-control datepicker"  data-date-format="yyyy-mm-dd" placeholder="Tanggal Mulai">
                                    </div>
                                   <div class="form-group">
                                        <label for="exampleInputName2">Tanggal Akhir Bulan</label>
                                        <input type="text" name="tanggal2" class="form-control datepicker"  data-date-format="yyyy-mm-dd" placeholder="Tanggal Akhir Bulan">
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit" name="submit">Cetak</button>
									
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
												 <th>No Pelanggan</th>
                                                <th>Nama</th>
												<th>No Telp</th>
                                                <th>Alamat</th>
                                                <th>Tanggal</th>
					
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $total=0; foreach ($record->result() as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->no_pesanan ?></td>
                                                <td><?php echo $r->nama ?></td>
                                                <td><?php echo $r->telp ?></td>
												<td><?php echo $r->alamat ?></td>
										<td><?php echo $r->tanggal_pesanan ?></td>
                                            </tr>
											<?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /. TABLE  -->
                            </div>
                        </div>
                    </div>
                </div>				