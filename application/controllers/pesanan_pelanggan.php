 ob_start();
<?php
class pesanan_pelanggan extends ci_controller{
    
        function __construct() {
        parent::__construct();
					$this->load->helper('url');
        $this->load->model(array('model_barang','model_pesanan','model_pelanggan'));//akan membuka model barang dan model pesanan
        chek_session();
    }
    
    function index()
    {
        if(isset($_POST['submit']))
        {
            $this->model_pesanan->simpan_barang();
			$data['no_nota'] = $this->model_pesanan->get_no_nota();
			$data['no_pelanggan'] = $this->model_pesanan->get_no_pelanggan();
            redirect('pesanan_pelanggan');
        }
        else
        {
          $data['barang']=  $this->model_barang->tampil_data();
		  $data['no_nota'] = $this->model_pesanan->get_no_nota();
		  $data['no_pelanggan'] = $this->model_pesanan->get_no_pelanggan();
          $data['detail']= $this->model_pesanan->tampilkan_detail_pesanan()->result();
          $this->home->load('home','pesanan/form_pesanan_pelanggan',$data);
        }
    }
	


    function lihat()
    {
        $data['record'] = $this->model_pesanan->detail_pesanan_selesai();
        $this->home->load('home','pesanan/lihat_data',$data);
    }    
    
    function hapusitem()//hapus barang pesanan
    {
        $id=  $this->uri->segment(3);
        $this->model_pesanan->hapusitem($id);
        $this->model_pelanggan->delete($id);		//hapus berdasarkan id
        redirect('pesanan_pelanggan');
    }
    
      function edit()//fungsi ubah kategori
    {
		if(isset($_POST['submit'])){
            // proses barang
                       $id         =   $this->input->post('id');
			 $nama_barang    =  $this->input->post('barang');
            $no_pesanan       =   $this->input->post('no_pesanan');
            $jumlah   =   $this->input->post('jumlah');
			$alamat      =   $this->input->post('alamat');
			$tanggal_pesanan      =   $this->input->post('tanggal_pesanan');
			$idbarang       = $this->db->get_where('barang',array('nama_barang'=>$nama_barang))->row_array();
            $data       = array('barang_id'=>$idbarang['barang_id'],
                                'no_pesanan'=>$no_pesanan,
								'jumlah'=>$jumlah,
                                'alamat'=>$alamat,
								'tanggal_pesanan'=>$tanggal_pesanan);
							
            $this->model_pesanan->edit($data,$id);
            redirect('pesanan_pelanggan');//akan diarahkan ke controoler barang
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']     =  $this->model_pesanan->get_one($id)->row_array();
            //$this->load->view('barang/form_edit',$data);
            $this->home->load('home','pesanan/form_edit',$data);//akan membuka form input pada folder views/barang/form edit
        }
       
    }
    
    function selesai_belanja()//fungsi selesai_belanja
    {

        $pegawai=  $this->session->userdata('username');
        $id_op=  $this->db->get_where('user',array('username'=>$pegawai))->row_array();
        $data=array('user_id'=>$id_op['user_id']);
        $this->model_pesanan->selesai_belanja($data);
        redirect('pesanan_pelanggan');
    }
       
}
?>