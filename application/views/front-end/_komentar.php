      <div class="col-sm-4 sidebar" style="padding-right: 20px;">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Komentar Terbaru</h3>
          </div>
          <div class="panel-body">
            <?php foreach ($k->result() as $r) { ?>
              <blockquote style="padding:0 10px;">
                <p><?=$r->nama ?></p>
                <footer><?=$r->komentar ?> <cite title="Source Title"></cite></footer>
              </blockquote>
            <?php } ?>
          </div>
        </div>

      </div>
      <!-- ./SIDEBAR -->

      <div class="col-sm-8 content">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Komentar</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" method="POST" action="<?=base_url().'web/komentar'?>">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Anda</label>
                <div class="col-sm-10">
                  <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input name="email" type="email" class="form-control" placeholder="Email" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Website</label>
                <div class="col-sm-10">
                  <input name="website" type="text" class="form-control" placeholder="http://" >
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Isi Komentar</label>
                <div class="col-sm-10">
                  <textarea name="komentar" class="form-control" placeholder="Masukan komentar anda disini!" required=""></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button name="kirim" type="submit" class="btn btn-primary btn-flat"><i class="fa  fa-paper-plane-o"></i> Kirim Komentar</button>
                  <button type="reset" class="btn btn-danger btn-flat"><i class="fa fa-retweet"></i> Batal</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- ./CONTENT -->

     
