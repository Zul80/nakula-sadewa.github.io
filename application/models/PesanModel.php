<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PesanModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function simpan_spanduk($data){
		$this->db->insert('sipesan_spanduk',$data);
		return $this->db->affected_rows();
	}
	public function lihat_spanduk_by_id($id){
		$this->db->where('spanduk_id',$id);
		return $this->db->get('sipesan_spanduk')->row_array();
	}
	public function simpan_stiker($data){
		$this->db->insert('sipesan_stiker',$data);
		return $this->db->affected_rows();
	}
	public function lihat_stiker_by_id($id){
		$this->db->where('stiker_id',$id);
		return $this->db->get('sipesan_stiker')->row_array();
	}
	public function simpan_kartu($data){
		$this->db->insert('sipesan_kartu',$data);
		return $this->db->affected_rows();
	}
	public function lihat_kartu_by_id($id){
		$this->db->where('kartu_id',$id);
		return $this->db->get('sipesan_kartu')->row_array();
	}
	public function simpan_brosur($data){
		$this->db->insert('sipesan_brosur',$data);
		return $this->db->affected_rows();
	}
	public function lihat_brosur_by_id($id){
		$this->db->where('brosur_id',$id);
		return $this->db->get('sipesan_brosur')->row_array();
	}
	public function simpan_a4brosur($data){
		$this->db->insert('sipesan_a4brosur',$data);
		return $this->db->affected_rows();
	}
	public function lihat_a4brosur_by_id($id){
		$this->db->where('a4brosur_id',$id);
		return $this->db->get('sipesan_a4brosur')->row_array();
	}
	public function simpan_a5brosur($data){
		$this->db->insert('sipesan_a5brosur',$data);
		return $this->db->affected_rows();
	}
	public function lihat_a5brosur_by_id($id){
		$this->db->where('a5brosur_id',$id);
		return $this->db->get('sipesan_a5brosur')->row_array();
	}
	public function simpan_a6brosur($data){
		$this->db->insert('sipesan_a6brosur',$data);
		return $this->db->affected_rows();
	}
	public function lihat_a6brosur_by_id($id){
		$this->db->where('a6brosur_id',$id);
		return $this->db->get('sipesan_a6brosur')->row_array();
	}
	public function simpan_flyer10x21($data){
		$this->db->insert('sipesan_flyer10x21',$data);
		return $this->db->affected_rows();
	}
	public function lihat_flyer10x21_by_id($id){
		$this->db->where('flyer10x21_id',$id);
		return $this->db->get('sipesan_flyer10x21')->row_array();
	}
	public function simpan_kalender($data){
		$this->db->insert('sipesan_kalender',$data);
		return $this->db->affected_rows();
	}
	public function lihat_kalender_by_id($id){
		$this->db->where('kalender_id',$id);
		return $this->db->get('sipesan_kalender')->row_array();
	}
	public function simpan_nota($data){
		$this->db->insert('sipesan_nota',$data);
		return $this->db->affected_rows();
	}
	public function lihat_nota_by_id($id){
		$this->db->where('nota_id',$id);
		return $this->db->get('sipesan_nota')->row_array();
	}
	public function simpan_dtf($data){
		$this->db->insert('sipesan_dtf',$data);
		return $this->db->affected_rows();
	}
	public function lihat_dtf_by_id($id){
		$this->db->where('dtf_id',$id);
		return $this->db->get('sipesan_dtf')->row_array();
	}
	public function simpan_tdtf($data){
		$this->db->insert('sipesan_tdtf',$data);
		return $this->db->affected_rows();
	}
	public function lihat_tdtf_by_id($id){
		$this->db->where('tdtf_id',$id);
		return $this->db->get('sipesan_tdtf')->row_array();
	}
	public function simpan_lbstiker($data){
		$this->db->insert('sipesan_lbstiker',$data);
		return $this->db->affected_rows();
	}
	public function lihat_lbstiker_by_id($id){
		$this->db->where('lbstiker_id',$id);
		return $this->db->get('sipesan_lbstiker')->row_array();
	}
	public function delete($key,$id,$table){
		$this->db->where($key,$id);
		return $this->db->delete($table);
	}
	public function lihat_desain($table,$key,$id){
		$this->db->where($key,$id);
		return $this->db->get($table)->row_array();
	}
	public function simpan($table,$data){
		$this->db->insert($table,$data);
		return $this->db->affected_rows();
	}
	public function update($table,$key,$id,$data){
		$this->db->where($key, $id);
		$this->db->update($table,$data);
		return $this->db->affected_rows();
	}
}