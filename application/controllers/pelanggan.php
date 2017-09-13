<?php
class pelanggan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_pelanggan');//untuk membuka model kategori difoler model
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/keluhan/index/';
        $config['total_rows'] = $this->model_pelanggan->tampilkan_data()->num_rows();
        $config['per_page'] = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
		$data['no_pelanggan'] = $this->model_pelanggan->get_no_pelanggan();
        $data['record']     =    $this->model_pelanggan->tampilkan_data_paging($halaman,$config['per_page']);
        $this->home->load('home','pelanggan/form_input',$data);//membuka tampilan difolder view/kategori/lihat data
    }
    
	function lihat_data(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/keluhan/index/';
        $config['total_rows'] = $this->model_pelanggan->tampilkan_data()->num_rows();
        $config['per_page'] = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_pelanggan->tampilkan_data_paging($halaman,$config['per_page']);
        $this->home->load('home','pelanggan/lihat_data',$data);//membuka tampilan difolder view/kategori/lihat data
    }
	
	
    function post()
    {
        if(isset($_POST['submit'])){//jika memasukkan kategori atauinput kategori
            // proses kategori
            $this->model_pelanggan->post();
            redirect('pelanggan');//akan diarahkan ke controller
        }
    }
    function edit()//fungsi ubah kategori
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $this->model_pelanggan->edit();
            redirect('pelanggan');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_pelanggan->get_one($id)->row_array();
            //$this->load->view('keluhan/form_edit',$data);
            $this->home->load('home','pelanggan/form_edit',$data);
        }
    }
	function tampil_laporan_pelanggan()//fungsi cetak laporan
    {
        if(isset($_POST['submit']))
        {
            $tanggal1=  $this->input->post('tanggal1');//berdasarkan tanggal
			$tanggal2=  $this->input->post('tanggal2');//berdasarkan tanggal
            $data['record']=  $this->model_pelanggan->laporan_periode($tanggal1,$tanggal2);
            $this->home->load('home','pelanggan/tampil_laporan',$data);
        }
        else
        {
            $data['record']=  $this->model_pelanggan->laporan_default();
            $this->home->load('home','pelanggan/tampil_laporan',$data);//membuka tampilan cetak pada folder view/pesanan/laporan
        }
	}
	
	function cetak_laporan_pelanggan()//fungsi cetak laporan
    {
        if(isset($_POST['submit']))
        {
            $tanggal1=  $this->input->post('tanggal1');//berdasarkan tanggal
			$tanggal2=  $this->input->post('tanggal2');//berdasarkan tanggal
            $data['record']=  $this->model_pelanggan->laporan_periode($tanggal1,$tanggal2);
            $this->home->load('home','pelanggan/cetak_laporan',$data);
        }
        else
        {
            $data['record']=  $this->model_pelanggan->laporan_default();
            $this->home->load('home','pelanggan/cetak_laporan',$data);//membuka tampilan cetak pada folder view/pesanan/laporan
        }
	}
	function cetak_laporan_pelanggan_pdf()
    {
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Text(10, 10, 'LAPORAN PELANGGAN');
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(12);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Cell(10, 7, 'No', '',0);
        $pdf->Cell(30, 7, 'No Pelanggan', '',0);
        $pdf->Cell(23, 7, 'Nama', '',0);
		$pdf->Cell(40, 7, 'Telepon', '',0);
		$pdf->Cell(29, 7, 'Alamat', '',0);
		$pdf->Cell(32, 7, 'Tanggal', '',0);
	
		// tampilkan dari database
        $pdf->SetFont('Arial','','L');
		$tanggal1=  $this->input->post('tanggal1');
		$tanggal2=  $this->input->post('tanggal2');
        $data=  $this->model_pelanggan->laporan_periode($tanggal1,$tanggal2);
        $no=1;
        $total=0;
        foreach ($data->result() as $r)
        {
			$pdf->Ln(6);
            $pdf->Cell(10, 7, $no, '',0);
            $pdf->Cell(30, 7, $r->no_pesanan, '',0);
            $pdf->Cell(23, 7, $r->nama, '',0);
			$pdf->Cell(40, 7, $r->telp, '',0);
		    $pdf->Cell(29, 7, $r->alamat, '',0);
             $pdf->Cell(32, 7, $r->tanggal_pesanan, '',0);
            $no++;
        }
		  $pdf->Output();
}
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_pelanggan->delete($id);
        redirect('pelanggan');
    }
}