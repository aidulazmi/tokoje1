<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_admin');
		$this->load->model('M_login');
	}
	public function index()
	{
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/das/das');
		$this->load->view('admin/inc/footer');
	}

	public function barang()
	{
		if($this->M_login->logged_id2() == 'Admin')
	{
		$data['user'] = $this->M_admin->tampil_data_barang()->result();
		$data['user2'] = $this->M_admin->tampil_data_kategori()->result();
		
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/V_barang',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}
	}

	public function kategori()
	{
			if($this->M_login->logged_id2() == 'Admin')
	{
		$data['user'] = $this->M_admin->tampil_data_kategori()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/V_kategori',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}

	}
	
	public function user()
	{
		if($this->M_login->logged_id2() == 'Admin')
	{
		$data['user'] = $this->M_admin->tampil_data_user();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/V_user',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}

	}

public function pesan()
	{
		if($this->M_login->logged_id2() == 'Admin')
	{
		$data['user'] = $this->M_admin->tampil_data_pesan()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/V_pesan',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}

	}

public function bayar()
	{
		if($this->M_login->logged_id2() == 'Admin')
	{
		$data['user'] = $this->M_admin->tampil_data_bayar()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/V_bayar',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}

	}
	//simpan

	function simpan_kategori(){

		if($this->M_login->logged_id2() == 'Admin')
	{

		//$id_kategori = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
			
			'nama_kategori' => $nama_kategori,
			'deskripsi' => $deskripsi
			);
		$this->M_admin->input_data_kategori($data,'kategori');
		redirect('C_admin/kategori');
	}
	else
	{
		redirect("C_login");

	}

		
	}

	//delete client

	function hapus_kategori($id_kategori){

		if($this->M_login->logged_id2() == 'Admin')
	{
	$where = array('id_kategori' => $id_kategori);
	$this->M_admin->hapus_data_kategori($where,'kategori');
	redirect('C_admin/kategori');
	}
	else
	{
		redirect("C_login");

	}
	
	}

	function hapus_user($id_user){

		if($this->M_login->logged_id2() == 'Admin')
	{
	$where = array('id_user' => $id_user);
	$this->M_admin->hapus_data_kategori($where,'user');
	redirect('C_admin/user');
	}
	else
	{
		redirect("C_login");

	}
	
	}

function hapus_pesan($id_pesan){

		if($this->M_login->logged_id2() == 'Admin')
	{
	$where = array('id_pesan' => $id_pesan);
	$this->M_admin->hapus_data_kategori($where,'pesan');
	redirect('C_admin/pesan');
	}
	else
	{
		redirect("C_login");

	}
	
	}

function hapus_bayar($id_bayar){

		if($this->M_login->logged_id2() == 'Admin')
	{
	$where = array('id_bayar' => $id_bayar);
	$this->M_admin->hapus_data_kategori($where,'bayar');
	redirect('C_admin/bayar');
	}
	else
	{
		redirect("C_login");

	}
	
	}

	//edit

	function edit_user($id_user){
			if($this->M_login->logged_id2() == 'Admin')
	{

		
		$where = array('id_user' => $id_user);
		$data['user'] = $this->M_admin->edit_data_user($where,'user')->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/edit/V_user',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}

	function edit_bayar($id_bayar){
			if($this->M_login->logged_id2() == 'Admin')
	{

		
		$where = array('id_bayar' => $id_bayar);
		$data['user'] = $this->M_admin->edit_data_user($where,'bayar')->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/edit/V_pembayaran',$data);
		$this->load->view('admin/inc/footer');
	}
	else
	{
		redirect("C_login");

	}



	}


	//simpan edit

	function update_data_kategori(){

			if($this->M_login->logged_id2() == 'Admin')
	{
		$id_kategori = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		$deskripsi = $this->input->post('deskripsi');


		$data = array(
			'nama_kategori' => $nama_kategori,
			'deskripsi' => $deskripsi
			);

	$where = array(
		'id_kategori' => $id_kategori
	);

	$this->M_admin->update_data_kategori($where,$data,'kategori');
		redirect('C_admin/kategori');
	}

	else
	{
		redirect("C_login");

	}
}


function update_data_user(){

			if($this->M_login->logged_id2() == 'Admin')
	{
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array(
			// 'id_user' => $id_user,
			'username' => $username,
			'email' => $email,
			'password' => $password
			);

	$where = array(
		'id_user' => $id_user
	);

	$this->M_admin->update_data_user($where,$data,'user');
		redirect('C_admin/user');
	}

	else
	{
		redirect("C_login");

	}
}

function update_data_bayar(){

			if($this->M_login->logged_id2() == 'Admin')
	{
		$id_bayar = $this->input->post('id_bayar');
		$no_resi = $this->input->post('no_resi');
		$verifikasi = $this->input->post('verifikasi');

		$data = array(
			// 'id_user' => $id_user,
			'no_resi' => $no_resi,
			'verifikasi' => $verifikasi
			);

	$where = array(
		'id_bayar' => $id_bayar
	);

	$this->M_admin->update_data_bayar($where,$data,'bayar');
		redirect('C_admin/bayar');
	}

	else
	{
		redirect("C_login");

	}
}

	function simpan_barang(){

		if($this->M_login->logged_id2() == 'Admin')
	{
	
				 $config['upload_path']          = './uploads/barang';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|PNG|JPEG';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto1'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form1', $error);
                }
                else
                {
                                    
                                  $file1 = $this->upload->data();
                                  $file1 = $file1['file_name'];

                                   
                }

                if ( ! $this->upload->do_upload('foto2'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form2', $error);
                }
                else
                {
                                    
                                  $file2 = $this->upload->data();
                                    $file2 = $file2['file_name'];
                }
                
                if ( ! $this->upload->do_upload('foto3'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form2', $error);
                }
                else
                {
                                    
                                  $file3 = $this->upload->data();
                                    $file3 = $file3['file_name'];
                }
                if ( ! $this->upload->do_upload('foto4'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form2', $error);
                }
                else
                {
                                    
                                  $file4 = $this->upload->data();
                                    $file4 = $file4['file_name'];
                }
      
      						
				  $id_kategori = $this->input->post('id_kategori');
                  $nama_barang = $this->input->post('nama_barang');
                  $deskripsi = $this->input->post('deskripsi');
                  $harga = $this->input->post('harga');
                  $stock = $this->input->post('stock');
                  $tgl_masuk = date("Y-m-d");

        	$data = array(
            
            'id_kategori' => $id_kategori,
            'nama_barang' => $nama_barang,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'stock' => $stock,
            'tgl_masuk' => $tgl_masuk,
            'foto1' => $file1,
            'foto2' => $file2,
            'foto3' => $file3,
            'foto4' => $file4
            
            );
        $this->M_admin->input_data_barang($data,'barang');
        redirect('C_admin/barang');
	}
	else
	{
		redirect("C_login");

	}

		
	}

	public function hapus_barang($id_barang){
            $_id_barang = $this->db->get_where('barang',['id_barang' => $id_barang])->row();
            $query = $this->db->delete('barang',['id_barang'=>$id_barang]);

        if($query){
            unlink("uploads/barang/".$_id_barang->foto1);
            unlink("uploads/barang/".$_id_barang->foto2);
            unlink("uploads/barang/".$_id_barang->foto3);
            unlink("uploads/barang/".$_id_barang->foto4);
        }
            redirect('C_admin/barang');
}

}
