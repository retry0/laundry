<?php
class Model_kategori_cabang extends CI_Model{
    
    function tampilkan_data(){
        
        return $this->db->get('kategori');
    }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from kategori");//fungsi sql 
  }
    
    function post(){
        $data=array(
          'nama_kategori'	=> $this->input->post('nama_kategori'),
                    );
        $this->db->insert('kategori',$data);
    }
    
    
    function edit()
    {
        $data=array(
           'nama_kategori'	=> $this->input->post('nama_kategori')
                    );
        $this->db->where('kategori_id',$this->input->post('id'));
        $this->db->update('kategori',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('kategori_id'=>$id);
        return $this->db->get_where('kategori',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('kategori_id',$id);
        $this->db->delete('kategori');
    }
}