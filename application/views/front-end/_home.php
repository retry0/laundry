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
      <!-- ./CONTENT -->
<div class="col-sm-8 content">
        <div class="panel">
          <div class="panel-body" style="padding:10px 0 0 0;">
				<section>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
				<li data-target="#myCarousel" data-slide-to="6"></li>
				<li data-target="#myCarousel" data-slide-to="7"></li>	

			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="uploads/barang/kiloan.jpg">
					<div class="carousel-caption">
					<h3>Laundry 	Kiloan</h3>
          <p>Jasa laundry baju kiloan cocok untuk pakaian sehari-hari. Sudah termasuk cuci, gosok dan lipat. Bisa antar-jemput</p>
					</div>
				</div>
				<div class="item ">
					<img src="uploads/barang/satuan.jpg" >
					<div class="carousel-caption">
						<h3>Laundry 	Satuan</h3>
          <p>Jasa laundry satuan seperti kemeja, jas dll.  Sangat cocok untuk pakaian spesial anda. Pengerjaan yang detail, bersih  dengan harga terjangkau.</p>
					</div>
				</div>
				<div class="item">
					<img src="uploads/barang/helm.jpg" >
					<div class="carousel-caption">
					<h3>Laundry 	Helm</h3>
          <p>Banyak yang menganggap sepele kebersihan pada helm yang kita gunakan sehari-hari, tanpa kita sadari helm kotor yang sering kita pakai bisa menjadi sarang penyakit untuk kulit dan kepala kita.</p>
					</div>
				</div>
				<div class="item ">
					<img src="uploads/barang/karpet.jpg" >
					<div class="carousel-caption">
						<h3>Laundry Cuci Karpet</h3>
          <p>Kami mengerjakan cuci karpet rumah, masjid dan cuci karpet kantor, kami siap datang ke lokasi.</p>
					</div>
				</div>
				<div class="item ">
					<img src="uploads/barang/sepatu.jpg" >
					<div class="carousel-caption">
						<h3>Laundry 	Sepatu</h3>
          <p>Ingin sepatu anda selalu bersih dan wangi, kami akan membersihkan dan memberikan perawatan pada sepatu kesayangan anda.</p>
					</div>
				</div>
				<div class="item ">
					<img src="uploads/barang/bayi.jpg" >
					<div class="carousel-caption">
						<h3>Laundry 	Perlenkapan Bayi</h3>
          <p>Laundry perlengkapan bayi anda seperti stroller, box bayi dengan harga terjangkau, bersih, cepat dan kami melayani antar jemput.</p>
					</div>
				</div>
				<div class="item ">
					<img src="uploads/barang/sofa.jpg" >
					<div class="carousel-caption">
						<h3>Laundry 	Furniture</h3>
          <p>Kami mengerjakan cuci sofa, kursi kantor, spring bed dll.Kami menerima order laundry panggilan.</p>
					</div>
				</div>
	</div>
				</section>	
   </div>
             </div>
</section>	
        </div>
      </div>
      <!-- <div class="col-sm-12 banner"> -->
        <!-- <img src=" echo base_url().'assets/img/dashbord,jpg' ?>"> -->
      <!-- </div> -->

      <div class="col-sm-12 top-footer">
        <img src="<?=base_url().'uploads/' ?>footer1.png" class="img-responsive">
      </div><!-- ./ TOP-FOOTER -->
