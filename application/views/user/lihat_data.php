                                                
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
							<small><font color='green'>User</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
							<!-- /.  jika menekan tombol Maka controller user akan bekerja pada fungsi post -->
                                 <?php echo anchor('user/post','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Lengkap</th>
                                                <th>Username</th>
												 <th>Hak Akses</th>
												 <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<!-- /. Pengulanagan untuk penomoran -->
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_lengkap ?></td>
                                                <td><?php echo $r->username ?></td>
												<td><?php echo $r->level ?></td>
                                                <td class="center">
                                                    <?php echo anchor('user/edit/'.$r->user_id,'Edit',array('class'=>'btn btn-primary btn-sm')); ?>  
                                                    <a onclick = "return hapusData()"<?php echo anchor('user/delete/'.$r->user_id,'Delete',array('class'=>'btn btn-danger btn-sm'));?>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->