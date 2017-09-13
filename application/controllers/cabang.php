<?php
class Cabang extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_cabang');//akan meload model dari modelbarang 
        chek_session();//memeriksa session dari barang
    }


    function index()
    {
        $data['record'] = $this->model_cabang->tampil_data();
        $this->home->load('home','cabang/lihat_data',$data);
    }
    
    function post()//fungsi post barang
    {
        if(isset($_POST['submit'])){
            // proses barang
			$nama       =   $this->input->post('nama');
            $kategori   =   $this->input->post('kategori');
			$alamat   =   $this->input->post('alamat');
			$telp   =   $this->input->post('telp');
            $data       = array('nama'=>$nama,
                                'kategori'=>$kategori,
								'alamat'=>$alamat,
								'telp'=>$telp
                                );
			
            $this->model_cabang->post($data);
            redirect('cabang');//akan diarahkan ke controoler barang
        }
        else{
            $this->load->model('model_kategori_cabang');//jika tidak akan mebuka model kategori
            $data['kategori']=  $this->model_kategori_cabang->tampilkan_data()->result();
            $this->home->load('home','cabang/form_input',$data);//akan membuka form input pada folder views/barang/form input
        }
    }
    
    
    function edit()//fungsi edit
    {
       if(isset($_POST['submit'])){
            // proses barang
			    $id         =   $this->input->post('id');
           $nama       =   $this->input->post('nama');
            $kategori   =   $this->input->post('kategori');
			$alamat   =   $this->input->post('alamat');
			$telp   =   $this->input->post('telp');
            $data       = array('nama'=>$nama,
                                'kategori'=>$kategori,
								'alamat'=>$alamat,
								'telp'=>$telp
                                );
            $this->model_cabang->edit($data,$id);
            redirect('cabang');//akan diarahkan ke controoler barang
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_kategori_cabang');
            $data['kategori']   =  $this->model_kategori_cabang->tampilkan_data()->result();
            $data['record']     =  $this->model_cabang->get_one($id)->row_array();
            //$this->load->view('cabang/form_edit',$data);
            $this->home->load('home','cabang/form_edit',$data);//akan membuka form input pada folder views/barang/form edit
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_cabang->delete($id);
        redirect('cabang');//akan diarahkan ke controoler barang
    }
}