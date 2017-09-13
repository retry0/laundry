                                                
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
                            <small><font color='green'>Komentar Pengunjung</font></small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
							<!-- /. jika menekan data maka fungsi controller kategori dan kelas post akan bekerja -->
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
												<th>Email </th>
												<th>Website</th>
												<th>Komentar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama ?></td>
												<td><?php echo $r->email ?></td>
												<td><?php if($r->website!=NULL){echo $r->website;}else{echo "-";} ?></td>
												<td><?php echo $r->komentar ?></td>
                                                <td class="center">                                  
													<!-- /. jika menekan data maka fungsi controller kategori dan kelas delete akan bekerja -->
													 <a onclick = "return hapusData()" <?php echo anchor('komentar/delete/'. $r->id_komentar,'Hapus',array('class'=>'btn btn-danger btn-sm'));?>
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
