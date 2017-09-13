<?php
class model_pesanan extends ci_model
{
    
    
    function simpan_barang()//fungsi
    {   $no_pelanggan = $this->input->post('no_pelanggan');
	$nama = $this->input->post('nama');
	$telp = $this->input->post('telp');
		$no_nota = $this->input->post('no_nota');
		$nama_cabang    =  $this->input->post('nama_cabang');
        $nama_barang1    =  $this->input->post('barang');
        $jumlah1            =  $this->input->post('jumlah');
		$alamat1         =        $this->input->post('alamat');
			$antar_jemput1         =        $this->input->post('antar_jemput');
			$bayar         =        $this->input->post('bayar');
			$tanggal_masuk         =        $this->input->post('tanggal_masuk');
			$tanggal_selesai         =        $this->input->post('tanggal_selesai');
			$tanggal_bayar         =        $this->input->post('tanggal_bayar');
						$status_barang         =        $this->input->post('status_barang');
        $idbarang       = $this->db->get_where('barang',array('nama_barang'=>$nama_barang1))->row_array();
        $data           = array('barang_id'=>$idbarang['barang_id'],//mneyimpan data berdasarkan idbarang
                                'no_nota'=>$no_nota,
								'nama_cabang'=>$nama_cabang,
								'no_pelanggan'=>$no_pelanggan,
								'jumlah'=>$jumlah1,
								'alamat'=>$alamat1,
								'tanggal_masuk'=>$tanggal_masuk,
								'tanggal_selesai'=>$tanggal_selesai,
								'tanggal_bayar'=>$tanggal_bayar,
								'status_barang'=>$status_barang,
                                'harga'=>$idbarang['harga'],
								'bayar'=>$bayar,
                                'status'=>'0');
        $this->db->insert('pesanan_detail',$data);
		$data1           = array(//mneyimpan data berdasarkan idbarang
                                'no_pesanan'=>$no_pelanggan,
								'nama'=>$nama,
								 'antar_jemput'=>$antar_jemput1,
								'alamat'=>$alamat1,
								'telp'=>$telp,
								'tanggal_pesanan'=>$tanggal_masuk
                                );
		$this->db->insert('pelanggan',$data1);//memasukkan ke database table pesanan detail
    }
    
	 function edit($data,$id,$id1)
    {
		
		  $this->db->where('p_detail_id',$id);
        $this->db->update('pesanan_detail',$data);
		}
    
	
    function tampilkan_detail_pesanan()
    {//fungsi sql
        $query  ="SELECT td.p_detail_id,td.no_pelanggan,td.no_nota,td.alamat,td.antar_jemput,td.jumlah,td.harga,td.tanggal_masuk,td.tanggal_selesai,td.tanggal_bayar,td.bayar,td.status_barang,b.nama_barang
                FROM pesanan_detail as td,barang as b
                WHERE b.barang_id=td.barang_id and td.status='0'";
        return $this->db->query($query);
    }
	function detail_pesanan_selesai2($tanggal1,$tanggal2)
    {//fungsi sql
        $query  ="SELECT td.p_detail_id,td.no_pelanggan,td.no_nota,td.alamat,td.antar_jemput,td.jumlah,td.harga,td.tanggal_masuk,td.tanggal_selesai,td.tanggal_bayar,td.bayar,td.status_barang,b.nama_barang
                FROM pesanan_detail as td,barang as b
                WHERE b.barang_id=td.barang_id and td.status='1'
				and td.tanggal_masuk between '$tanggal1' and '$tanggal2'
                group by td.p_detail_id";
        return $this->db->query($query);
    }
	
	 function detail_pesanan_selesai()
    {//fungsi sql
        $query  ="SELECT td.p_detail_id,td.no_pelanggan,td.no_nota,td.alamat,td.antar_jemput,td.jumlah,td.harga,td.tanggal_masuk,td.tanggal_selesai,td.tanggal_bayar,td.bayar,td.status_barang,b.nama_barang
                FROM pesanan_detail as td,barang as b
                WHERE b.barang_id=td.barang_id and td.status='1'";
        return $this->db->query($query);
    }
    
    
    function hapusitem($id)//fungsi hapus barang
    {
        $this->db->where('p_detail_id',$id);
        $this->db->delete('pesanan_detail');
    }
    
	
    
    function selesai_belanja($data)//jika sudah menekan submit
    {
        $this->db->insert('pesanan',$data);
        $last_id=  $this->db->query("select pesanan_id from pesanan order by pesanan_id desc")->row_array();
        $this->db->query("update pesanan_detail set pesanan_id='".$last_id['pesanan_id']."' where status='0'");//untuk update pesanan berdasarkan pesanan id ketika belum dibayar
        $this->db->query("update pesanan_detail set status='1' where status='0'");//ketika mengklik tombol selesai
    }
    
	
	 function get_one($id)
    {
        $param  =   array('p_detail_id'=>$id);
        return $this->db->get_where('pesanan_detail',$param);
    }
	
	 public function get_no_nota() {
	 //$tahun =date("D");
  $kode = 'T';
  //membaca kode nota terbesar
  $query = $this->db->query("SELECT MAX(no_nota) as maxkode FROM pesanan_detail"); 
  $row = $query->row_array();
  $data = $row['maxkode']; 
  // mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'N001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
  $no_nota =(int) substr($data,3,3);
  // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
  $no_nota++;
  // membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
  $maxno_nota = $kode.'-'.sprintf("%03s",$no_nota);
  return $maxno_nota;
 }
 public function get_no_pelanggan() {
  $kode = 'P';
  $query = $this->db->query("SELECT MAX(no_pesanan) as maxkode FROM pelanggan"); 
  $row = $query->row_array();
  $data = $row['maxkode']; 
  $no_pelanggan =(int) substr($data,3,3);
  $no_pelanggan++;
  $maxno_nota = $kode.'-'.sprintf("%03s",$no_pelanggan);
  return $maxno_nota;
 }
	  function laporan_keuangan1()
    {
        $query=
				"SELECT td.p_detail_id,td.jumlah,td.harga,td.tanggal_masuk,td.bayar,b.nama_barang
                FROM pesanan_detail as td,barang as b
                WHERE b.barang_id=td.barang_id and td.status='1'";
        return $this->db->query($query);
    }
    
	function cetak_nota()
    {
        $query="SELECT td.p_detail_id,td.no_pelanggan,td.no_nota,td.alamat,td.antar_jemput,td.jumlah,td.harga,td.tanggal_masuk,td.tanggal_selesai,td.status_barang,b.nama_barang
                FROM pesanan_detail as td,barang as b
                WHERE b.barang_id=td.barang_id and td.status='0'";
        return $this->db->query($query);
    }
	function laporan_keuangan2($tanggal1,$tanggal2)
    {
        $query="SELECT td.p_detail_id,td.jumlah,td.harga,td.tanggal_masuk,sum(td.harga*td.jumlah) as total,td.bayar,b.nama_barang
                FROM pesanan_detail as td,barang as b
                WHERE b.barang_id=td.barang_id and td.status='1'
                and td.tanggal_masuk between '$tanggal1' and '$tanggal2'
                group by td.p_detail_id";
        return $this->db->query($query);
    }
	
	 function cetak_nota1()
    {
        $query=
				"SELECT td.p_detail_id,td.no_nota,td.no_pelanggan,td.jumlah,td.harga,td.tanggal_masuk,td.tanggal_selesai,td.status_barang,td.status,b.nama_barang
                FROM pesanan_detail as td,barang as b
                WHERE b.barang_id=td.barang_id and td.status='1'";
        return $this->db->query($query);
    }
	
	function cetak_nota2($no_nota)
    {
        $query="SELECT td.p_detail_id,td.no_nota,td.no_pelanggan,td.status,td.status_barang,td.jumlah,td.harga,sum(td.harga*td.jumlah) as total,td.tanggal_masuk,td.tanggal_selesai,b.nama_barang
                FROM pesanan_detail as td,barang as b
                WHERE b.barang_id=td.barang_id and td.status='1'
                and td.no_nota='$no_nota'
                group by td.p_detail_id";
        return $this->db->query($query);
    }
	
	function laporan_keuangan_cabang1()
    {
        $query=
				"SELECT td.p_detail_id,td.nama_cabang,td.jumlah,td.harga,td.bayar,b.nama_barang
                FROM pesanan_detail as td,barang as b
                WHERE b.barang_id=td.barang_id and td.status='1'";
        return $this->db->query($query);
    }
	
	function laporan_keuangan_cabang2($cabang)
    {
        $query="SELECT td.p_detail_id,td.jumlah,td.harga,td.nama_cabang,sum(td.harga*td.jumlah) as total,td.bayar,b.nama_barang
                FROM pesanan_detail as td,barang as b
                WHERE b.barang_id=td.barang_id and td.status='1'
                and td.nama_cabang='$cabang'
                group by td.p_detail_id";
        return $this->db->query($query);
    }
	function manualQuery($q)
	{
		return $this->db->query($q);
	}
}
?>
