<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_mstcustomer_model extends CI_Model

{

public function mstcustomer()	

{

	$this->db->select('*');
	$this->db->from('tbl_mstcustomer');
	$query=$this->db->get();
    return $query->result();

}

Public function simpan()
{

	
		 $data = array(
			'tahun' => $this->input->post('tahun'),
			'material' => $this->input->post('material'),
			'typevespa' => $this->input->post('typevespa'),
			'novin' => $this->input->post('novin'),
			'nomesin' => $this->input->post('nomesin'),
			'nama' => $this->input->post('nama'),
			'gender' => $this->input->post('gender'),
			'tgllahir' => $this->input->post('tgllahir'),
			'alamat' => $this->input->post('alamat'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kota' => $this->input->post('kota'),
			'provinsi' => $this->input->post('provinsi'),
			'kodepos' => $this->input->post('kodepos'),
			'email' => $this->input->post('email'),
			'celluler' => $this->input->post('celluler'),
			'celluler2' => $this->input->post('celluler2'),
			'noseribpkp' => $this->input->post('noseribpkp'),
			'nopolisi' => $this->input->post('nopolisi'),
			'tglkembali' => $this->input->post('tglkembali'),
			'tglkonfirmasi' => $this->input->post('tglkonfirmasi'),
			'stskonfirmasi' => $this->input->post('stskonfirmasi'),
			'konfirmasi' => $this->input->post('konfirmasi'),
			'keterangan' => $this->input->post('keterangan'),
			);
        $this->db->insert('tbl_mstcustomer', $data);
		
  } 

 public function edit()

 {
	
	 
   $data = array(
			'tahun' => $this->input->post('tahun'),
			'material' => $this->input->post('material'),
			'typevespa' => $this->input->post('typevespa'),
			'novin' => $this->input->post('novin'),
			'nomesin' => $this->input->post('nomesin'),
			'nama' => $this->input->post('nama'),
			'gender' => $this->input->post('gender'),
			'tgllahir' => $this->input->post('tgllahir'),
			'alamat' => $this->input->post('alamat'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kota' => $this->input->post('kota'),
			'provinsi' => $this->input->post('provinsi'),
			'kodepos' => $this->input->post('kodepos'),
			'email' => $this->input->post('email'),
			'celluler' => $this->input->post('celluler'),
			'celluler2' => $this->input->post('celluler2'),
			'noseribpkp' => $this->input->post('noseribpkp'),
			'nopolisi' => $this->input->post('nopolisi'),
			'tglkembali' => $this->input->post('tglkembali'),
			'tglkonfirmasi' => $this->input->post('tglkonfirmasi'),
			'stskonfirmasi' => $this->input->post('stskonfirmasi'),
			'konfirmasi' => $this->input->post('konfirmasi'),
			'keterangan' => $this->input->post('keterangan'),
			);

	$id=$this->input->post('id');
			$this->db->where('id',$id);
			$this->db->update('tbl_mstcustomer',$data);		

 }	 

 public function hapus()

	{
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('tbl_mstcustomer');

	}		

}

?>