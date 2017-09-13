                
				 <script>
function hapusData() {
 tanya=confirm("Apa Anda Ingin Menghapus Data Ini ?");
 if (tanya==true) return true;
 else return false;
}
</script><div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <small><font color='green'>Kategori Jasa</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
							<!-- /. jika menekan data maka fungsi controller kategori dan kelas post akan bekerja -->
                                 <?php echo anchor('kategori/post','Tambah Data',array('class'=>'btn btn-primary btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_kategori ?></td>
                                                <td class="center">
												<!-- /. jika menekan data maka fungsi controller kategori dan kelas edit akan bekerja -->
                                                    <?php echo anchor('kategori/edit/'.$r->kategori_id,'Edit',array('class'=>'btn btn-primary btn-sm')); ?>
													<!-- /. jika menekan data maka fungsi controller kategori dan kelas delete akan bekerja -->
													  <a onclick = "return hapusData()"<?php echo anchor('kategori/delete/'.$r->kategori_id,'Delete',array('class'=>'btn btn-danger btn-sm'));?>
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
