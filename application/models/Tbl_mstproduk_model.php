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

	
		 $data = array(
			'code' => $this->input->post('code'),
			'description' => $this->input->post('description'),
			'description2' => $this->input->post('description2'),
			'moq' => $this->input->post('moq'),
			'categorypid' => $this->input->post('categorypid'),
			'hierarchy' => $this->input->post('hierarchy'),
			'materialgroup' => $this->input->post('materialgroup'),
			'datadiv' => $this->input->post('datadiv'),
			'typepid' => $this->input->post('lektor_kepala_non_pns'),
			'lastpricebfppn' => $this->input->post('lastpricebfppn'),
			'newpricebfppn' => $this->input->post('newpricebfppn'),
			'lastdiscount' => $this->input->post('lastdiscount'),
			'newdiscount' => $this->input->post('newdiscount'),
			'ppn' => $this->input->post('ppn'),
			'buypriceafppn' => $this->input->post('buypriceafppn'),
			'salepriceafppn' => $this->input->post('salepriceafppn'),
			'divisi' => $this->input->post('divisi'),
			'namadivisi' => $this->input->post('namadivisi'),
			'dept' => $this->input->post('dept'),
			'namadept' => $this->input->post('namadept'),
			'kat' => $this->input->post('kat'),
			'namakat' => $this->input->post('namakat'),
			'subkat' => $this->input->post('subkat'),
			'namasubkat' => $this->input->post('namasubkat'),
			'tax' => $this->input->post('tax'),
			'stokawal' => $this->input->post('stokawal'),
			'qtybeli' => $this->input->post('qtybeli'),
			'qtyjual' => $this->input->post('qtyjual'),
			'qtyretur' => $this->input->post('qtyretur'),
			'qtyadjust' => $this->input->post('qtyadjust'),
			'qtymutasi' => $this->input->post('qtymutasi'),
			'stokakhir' => $this->input->post('stokakhir'),
			);
        $this->db->insert('tbl_mstproduk', $data);
		
  } 

 public function edit()

 {
	
	 
   $data = array(
			'code' => $this->input->post('code'),
			'description' => $this->input->post('description'),
			'description2' => $this->input->post('description2'),
			'moq' => $this->input->post('moq'),
			'categorypid' => $this->input->post('categorypid'),
			'hierarchy' => $this->input->post('hierarchy'),
			'materialgroup' => $this->input->post('materialgroup'),
			'datadiv' => $this->input->post('datadiv'),
			'typepid' => $this->input->post('lektor_kepala_non_pns'),
			'lastpricebfppn' => $this->input->post('lastpricebfppn'),
			'newpricebfppn' => $this->input->post('newpricebfppn'),
			'lastdiscount' => $this->input->post('lastdiscount'),
			'newdiscount' => $this->input->post('newdiscount'),
			'ppn' => $this->input->post('ppn'),
			'buypriceafppn' => $this->input->post('buypriceafppn'),
			'salepriceafppn' => $this->input->post('salepriceafppn'),
			'divisi' => $this->input->post('divisi'),
			'namadivisi' => $this->input->post('namadivisi'),
			'dept' => $this->input->post('dept'),
			'namadept' => $this->input->post('namadept'),
			'kat' => $this->input->post('kat'),
			'namakat' => $this->input->post('namakat'),
			'subkat' => $this->input->post('subkat'),
			'namasubkat' => $this->input->post('namasubkat'),
			'tax' => $this->input->post('tax'),
			'stokawal' => $this->input->post('stokawal'),
			'qtybeli' => $this->input->post('qtybeli'),
			'qtyjual' => $this->input->post('qtyjual'),
			'qtyretur' => $this->input->post('qtyretur'),
			'qtyadjust' => $this->input->post('qtyadjust'),
			'qtymutasi' => $this->input->post('qtymutasi'),
			'stokakhir' => $this->input->post('stokakhir'),
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