<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {


	public function index()
	{
		$data['l'] = $this->db->query("SELECT b.lokasi_id,b.nama,b.alamat,b.telp,b.latittude,b.longitude,kb.kategori_id,kb.nama_kategori
                FROM lokasi as b,kategori as kb
                WHERE b.kategori=kb.kategori_id");
		$this->template->load('front-end/_template','front-end/_home',$data);
	}
	public function profil()
	{
		$this->template->load('front-end/_template','front-end/_profil');
	}
	
	public function layanan()
	{
		$this->template->load('front-end/_template','front-end/_layanan');
	}
	
	public function layanankilo()
	{
		$this->template->load('front-end/_template','front-end/_layanankilo');
	}

	public function lokasi()
	{
		$data['l'] = $this->db->query("SELECT b.lokasi_id,b.nama,b.alamat,b.telp,b.latittude,b.longitude,kb.kategori_id,kb.nama_kategori
                FROM lokasi as b,kategori as kb
                WHERE b.kategori=kb.kategori_id");
		$this->template->load('front-end/_template','front-end/_lokasi',$data);
	}

	public function lokasi_one($id)
	{
		$data['lo'] = $this->db->get_where("lokasi",array("id"=>$id))->row_array();
		$this->template->load('front-end/_template','front-end/_lokasi_one',$data);
	}
	
	public function harga()
	{
		$data['h'] = $this->db->query("SELECT b.barang_id,b.nama_barang,b.harga,kb.nama_kategori
                FROM barang as b,kategori_barang as kb
                WHERE b.kategori_id=kb.kategori_id" );
		$this->template->load('front-end/_template','front-end/_harga',$data);
	}

	public function komentar()
	{
		if(isset($_POST['kirim'])) {
			$data = array(
				'nama' 		=> $this->input->post('nama'),
				'email' 	=> $this->input->post('email'),
				'website' 	=> $this->input->post('website'),
				'komentar' 	=> $this->input->post('komentar'),
				);
			$this->db->insert('komentar',$data);
			redirect('web/komentar');
        }else{
        	$data['k'] = $this->db->query("SELECT * FROM komentar GROUP BY id_komentar DESC LIMIT 5");
			$this->template->load('front-end/_template','front-end/_komentar',$data);
        }
	}
}
