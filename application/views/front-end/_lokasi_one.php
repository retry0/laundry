      <div class="col-sm-12 content" style="padding-left:10px;">
        <div class="panel">
          <!-- <div class="panel-heading">
            <h3 class="panel-title">Peta Lokasi</h3>
          </div> -->
          <div class="panel-body" style="border:1px solid #ddd;padding: 0;">
            
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDj-hFGBMNwgXz91WdQn5O1N6mgxKJcX1U&callback=initMap"></script>
                  
                  <script>
                    
                    var marker;
                      function initialize() {
                      
                    // Variabel untuk menyimpan informasi (desc)
                    var infoWindow = new google.maps.InfoWindow;
                    
                    //  Variabel untuk menyimpan peta Roadmap
                    var mapOptions = {
                          mapTypeId: google.maps.MapTypeId.ROADMAP
                        } 
                    
                    // Pembuatan petanya
                    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                              
                        // Variabel untuk menyimpan batas kordinat
                    var bounds = new google.maps.LatLngBounds();

                    // Pengambilan data dari database
                    <?php
                      $id = $this->uri->segment(3);
                      $as = $this->db->query("SELECT l.id, l.nama,l.telp, l.alamat, l.latittude, l.longitude, k.nama_kategori, k.ikon FROM lokasi as l, kategori as k WHERE l.kategori=k.id AND l.id = $id");
                      foreach ($as->result() as $data) {
                        $nama   = $data->nama;
                        $alamat   = $data->alamat;
                        $telp   = $data->telp;
                        $lat    = $data->latittude;
                        $lon    = $data->longitude;
                        $icon   = $data->ikon;
                        ?>

                        var image = "<?php echo base_url().'uploads/icon/'.$icon ?> ";

                        <?php
                        
                        echo ("addMarker($lat, $lon, '<b>$nama</b><br>$alamat<br>Telp: $telp');\n"); 
                      }
                        
                    ?>
                      
                    // Proses membuat marker 
                    function addMarker(lat, lng, info) {
                      var lokasi = new google.maps.LatLng(lat, lng);
                      bounds.extend(lokasi);
                      
                      var marker = new google.maps.Marker({
                        map: map,
                        position: lokasi,
                        icon:image
                      });       
                      map.fitBounds(bounds);
                      bindInfoWindow(marker, map, infoWindow, info);
                     }
                    
                    // Menampilkan informasi pada masing-masing marker yang diklik
                        function bindInfoWindow(marker, map, infoWindow, html) {
                          google.maps.event.addListener(marker, 'click', function() {
                            infoWindow.setContent(html);
                            infoWindow.open(map, marker);
                          });
                        }
                 
                        }
                      google.maps.event.addDomListener(window, 'load', initialize);
                    
                  </script>
                  <div id="map-canvas" style="width: auto; height: 600px;"></div>
      
          </div>
        </div>
      </div>
      <!-- ./CONTENT -->

      
