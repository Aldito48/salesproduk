<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tbl_mstproduk_model extends CI_Model
{
public function mstproduk()	
{
	$this->db->select('*');
	$this->db->from('tbl_mstproduk');
	$query=$this->db->get();
    return $query->result();
}
Public function simpan()
{
	
  } 
 public function edit()
 {
   $data = array(
			'code' => $this->input->post('code'),
			);
	$id=$this->input->post('id');
			$this->db->where('id',$id);
			$this->db->update('tbl_mstproduk',$data);		
 }	 
 public function hapus()
	{
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('tbl_mstproduk');
	}		
}
?>