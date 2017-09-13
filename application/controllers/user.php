<?php
class user extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_user');//akan membuka model user untuk database
        chek_session();//memerikasa session
    }
    
    function index()
    {
        $data['record']=  $this->model_user->tampildata();
        //$this->load->view('user/lihat_data',$data);
        $this->home->load('home','user/lihat_data',$data);
    }
    
   function post()
    {
        if(isset($_POST['submit'])){
            // proses data
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
			 $email   =  $this->input->post('email',true);
            $password   =  $this->input->post('password',true);
			$level   =  $this->input->post('level',true);
            $data       =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'password'=>md5($password),
									'level'=>$level);
		        
            $this->db->insert('user',$data);
            redirect('user');
        }
        else{
            //$this->load->view('user/form_input');
            $this->home->load('home','user/form_input');
        }
    }
    
    function edit()//fungsi ubah data user
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $id         =  $this->input->post('id',true);
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
						 $email   =  $this->input->post('email',true);
            $password   =  $this->input->post('password',true);
            if(empty($password)){//jika tidak mengisi data
                 $data  =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username
									);
            }
            else{
                  $data =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'password'=>md5($password)
									);
            }
             $this->db->where('user_id',$id);//memasukkan data user berdasarkan user id
             $this->db->update('user',$data);
             redirect('user');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_user->get_one($id)->row_array();
            //$this->load->view('user/form_edit',$data);
            $this->home->load('home','user/form_edit',$data);//membuka kembali form edit difolder views/user/form edit
        }
    }
    
    
    function delete() //fungsihapus user 
    {
        $id=  $this->uri->segment(3);
        $this->db->where('user_id',$id);//delete user berdasarkan user id
        $this->db->delete('user');
        redirect('user');
    }
}