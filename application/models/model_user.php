<?php
class model_user extends CI_Model{
    
    
    
    function login($username,$password)
    {
        $chek=  $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
		
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
	}
    
    
    function tampildata()
    {
        return $this->db->get('user');//akan menampilkan data user yang dipilih
    }
	
	public function save($d)
 {
  $password = md5($this->input->post('new'));
  $data = array (
   'password' => $password
   );
  $this->db->where('username', $this->session->userdata('username'));
  $this->db->update('user', $data);
 }
 
//fungsi untuk mengecek password lama :
 public function cek_old()
  {
   $old = md5($this->input->post('old'));    
   $this->db->where('password',$old);
   $query = $this->db->get('user');
      return $query->result();;
          }
	
	function generate_captcha()
	{
		create_captcha();
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
function lihat_pass(){
		$username=$this->input->post('username');
		$email=($this->input->post('email'));
		$query=$this->db->query("select * from user 
		where username='$username' and email='$email'");
 			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
 				  $this->session->set_userdata('PASSWORD_DAPAT', $data->username); 	
 				  $new_pass=md5($data->username);
 				  $this->db->query("update user set password='$new_pass' where username='$username' and email='$email'");
 				  redirect('masuk/result_pass');		
				}
			} else {
				$this->session->set_userdata('PASSWORD_DAPAT',"DATA TIDAK DITEMUKAN");
				redirect('masuk/oh_saya_lupa');
			}			
	}   
   
   public function updatePassword($post)  
   {    
     $this->db->where('user_id', $post['id_user']);  
     $this->db->update('user', array('password' => $post['password']));      
     return true;  
   }   
	
    
    function get_one($id)
    {
        $param  =   array('user_id'=>$id);//akan menampilkan user berdasarkan user id
        return $this->db->get_where('user',$param);
    }
}
?>