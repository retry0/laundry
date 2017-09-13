<?php
class password extends ci_controller{
    
   function __construct() {
        parent::__construct();
		 $this->load->model('model_user');
        chek_session();//memerikasa session
    }
	
	function index(){
		    $this->home->load('home','user/ubah_password',$data);

    }
	public function save_password()
 {
  $this->form_validation->set_rules('new','New','required|alpha_numeric');
  $this->form_validation->set_rules('re_new', 'Retype New', 'required|matches[new]');
    if($this->form_validation->run() == FALSE)
  {
    $this->home->load('home','user/ubah_password');
  }else{
   $cek_old = $this->model_user->cek_old();
   if ($cek_old == False){
    $this->session->set_flashdata('error','Salah memasukkan password lama!' );
     $this->home->load('home','user/ubah_password');
   }else{
    $this->model_user->save();
			 $this->session->sess_destroy();
    $this->session->set_flashdata('error','Password berhasil diubah!' );
				redirect("masuk");
   }//end if valid_user
  }
 }
}
   