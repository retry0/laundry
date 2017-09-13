<?php
class model_barang extends ci_model{
    
    
    function tampil_data()
    {//fungsi sql database
        $query= "SELECT b.barang_id,b.nama_barang,b.harga,kb.nama_kategori
                FROM barang as b,kategori_barang as kb
                WHERE b.kategori_id=kb.kategori_id";
        return $this->db->query($query);
    }
    
    function post($data)
    {
        $this->db->insert('barang',$data);//fungsi masukkan data barang didatabase
    }
    
    function get_one($id)
    {
        $param  =   array('barang_id'=>$id);//berdasarkan barang id
        return $this->db->get_where('barang',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('barang_id',$id);
        $this->db->update('barang',$data);
    }
    
    function tampilkan_data(){
        
        return $this->db->get('barang');
    }
    function delete($id) //fungsi hapus barang 
    {
        $this->db->where('barang_id',$id);//berdasarkan barang id
        $this->db->delete('barang');
    }
}