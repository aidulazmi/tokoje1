<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_invoice extends CI_Controller {

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

		$data['user'] = $this->M_user->invoice_t();
		$data['user2'] = $this->M_user->total_t();
		$this->load->view('user/tamu/invoice',$data);
	}
	else
	{
		redirect("C_login");

	}
		
	}

	function hapus_pesan($id_pesan){

		if($this->M_login->logged_id2() == 'User')
	{
	$where = array('id_pesan' => $id_pesan);
	$this->M_user->hapus_data_pesan($where,'pesan');
	redirect('C_invoice');
	}
	else
	{
		redirect("C_login");

	}
	
	}

}
