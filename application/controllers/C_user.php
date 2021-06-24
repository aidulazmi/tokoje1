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

	
}
