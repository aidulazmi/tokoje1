<?php 

class M_user extends CI_Model{

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
		public function save_pesan($data){
		return $this->db->insert_batch('pesan', $data);
	}
	function invoice_t(){
		$query = $this->db->query("SELECT * FROM pesan WHERE status = '1' and id_user='".$this->session->id_user."'");
        return $query->result();
	}
	function total_t(){
		$query = $this->db->query("SELECT sum(harga) as hargg FROM pesan WHERE status = '1' and id_user='".$this->session->id_user."'");
        return $query->result();
	}

	function hapus_data_pesan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function kode_acak(){
		$query = $this->db->query("SELECT pesan.no_acak FROM pesan WHERE status = '1' AND id_user='".$this->session->id_user."' GROUP BY no_acak");
        return $query->result();
	}


	function input_data_bayar($data,$table){
		$this->db->insert($table,$data);
	}
	function tampil_data_bayar(){
			$query = $this->db->query("SELECT * FROM bayar WHERE id_user='".$this->session->id_user."' GROUP BY no_acak");
        return $query->result();
	}

	function update_data_pesan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

