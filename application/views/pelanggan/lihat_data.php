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
                            <small><font color='green'> Pelanggan</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('pelanggan','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
												<th>No Pelanggan</th>
                                                <th>Nama </th>
												<th>No Telepon</th>
												<th>Alamat</th>
												<th>Tanggal Pesanan</th>
                                                <th>Antar Jemput</th>
												<th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
												      <td><?php echo $r->no_pesanan ?></td>
                                                <td><?php echo $r->nama ?></td>
												<td><?php echo $r->telp ?></td>
												<td><?php echo $r->alamat?></td>
												<td><?php echo $r->tanggal_pesanan?></td>
												<td><?php echo $r->antar_jemput?></td>
                                                <td class="center">
                                                    <?php echo anchor('pelanggan/edit/'.$r->p_detail_id,'Edit',array('class'=>'btn btn-primary btn-sm')); ?>												
                                                    <a onclick = "return hapusData()"<?php echo anchor('pelanggan/delete/'.$r->p_detail_id,'Delete',array('class'=>'btn btn-danger btn-sm'));?>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->


