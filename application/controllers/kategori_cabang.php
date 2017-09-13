<?php
class Kategori_Cabang extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_kategori_cabang');//untuk membuka model kategori difoler model
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/kategori/index/';
        $config['total_rows'] = $this->model_kategori_cabang->tampilkan_data()->num_rows();
        $config['per_page'] = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_kategori_cabang->tampilkan_data_paging($halaman,$config['per_page']);
        $this->home->load('home','kategori_cabang/lihat_data',$data);//membuka tampilan difolder view/kategori/lihat data
    }
    
    function post()
    {
        if(isset($_POST['submit'])){//jika memasukkan kategori atauinput kategori
            // proses kategori
            $this->model_kategori_cabang->post();
            redirect('kategori_cabang');//akan diarahkan ke controller
        }
        else{
            $this->home->load('home','kategori_cabang/form_input');
        }
    }
    
    function edit()//fungsi ubah kategori
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $this->model_kategori_cabang->edit();
            redirect('kategori_cabang');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_kategori_cabang->get_one($id)->row_array();
            $this->home->load('home','kategori_cabang/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_kategori_cabang->delete($id);
        redirect('kategori_cabang');
    }
}