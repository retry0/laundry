 <div class="col-sm-4 sidebar" style="padding-right: 20px;">
        <div class="panel">
         
          <div class="panel-body">
          
          </div>
        </div>

      </div>
      <!-- ./SIDEBAR -->

      <div class="col-sm-8 content">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Daftar Harga </h3>
          </div>
          <div class="panel-body" style="padding:10px 0 0 0;">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
					<th>Nama Barang</th>
					<th width="25%">Nama Kategori</th>
                    <th>Harga</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($h->result() as $r){ ?>
                <tr>
                    <td><?=$no; ?></td>
                    <td><?=$r->nama_barang ?></td>
					<td><?=$r->nama_kategori ?></td>
                    <td><?=$r->harga ?></td>
             
                </tr>
                <?php $no++; } ?>
            </table>
          </div>
        </div>
      </div>
      <!-- ./CONTENT -->