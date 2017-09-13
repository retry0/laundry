<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('model_daftar'); //call model
     }
 function index(){
	 $data['captcha'] = $this->model_daftar->generate_captcha();
        $this->template->load('front-end/_template','front-end/_tampilan_daftar',$data);
    }
	
	function generate_captcha()
	{		//$d['captcha'] = $this->model_user->generate_captcha();

		$vals = array(
			'img_path' => './captcha/',
			'img_url' => base_url().'captcha/',
			'font_path' => './system/fonts/impact.ttf',
			'img_width' => '150',
			'img_height' => 40
			);
		$cap = create_captcha($vals);
		$datamasuk = array(
			'captcha_time' => $cap['time'],
			//'ip_address' => $this->input->ip_address(),
			'word' => $cap['word']
			);
		$expiration = time()-3600;
		$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);
		$query = $this->db->insert_string('captcha', $datamasuk);
		$this->db->query($query);
		return $cap['image'];
	}
    function daftar() {
		  $this->form_validation->set_rules('nama_lengkap', 'NAMA_LENGKAP','required');
         $this->form_validation->set_rules('username', 'USERNAME','required');
		 $this->form_validation->set_rules('email','EMAIL','required');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             function index(){
				
    }
		 $expiration = time()-3600;
		$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);
		$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND captcha_time > ?";
		$binds = array($_POST['captcha'], $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();
		if ($row->count == 0)
		{
			$this->session->set_flashdata('result', 'Captcha tidak valid');
			redirect("register");
		}
		else
		{
			$this->model_daftar->daftar();
		}
         }else{
 
             $data['nama_lengkap']   =    $this->input->post('nama_lengkap');
             $data['username'] =    $this->input->post('username');
			 			 $data['email'] =    $this->input->post('email');
			 $data['level'] =    $this->input->post('level');
             $data['password'] =    md5($this->input->post('password'));
             $this->model_daftar->daftar($data);
             $pesan['message'] =    "Pendaftaran berhasil";
			  $this->template->load('front-end/_template','front-end/_notif_pendaftaran',$pesan);
         }
     }
 }
