<?php
class keluhaan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_keluhaan');//untuk membuka model kategori difoler model
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/keluhan/index/';
        $config['total_rows'] = $this->model_keluhaan->tampilkan_data()->num_rows();
        $config['per_page'] = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
		$data['no_keluhan'] = $this->model_keluhaan->get_no_keluhan();
        $data['record']     =    $this->model_keluhaan->tampilkan_data_paging($halaman,$config['per_page']);
        $this->home->load('home','keluhaan/form_input',$data);//membuka tampilan difolder view/kategori/lihat data
    }
    
	function lihat_data(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/keluhan/index/';
        $config['total_rows'] = $this->model_keluhaan->tampilkan_data()->num_rows();
        $config['per_page'] = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_keluhaan->tampilkan_data_paging($halaman,$config['per_page']);
        $this->home->load('home','keluhaan/lihat_data',$data);//membuka tampilan difolder view/kategori/lihat data
    }
	
	
    function post()
    {
        if(isset($_POST['submit'])){//jika memasukkan kategori atauinput kategori
            // proses kategori
            $this->model_keluhaan->post();
            redirect('keluhaan');//akan diarahkan ke controller
        }
    }
    function edit()//fungsi ubah kategori
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $this->model_keluhan->edit();
            redirect('keluhan');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_keluhan->get_one($id)->row_array();
            //$this->load->view('keluhan/form_edit',$data);
            $this->home->load('home','keluhan/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_keluhan->delete($id);
        redirect('keluhan');
    }
}