                 <script>
function hapusBarang() {
 tanya=confirm("Apa Anda Ingin Menghapus Data Ini ?");
 if (tanya==true) return true;
 else return false;
}
</script>
				<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'> Lokasi Cabang</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('cabang/post','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
												<th>Kota Cabang</th>
                                                <th>Nama Cabang</th>
												<th>Alamat Cabang</th>
												<th>No Telepon Cabang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
												      <td><?php echo $r->nama_kategori ?></td>
                                                <td><?php echo $r->nama ?></td>
												<td><?php echo $r->alamat ?></td>
												<td><?php echo $r->telp ?></td>
                                                <td class="center">
                                                  <?php echo anchor( 'cabang/edit/'.$r->lokasi_id,'Edit',array('class'=>'btn btn-primary btn-sm')); ?> 
                                                    <a onclick = "return  hapusData()"<?php echo anchor('cabang/delete/'.$r->lokasi_id,'Delete',array('class'=>'btn btn-danger btn-sm'));?>
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


