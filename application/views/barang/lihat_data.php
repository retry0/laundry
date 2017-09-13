 <script>
function  hapusData() {
 tanya=confirm("Apa Anda Ingin Menghapus Data Ini ?");
 if (tanya==true) return true;
 else return false;
}
</script>

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'> Jasa</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('barang/post','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Jasa</th>
                                                <th>Kategori</th>
												 <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_barang ?></td>
                                                <td><?php echo $r->nama_kategori ?></td>
												<td>Rp. <?php echo number_format($r->harga,2) ?></td>
                                                <td class="center">
                                                  <?php echo anchor( 'barang/edit/'.$r->barang_id,'Edit',array('class'=>'btn btn-primary btn-sm')); ?> 
                                                    <a onclick = "return  hapusData()"<?php echo anchor('barang/delete/'.$r->barang_id,'Delete',array('class'=>'btn btn-danger btn-sm'));?>
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


