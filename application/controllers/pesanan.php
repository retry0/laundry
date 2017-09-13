 ob_start();
<?php
class pesanan extends ci_controller{
    
        function __construct() {
        parent::__construct();
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
            redirect('pesanan');
        }
        else
        {
          $data['barang']=  $this->model_barang->tampil_data();
		  $data['no_nota'] = $this->model_pesanan->get_no_nota();
		  $data['no_pelanggan'] = $this->model_pesanan->get_no_pelanggan();
          $data['detail']= $this->model_pesanan->tampilkan_detail_pesanan()->result();
           $this->home->load('home','pesanan/form_pesanan',$data);
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
		        $this->model_pelanggan->delete($id);//hapus berdasarkan id
        redirect('pesanan');
    }
    
      function edit()//fungsi ubah kategori
    {
		if(isset($_POST['submit'])){
            // proses barang
                       $id         =   $this->input->post('id');
            $no_pesanan       =   $this->input->post('no_pesanan');
            $jumlah   =   $this->input->post('jumlah');
			$alamat      =   $this->input->post('alamat');
			$tanggal_masuk      =   $this->input->post('tanggal_masuk');
			$tanggal_selesai      =   $this->input->post('tanggal_selesai');
			$tanggal_bayar      =   $this->input->post('tanggal_bayar');
			$status_barang      =   $this->input->post('status_barang');
            $data       = array(
								'jumlah'=>$jumlah,
                                'alamat'=>$alamat,
								'tanggal_masuk'=>$tanggal_masuk,
								'tanggal_selesai'=>$tanggal_selesai,
								'tanggal_bayar'=>$tanggal_bayar,
								'status_barang'=>$status_barang);
							
            $this->model_pesanan->edit($data,$id,$id1);
            redirect('pesanan');//akan diarahkan ke controoler barang
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']     =  $this->model_pesanan->get_one($id)->row_array();
			            $data['barang']     =  $this->model_barang->get_one($id)->row_array();
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
        redirect('pesanan');
    }
    
    
    function laporan_pelanggan()//fungsi cetak laporan
    {
        if(isset($_POST['submit']))
        {
            $tanggal1=  $this->input->post('tanggal1');//berdasarkan tanggal
			$tanggal2=  $this->input->post('tanggal2');//berdasarkan tanggal
            $data['record']=  $this->model_pesanan->laporan_periode($tanggal1,$tanggal2);
            $this->home->load('home','pesanan/laporan',$data);
        }
        else
        {
            $data['record']=  $this->model_pesanan->laporan_default();
            $this->home->load('home','pesanan/laporan',$data);//membuka tampilan cetak pada folder view/pesanan/laporan
        }
    }
	function tampil_laporan_pelanggan()//fungsi cetak laporan
    {
        if(isset($_POST['submit']))
        {
            $tanggal1=  $this->input->post('tanggal1');//berdasarkan tanggal
			$tanggal2=  $this->input->post('tanggal2');//berdasarkan tanggal
            $data['record']=  $this->model_pesanan->laporan_periode($tanggal1,$tanggal2);
            $this->home->load('home','pesanan/tampil_laporan',$data);
        }
        else
        {
            $data['record']=  $this->model_pesanan->laporan_default();
            $this->home->load('home','pesanan/tampil_laporan',$data);//membuka tampilan cetak pada folder view/pesanan/laporan
        }
    }
	 function laporan_keuangan()//fungsi cetak laporan
    {
        if(isset($_POST['submit']))
        {
            $tanggal1=  $this->input->post('tanggal1');
			$tanggal2=  $this->input->post('tanggal2');//berdasarkan tanggal
            $data['record']=  $this->model_pesanan->laporan_keuangan2($tanggal1,$tanggal2);
            $this->home->load('home','pesanan/laporan_keuanggan',$data);
        }
        else
        {
            $data['record']=  $this->model_pesanan->laporan_keuangan1();
            $this->home->load('home','pesanan/laporan_keuanggan',$data);//membuka tampilan cetak pada folder view/pesanan/laporan
        }
    }
	function transaksi_bulan()//fungsi cetak laporan
    {
        if(isset($_POST['submit']))
        {
            $tanggal1=  $this->input->post('tanggal1');
			$tanggal2=  $this->input->post('tanggal2');//berdasarkan tanggal
            $data['record']=  $this->model_pesanan->detail_pesanan_selesai2($tanggal1,$tanggal2);
            $this->home->load('home','pesanan/transaksi_bulan',$data);
        }
        else
        {
            $data['record']=  $this->model_pesanan->detail_pesanan_selesai();
            $this->home->load('home','pesanan/transaksi_bulan',$data);//membuka tampilan cetak pada folder view/pesanan/laporan
        }
    }
	
	 function cetak_nota()//fungsi cetak laporan
    {
        if(isset($_POST['submit']))
        {
            $no_nota=  $this->input->post('no_nota');//berdasarkan tanggal
            $data['record']=  $this->model_pesanan->cetak_nota2($no_nota);
				
        }
        else
        {
            $data['record']=  $this->model_pesanan->cetak_nota1();
            $this->home->load('home','pesanan/cetak_nota',$data);//membuka tampilan cetak pada folder view/pesanan/laporan
        }
    }
	function cetak_notapdf()//fungsi cetak laporan pdf
    {
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Text(80, 10, 'LAUNDRY EXTRA QILO');
		$pdf->Ln(1);
	    $pdf->Text(62, 15, 'Ruko Air Mas Block D no 2 Batam Centre');
		$pdf->Ln(1);
		$pdf->Text(80, 20, 'Telp : 081276114950');
		$pdf->Ln(1);
		$pdf->Text(1, 25, '------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------');
		$pdf->Ln(5);
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(12);
        $pdf->Cell(20, 10,'','',1);
        $pdf->SetFont('Arial','','L');
		$no_nota=  $this->input->post('no_nota');//berdasarkan no_nota
        $data=  $this->model_pesanan->cetak_nota2($no_nota);
        $no=1;
        $total=0;
		 foreach ($data->result() as $r)
        {
			$total=0;
			$pdf->Cell(35, 10, 'No Nota:', '',0);
			$pdf->Cell(20, 10, $no_nota, '',0);
			$pdf->Ln(10);
			$pdf->Cell(35, 10, 'No Pelanggan', '',0);
			$pdf->Cell(20, 10, $r->no_pelanggan, '',0);
			$pdf->Ln(10);
			$pdf->Cell(35, 10, 'Tanggal Masuk', '',0);
			$pdf->Cell(20, 10, $r->tanggal_masuk, '',0);
			$pdf->Ln(10);
			$pdf->Cell(35, 10, 'Tanggal Selesai', '',0);
			$pdf->Cell(20, 10, $r->tanggal_selesai, '',0);
			$pdf->Ln(10);
			$pdf->Cell(35, 10, 'Status Barang', '',0);
			$pdf->Cell(20, 10, $r->status_barang,'',0);
			$pdf->Ln(10);
			$pdf->Cell(35, 10, 'Nama Jasa', '',0);
			$pdf->Cell(20, 10, $r->nama_barang,'',0);
			$pdf->Ln(10);
			$pdf->Cell(35, 10, 'Harga', '',0);
			$pdf->Cell(20, 10, $r->harga,'',0);
			$pdf->Ln(10);
			$pdf->Cell(35, 10, 'Jumlah', '',0);
			$pdf->Cell(20, 10, $r->jumlah,'',0);
			$pdf->Ln(10);
			$pdf->Cell(35, 10, '______________________ +', '',0);
			$pdf->Ln(10);
			$pdf->Cell(35, 10, 'Total', '',0);
			$pdf->Cell(20, 10, $r->total, '',0);
			$pdf->Ln(10);
			$total=$total+$r->total;
        }
       
        // end
        $pdf->Output();
		 $pdf->Cell(35,10,$total,1,0);
            
    }
	
function laporan_keuangan2()//fungsi cetak laporan
    {
        if(isset($_POST['submit']))
        {
            $tanggal1=  $this->input->post('tanggal1');
			 $tanggal2=  $this->input->post('tanggal2');//berdasarkan tanggal
            $data['record']=  $this->model_pesanan->laporan_keuangan2($tanggal1,$tanggal2);
            $this->home->load('home','pesanan/v_laporan_keuangan',$data);
        }
        else
        {
            $data['record']=  $this->model_pesanan->laporan_keuangan1();
            $this->home->load('home','pesanan/v_laporan_keuangan',$data);//membuka tampilan cetak pada folder view/pesanan/laporan
        }
    }
	
	function laporan_keuangan_cabang()//fungsi cetak laporan
    {
        if(isset($_POST['submit']))
        {
            $cabang=  $this->input->post('cabang');//berdasarkan tanggal
            $data['record']=  $this->model_pesanan->laporan_keuangan_cabang2($cabang);
            $this->home->load('home','pesanan/laporan_keuanggan_cabang',$data);
        }
        else
        {
            $data['record']=  $this->model_pesanan->laporan_keuangan_cabang1();
            $this->home->load('home','pesanan/laporan_keuanggan_cabang',$data);//membuka tampilan cetak pada folder view/pesanan/laporan
        }
    }
	
function cetak_laporan_keuanggan()
    {
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Text(10, 10, 'LAPORAN KEUANGGAN');
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(12);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Text(10, 25, 'No', '',0);
        $pdf->Text(20, 25, 'Tanggal Mulai', '',0);
        $pdf->Text(55, 25, 'Jumlah', '',0);
		$pdf->Text(75, 25, 'Jasa', '',0);
		$pdf->Text(148, 25, 'Tarif', '',0);
        $pdf->Text(177, 25, 'Total Transaksi', '',0);

		
        // tampilkan dari database
        $pdf->SetFont('Arial','','L');
		$tanggal1=  $this->input->post('tanggal1');
		$tanggal2=  $this->input->post('tanggal2');
        $data=  $this->model_pesanan->laporan_keuangan2($tanggal1,$tanggal2);
        $no=1;
        $total=0;
        foreach ($data->result() as $r)
        {
			$pdf->Ln(6);
            $pdf->Cell(10, 10, $no, '',0);
            $pdf->Cell(35, 10, $r->tanggal_masuk, '',0);
            $pdf->Cell(20, 10, $r->jumlah, '',0);
			$pdf->Cell(70, 10, $r->nama_barang, '',0);
			$pdf->Cell(31,10,  number_format($r->harga,2),'',0);
            $pdf->Cell(177, 10, $r->total, '',0);
            $no++;
            $total=$total+$r->total;
        }
        // end
		$pdf->Ln(10);
		 $pdf->Cell(45,7,'Total','',0);
        $pdf->Cell(38,7,$total,'',0);
        $pdf->Output();
}

function cetak_laporan_keuanggan_cabang()
    {
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Text(10, 10, 'LAPORAN KEUANGGAN CABANG');
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(12);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Cell(35, 8, 'Nama Cabang', '',0);
        $pdf->Cell(40, 7, 'Jumlah', '',0);
		$pdf->Text(65, 25, 'Jasa', '',0);
		$pdf->Text(120, 25, 'Tarif', '',0);
        $pdf->Text(160, 25, 'Total Transaksi', '',0);

		
        // tampilkan dari database
        $pdf->SetFont('Arial','','L');
		$cabang=  $this->input->post('cabang');
        $data=  $this->model_pesanan->laporan_keuangan_cabang2($cabang);
        $no=1;
        $total=0;
        foreach ($data->result() as $r)
        {
			$pdf->Ln(6);
            $pdf->Cell(35, 8, $r->nama_cabang, '',0);
           $pdf->Cell(40, 8, $r->jumlah, '',0);
			$pdf->Text(65, 32, $r->nama_barang, '',0);
			$pdf->Text(120, 32,  number_format($r->harga,2),'',0);
             $pdf->Text(160, 32, $r->$total=($r->jumlah*$r->harga), '',0);
            $no++;
            $total=$total+$r->total;
        }
        // end
		$pdf->Ln(10);
		$pdf->Text(10,40,'-----------------------------------------------------------------------------------------------------------------','',0);
		$pdf->Ln(10);		
		$pdf->Text(150,50,'Total','',0);
        $pdf->Text(160,50,$total,'',0);
        $pdf->Output();
}
}
?>