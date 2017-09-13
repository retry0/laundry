                                
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
                            <small><font color='green'>Keluhaan Pelanggan</font></small>
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
                                                <th>No Pesanan</th>
												<th>Nama Lengkap</th>
												<th>Keluhaan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->no_pelanggan ?></td>
												<td><?php echo $r->nama_lengkap ?></td>
												<td><?php echo $r->nama_keluhaan ?></td>
                                               
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
