<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_detailsalesinvoice_model extends CI_Model

{

public function detailsalesinvoice()	

{

	$this->db->select('*');
	$this->db->from('tbl_detailsalesinvoice');
	$query=$this->db->get();
    return $query->result();

}

Public function simpan()
{

	
		 $data = array(
			'item' => $this->input->post('item'),
			'item_description' => $this->input->post('item_description'),
			'qty' => $this->input->post('qty'),
			'item_unit' => $this->input->post('item_unit'),
			'unit_price' => $this->input->post('unit_price'),
			'amount' => $this->input->post('amount'),
			'disc_persentage' => $this->input->post('disc_persentage'),
			'disc_price' => $this->input->post('disc_price'),
			'net_price' => $this->input->post('net_price'),
			);
        $this->db->insert('tbl_detailsalesinvoice', $data);
		
  } 

 public function edit()

 {
	
	 
   $data = array(
				'item' => $this->input->post('item'),
				'item_description' => $this->input->post('item_description'),
				'qty' => $this->input->post('qty'),
				'item_unit' => $this->input->post('item_unit'),
				'unit_price' => $this->input->post('unit_price'),
				'amount' => $this->input->post('amount'),
			);

	$id=$this->input->post('id');
			$this->db->where('id',$id);
			$this->db->update('tbl_detailsalesinvoice',$data);		

 }

 public function disc()

 {
	
	 
   $data = array(
				'disc_persentage' => $this->input->post('disc_persentage'),
				'disc_price' => $this->input->post('disc_price'),
				'net_price' => $this->input->post('net_price'),
			);

	$id=$this->input->post('id');
			$this->db->where('id',$id);
			$this->db->update('tbl_detailsalesinvoice',$data);		

 }

 public function hapus()

	{
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('tbl_detailsalesinvoice');

	}		

}

?>