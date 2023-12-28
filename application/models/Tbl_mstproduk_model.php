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
			 $data = array(			'code' => $this->input->post('code'),			'description' => $this->input->post('description'),			'jurusan' => $this->input->post('jurusan'),			'prodi' => $this->input->post('prodi'),			'professor_pns' => $this->input->post('professor_pns'),			'professor_non_pns' => $this->input->post('professor_non_pns'),			'lektor_kepala_pns' => $this->input->post('lektor_kepala_pns'),			'lektor_kepala_non_pns' => $this->input->post('lektor_kepala_non_pns'),			'lektor_pns' => $this->input->post('lektor_pns'),			'lektor_non_pns' => $this->input->post('lektor_non_pns'),			'asisten_ahli_pns' => $this->input->post('asisten_ahli_pns'),			'asisten_ahli_non_pns' => $this->input->post('asisten_ahli_non_pns'),			'tenaga_pengajar_pns' => $this->input->post('tenaga_pengajar_pns'),			'tenaga_pengajar_non_pns' => $this->input->post('tenaga_pengajar_non_pns'),			'terkualifikasi_s3' => $this->input->post('terkualifikasi_s3'),			'terkualifikasi_kompetensi_profesi' => $this->input->post('terkualifikasi_kompetensi_profesi'),			'terkualifikasi_praktisi' => $this->input->post('terkualifikasi_praktisi'),			'pegawai_pppk' => $this->input->post('pegawai_pppk'),			'nidn' => $this->input->post('nidn'),			);        $this->db->insert('tbl_mstproduk', $data);		
  } 
 public function edit()
 {		 
   $data = array(
			'code' => $this->input->post('code'),			'description' => $this->input->post('description'),			'jurusan' => $this->input->post('jurusan'),			'prodi' => $this->input->post('prodi'),			'professor_pns' => $this->input->post('professor_pns'),			'professor_non_pns' => $this->input->post('professor_non_pns'),			'lektor_kepala_pns' => $this->input->post('lektor_kepala_pns'),			'lektor_kepala_non_pns' => $this->input->post('lektor_kepala_non_pns'),			'lektor_pns' => $this->input->post('lektor_pns'),			'lektor_non_pns' => $this->input->post('lektor_non_pns'),			'asisten_ahli_pns' => $this->input->post('asisten_ahli_pns'),			'asisten_ahli_non_pns' => $this->input->post('asisten_ahli_non_pns'),			'tenaga_pengajar_pns' => $this->input->post('tenaga_pengajar_pns'),			'tenaga_pengajar_non_pns' => $this->input->post('tenaga_pengajar_non_pns'),			'terkualifikasi_s3' => $this->input->post('terkualifikasi_s3'),			'terkualifikasi_kompetensi_profesi' => $this->input->post('terkualifikasi_kompetensi_profesi'),			'terkualifikasi_praktisi' => $this->input->post('terkualifikasi_praktisi'),			'pegawai_pppk' => $this->input->post('pegawai_pppk'),			'nidn' => $this->input->post('nidn'),
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