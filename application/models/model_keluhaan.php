<?php
class Model_keluhaan extends CI_Model{
    
    
    
    function tampilkan_data(){
        
        return $this->db->get('keluhaan_pelanggan');
    }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from keluhaan_pelanggan");//fungsi sql 
  }
  
  public function get_no_keluhan() {
  $kode = 'K';
  $query = $this->db->query("SELECT MAX(no_keluhan) as maxkode FROM keluhaan_pelanggan"); 
  $row = $query->row_array();
  $data = $row['maxkode']; 
  $no_keluhan =(int) substr($data,3,3);
  $no_keluhan++;
  $maxno_keluhan = $kode.'-'.sprintf("%03s",$no_keluhan);
  return $maxno_keluhan;
 }
    
    function post(){
        $data=array(
		'no_keluhan'=>  $this->input->post('no_keluhan'),
           'no_pelanggan'=>  $this->input->post('no_pelanggan'),
		   'nama_lengkap'=>  $this->input->post('nama_lengkap'),
		   'nama_keluhaan'=>  $this->input->post('nama_keluhaan')
                    );
        $this->db->insert('keluhaan_pelanggan',$data);
    }
    
    
    function edit()
    {
        $data=array(
				'no_keluhan'=>  $this->input->post('no_keluhan'),
          'no_pelanggan'=>  $this->input->post('no_pelanggan'),
		   'nama_lengkap'=>  $this->input->post('nama_lengkap'),
		   'nama_keluhaan'=>  $this->input->post('nama_keluhaan')
                    );
        $this->db->where('keluhaan_id',$this->input->post('id'));
        $this->db->update('keluhaan_pelanggan',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('keluhaan_id'=>$id);
        return $this->db->get_where('keluhaan_pelanggan',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('keluhaan_id',$id);
        $this->db->delete('keluhaan_pelanggan');
    }
}