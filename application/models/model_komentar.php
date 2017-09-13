<?php
class Model_komentar extends CI_Model{
    
    function tampilkan_data(){
        
        return $this->db->get('komentar');
    }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from komentar");//fungsi sql 
  }
    
    
    function get_one($id)
    {
        $param  =   array('id_komentar'=>$id);
        return $this->db->get_where('komentar',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_komentar',$id);
        $this->db->delete('komentar');
    }
}