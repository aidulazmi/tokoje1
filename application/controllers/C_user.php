<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_user');
    }

	public function index()
	{
		if($this->M_login->logged_id2() == 'User')
	{
		$data['user'] = $this->M_user->tampil_data_barang()->result();		
		$this->load->view('user/tamu/Tamu',$data);
	}
	else
	{
		redirect("C_login");

	}
		
	}

	public function about()
	{
		$this->load->view('user/tamu/about');
	}
	public function kontak()
	{
		$this->load->view('user/tamu/Kontak');
	}

		public function Pembayaran()
	{
		if($this->M_login->logged_id2() == 'User')
	{

		$data['user'] = $this->M_user->kode_acak();
		$data['user2'] = $this->M_user->tampil_data_bayar();
		$this->load->view('user/tamu/pembayaran',$data);
	}
	else
	{
		redirect("C_login");

	}
		
	}
	public function detail($id_barang)
	{
			if($this->M_login->logged_id2() == 'User')
	{

		
		$where = array('id_barang' => $id_barang);
		$data['user'] = $this->M_user->edit_data_barang($where,'barang')->result();
		$this->load->view('user/tamu/detail',$data);
	}
	else
	{
		redirect("C_login");

	}



	}

	public function invoice()
	{
		if($this->M_login->logged_id2() == 'User')
	{
		$nama_barang = $_POST['nama_barang']; // Ambil data nis dan masukkan ke variabel nis
		$harga = $_POST['harga']; // Ambil data nis dan masukkan ke variabel nis
		$jumlah = $_POST['jumlah']; // Ambil data nis dan masukkan ke variabel nis
		$status = '1'; 
		$id_user = $this->session->userdata('id_user');// Ambil data nis dan masukkan ke variabel nis
		$no_acak = random_string('numeric',10);
		$data = array();
		
		$index = 0; // Set index array awal dengan 0
		foreach($jumlah as $datanis){ // Kita buat perulangan berdasarkan nis sampai data terakhir
			array_push($data, array(
				'jumlah'=>$datanis,
				'nama_barang'=>$nama_barang[$index],  // Ambil dan set data nama sesuai index array dari $index
				'harga'=>$harga[$index],  // Ambil dan set data nama sesuai index array dari $index
				'id_user'=>$id_user,
				'no_acak'=>$no_acak,
				'status'=>$status,  // Ambil dan set data alamat sesuai index array dari $index
			));
			
			$index++;
		}
		
		$sql = $this->M_user->save_pesan($data); // Panggil fungsi save_batch yang ada di model siswa (SiswaModel.php)
		
		// Cek apakah query insert nya sukses atau gagal
		if($sql){ // Jika sukses
			echo "<script>alert('Data berhasil disimpan');window.location = '".base_url('index.php/C_invoice')."';</script>";
		}else{ // Jika gagal
			echo "<script>alert('Data gagal disimpan');window.location = '".base_url('index.php/C_user')."';</script>";
		}
	}
	
	else
	{
		redirect("C_login");

	}
		
	}

function bayar(){
	$this->update_databayar();
	$this->simpan_bayar();
	
}

function update_databayar(){

			if($this->M_login->logged_id2() == 'User')
	{
		$no_acak = $this->input->post('no_acak');
		$status = '2';
		


		$data = array(
			'status' => $status
			);

	$where = array(
		'no_acak' => $no_acak
	);

	$this->M_user->update_data_pesan($where,$data,'pesan');
		
	}

	else
	{
		redirect("C_login");

	}
}
function simpan_bayar(){

		if($this->M_login->logged_id2() == 'User')
	{

		 $config['upload_path']          = './uploads/bayar';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|PNG|JPEG';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form1', $error);
                }
                else
                {
                                    
                                  $file = $this->upload->data();
                                  $file1 = $file['file_name'];

                                   
                }
		//$id_bayar = $this->input->post('id_bayar');
		$nama_pengirim = $this->input->post('nama_pengirim');
		$tgl_transfer = $this->input->post('tgl_transfer');
		$no_rek = $this->input->post('no_rek');
		$foto = $this->input->post('foto');
		$verifikasi = '1';
		$id_user = $this->session->userdata('id_user');
		$nama_bank = $this->input->post('nama_bank');
		$no_acak = $this->input->post('no_acak');
		$nama_penerima = $this->input->post('nama_penerima');
		$alamat = $this->input->post('alamat');


		$data = array(
			
			//'id_bayar' => $id_bayar,
			'nama_pengirim' => $nama_pengirim,
			'tgl_transfer' => $tgl_transfer,
			'no_rek' => $no_rek,
			'foto' => $foto,
			'verifikasi' => $verifikasi,
			'id_user' => $id_user,
			'nama_bank' => $nama_bank,
			'no_acak' => $no_acak,
			'nama_penerima' => $nama_penerima,
			'alamat' => $alamat,
			'foto' => $file1,
			);
		$this->M_user->input_data_bayar($data,'bayar');
		redirect('C_user/pembayaran');
	}
	else
	{
		redirect("C_login");

	}

		
	}

}
