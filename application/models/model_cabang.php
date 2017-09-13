<?php
class model_cabang extends ci_model{
    
    
    function tampil_data()
    {//fungsi sql database
        $query= "SELECT b.lokasi_id,b.nama,b.alamat,b.telp,b.latittude,b.longitude,kb.kategori_id,kb.nama_kategori
                FROM lokasi as b,kategori as kb
                WHERE b.kategori=kb.kategori_id";
        return $this->db->query($query);
    }
    
    function post($data)
    {
        $this->db->insert('lokasi',$data);//fungsi masukkan data barang didatabase
    }
    
    function get_one($id)
    {
        $param  =   array('lokasi_id'=>$id);//berdasarkan barang id
        return $this->db->get_where('lokasi',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('lokasi_id',$id);
        $this->db->update('lokasi',$data);
    }
    
    
    function delete($id) //fungsi hapus barang 
    {
        $this->db->where('lokasi_id',$id);//berdasarkan barang id
        $this->db->delete('lokasi');
    }
}