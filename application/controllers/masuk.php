<?php
class masuk extends CI_Controller{
    //fungis konstruktor yang akan membuat model user untuk controller masuk
    function __construct() {
        parent::__construct();
        $this->load->model('model_user');//akan meload atau membuka model user kerena untuk masuk kedatabase user
    }
	function index(){
		//menampung captcha yang ada di controller masuk
		$data['captcha'] = $this->model_user->generate_captcha();
       $this->load->view('tampilan_login',$data);
    }
	//fungsi membuat captcha
	function generate_captcha()
	{		
		$vals = array(
			'img_path' => './captcha/',//letak gambar captcha disimpan
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
	//fungsi login ke dalam sistem dan memebuat sesssion
    function login()
    {
        if(isset($_POST['submit'])){//jika data username dan password ditekan login maka fungsi login akan memeriksa database user 
            
            // proses post login disini
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
			$expiration = time()-3600;
		$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);		
		$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND captcha_time > ?";
		$binds = array($_POST['captcha'], $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();
		if ($row->count == 0)
		{
			$this->session->set_flashdata('result', 'Captcha yang dimasukkan salah');//jika captcha salah maka 
			redirect("dashboard");
		}
		else
		{
			$this->model_user->login($d);//membuat model user pada fungsi login
		}
            $hasil=  $this->model_user->login($username,$password);//membuat model user dan login berdasarkan username dan password yg dimasukkan
            if($hasil)
            {//membuat session
				 $sess_array = array();
				 foreach($hasil as $row) {
					 //create the session
                $sess_array = array(
				'ID' => $row->user_id,
				'NAME'=>$row->nama_lengkap,
                'USERNAME' => $row->username,
                'PASS'=>$row->password,
				 'EMAIL'=>$row->email,
                'LEVEL' => $row->level,
				'Last'=> $row->last_login,
                'status_login'=>true,
				  );
				  //update session login,jika masuk lagi langsung ke sistem aplikasi
				 $this->db->where('username',$username);
                $this->db->update('user',array('last_login'=>date('Y-m-d')));
                $this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
				$this->session->set_userdata($sess_array);
			    $this->session->set_flashdata('Anda Berhasil Login ');//jika berhasil masuk
				    redirect('dashboard');
				 }
				 } else {
					  $this->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');//jika tidak berhasil masuks
					 redirect('masuk');
            }
		}
		else{
            //$this->load->view('form_login2');
            chek_session_login();
               $this->load->view('tampilan_login');
        }
		}
		//fungsi jika user lupa dengan password maka membuat view lupa password
    function oh_saya_lupa(){
		$this->session->sess_destroy();
		$this->load->view('v_lupa_password');
	}
	function send_email(){
		echo $this->load->library('email');
	}
	//fungsi jika berhasil mememriksa lupa password dan menampilkan password tersebut
	function lihat_pass(){
		$this->load->model("model_user");
		$this->model_user->lihat_pass();		
	}
	//fungsi menampilkan password yang lupa oleh user
	function result_pass(){
		 redirect('masuk');
	}
	//fungsi logout dan menghancurkan semua session dan kembali ke tampilan_login
	function logout()
    {
		 $this->session->sess_destroy();
		 $this->session->set_flashdata('sukses','Anda berhasil logout');
        redirect('masuk');
    }
}