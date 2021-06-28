<?php 

class M_admin extends CI_Model{

	function tampil_data_kategori(){
		return $this->db->get('kategori');
	}
	function input_data_kategori($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_kategori($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_kategori($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_kategori($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function tampil_data_barang(){
		return $this->db->get('barang');
	}
	function input_data_barang($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_barang($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_barang($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_barang($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function tampil_data_user(){
		$query = $this->db->query("SELECT * FROM user WHERE status='User'");
        return $query->result();
	}
	function input_data_user($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_user($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function tampil_data_pesan(){
		return $this->db->get('pesan');
	}
	function input_data_pesan($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_pesan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_pesan($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_pesan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function tampil_data_bayar(){
		return $this->db->get('bayar');
	}
	function input_data_bayar($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_bayar($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_bayar($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_bayar($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
}