 <div class="col-sm-4 sidebar">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Cabang</h3>
          </div>
          <div class="panel-body">
            <?php foreach ($l->result() as $r) { ?>
              <blockquote style="padding:0 10px;">
			  <p><?=$r->nama_kategori ?></p>
                <p><?=$r->nama ?></p>
                <footer><?=$r->alamat ?> <cite title="Source Title"><?=$r->telp ?></cite></footer>
              </blockquote>
            <?php } ?>
          </div>
        </div>

      </div>
      <!-- ./SIDEBAR -->

      <div class="col-sm-8 content">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Daftar Lokasi</h3>
          </div>
          <div class="panel-body" style="padding:10px 0 0 0;">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
					<th width="25%">Kota Cabang</th>
                    <th width="25%">Nama cabang</th>
                    <th>Alamat</th>
					<th>No Telepon </th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($l->result() as $r){ ?>
                <tr>
                    <td><?=$no; ?></td>
					<td><?=$r->nama_kategori ?></td>
                    <td><?=$r->nama ?></td>
                    <td><?=$r->alamat ?></td>
					<td><?=$r->telp ?></td>
             
                </tr>
                <?php $no++; } ?>
            </table>
          </div>
        </div>
      </div>
      <!-- ./CONTENT -->