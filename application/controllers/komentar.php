<?php
class komentar extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_komentar');//untuk membuka model kategori difoler model
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/komentar/index/';
        $config['total_rows'] = $this->model_komentar->tampilkan_data()->num_rows();
        $config['per_page'] = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_komentar->tampilkan_data_paging($halaman,$config['per_page']);
        $this->home->load('home','komentar/lihat_data',$data);//membuka tampilan difolder view/kategori/lihat data
    }
	function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_komentar->delete($id);
        redirect('komentar');
    }
}