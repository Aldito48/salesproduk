<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_identitas_model extends CI_Model
{
 public function get()
 {
	$this->db->select('*');
	$this->db->from('tbl_identitas');
	$query=$this->db->get();
	return $query->result();
 }	 
 public function jur()
 {
	$id=$this->session->userdata('id_prodi'); 
	$this->db->select('*');
	$this->db->from('tbl_prodi');
	$this->db->where('id_jur',$id);
	$query=$this->db->get();
	return $query->result();
 }	 
 
Public function edit() 
	{
		$foto = $this->upload_foto();
		
		 if($foto['file_name']==''){
             $data = array(
			'nama'     	=> $this->input->post('nama'),
			'nama_web'     	=> $this->input->post('nama_web'),
			'kode'     	=> $this->input->post('kode'),
			'alamat'     	=> $this->input->post('alamat'),
			'facebook'     	=> $this->input->post('facebook'),
			'twitter'     	=> $this->input->post('twitter'),
			'email'     	=> $this->input->post('email'),
			'no_telp'     	=> $this->input->post('no_telp'),
		    'no_wa'     	=> $this->input->post('no_wa'),
			'tgl_hitung'     	=> $this->input->post('tgl_hitung'),
			'jam_hitung'     	=> $this->input->post('jam_hitung'),
			'lokasi'     	=> $this->input->post('lokasi')
		 	
			);     
		 } else {
			$data = array( 
			'nama'     	=> $this->input->post('nama'),
			'nama_web'  => $this->input->post('nama_web'),
			'kode'     	=> $this->input->post('kode'),
			'alamat'     	=> $this->input->post('alamat'),
			'facebook'     	=> $this->input->post('facebook'),
			'twitter'     	=> $this->input->post('twitter'),
			'email'     	=> $this->input->post('email'),
			'no_telp'     	=> $this->input->post('no_telp'),
		    'no_wa'     	=> $this->input->post('no_wa'),
			'lokasi'     	=> $this->input->post('lokasi'),
			'tgl_hitung'     	=> $this->input->post('tgl_hitung'),
			'jam_hitung'     	=> $this->input->post('jam_hitung'),
			'logo'     		=> $foto['file_name']
		
			);  
		 }	
			$id=$this->input->post('id');
            $this->db->where('id_identitas', $id);
			$this->db->update('tbl_identitas', $data);
		
    }	
Public function edit2() 
	{
		$foto2 = $this->upload_foto2();
		
		
			$data = array( 
			
			'logo_header'     		=> $foto2['file_name']
		
			);  
		 	
			$id=$this->input->post('id');
            $this->db->where('id_identitas', $id);
			$this->db->update('tbl_identitas', $data);
		
    }

public function upload_foto()
	{
        $config['upload_path']          = 'images/logo';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']             = 10000;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('images');
        return $this->upload->data();
    }	
public function upload_foto2()
	{
        $config['upload_path']          = 'images/logo';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']             = 10000;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('logo_header');
        return $this->upload->data();
    }	

}
?>