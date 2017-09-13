<?php
class Model_pelanggan extends CI_Model{
    
    
    
    function tampilkan_data(){
        
        return $this->db->get('pelanggan');
    }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from pelanggan");//fungsi sql 
  }
  
  public function get_no_pelanggan() {
  $kode = 'P';
  $query = $this->db->query("SELECT MAX(no_pesanan) as maxkode FROM pelanggan"); 
  $row = $query->row_array();
  $data = $row['maxkode']; 
  $no_pelanggan =(int) substr($data,3,3);
  $no_pelanggan++;
  $maxno_pelanggan = $kode.'-'.sprintf("%03s",$no_pelanggan);
  return $maxno_pelanggan;
 }
    
    function post(){
         $data=array(
		'no_pesanan'=>  $this->input->post('no_pelanggan'),
           'nama'=>  $this->input->post('nama'),
		   'telp'=>  $this->input->post('telp'),
		   'alamat'=>  $this->input->post('alamat'),
		   'tanggal_pesanan'=>  $this->input->post('tanggal_pesanan')
                    );
        $this->db->insert('pelanggan',$data);
    }
    
    
    function edit()
    {
        $data=array(
				'no_pesanan'=>  $this->input->post('no_pelanggan'),
           'nama'=>  $this->input->post('nama'),
		   'telp'=>  $this->input->post('telp'),
		   'alamat'=>  $this->input->post('alamat'),
		   'tanggal_pesanan'=>  $this->input->post('tanggal_pesanan')
                    );
        $this->db->where('p_detail_id',$this->input->post('id'));
        $this->db->update('pelanggan',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('p_detail_id'=>$id);
        return $this->db->get_where('pelanggan',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('p_detail_id',$id);
        $this->db->delete('pelanggan');
    }
	function laporan_default()
    {
        $query=
				"SELECT t.no_pesanan,t.nama,t.alamat,t.telp,t.tanggal_pesanan
                FROM pelanggan as t
                WHERE t.p_detail_id=t.p_detail_id
                group by t.p_detail_id";
        return $this->db->query($query);
    }
	function laporan_periode($tanggal1,$tanggal2)
    {
        $query="SELECT t.no_pesanan,t.nama,t.alamat,t.telp,t.tanggal_pesanan
                FROM pelanggan as t
                WHERE t.p_detail_id=t.p_detail_id
                and t.tanggal_pesanan between '$tanggal1' and '$tanggal2'
                group by t.p_detail_id";
        return $this->db->query($query);
    }
}