<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Identitas extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        is_login();
		$this->load->model('Tbl_identitas_model','id');
       
        
    }
	public function index()
	{
		
		$data['identitas']=$this->id->get();
		$this->template->load('template','identitas/identitas',$data);
	}	
	
	public function data_jur()
	{
		$data=$this->prodi->jur();
		echo json_encode($data);
	}	
	
public function edit()
   {
	   if(isset($_POST['edit'])) 
	   {
		$this->id->edit();
		
		
		echo "<script>alert('Pengaturan Berhasil Diedit');
			 window.location.replace('../Identitas');
			</script>	
			";
	   } else {
		 if(isset($_POST['id'])){
		 $id=$this->input->post('id');
		 
		 $data['edit'] = $this->db->get_where('tbl_identitas', array('id_identitas' => $id))->row_Array();
		 
		
		 } else {
			 redirect(base_url('Identitas'));
		 }
	   }  
		 $this->template->load('template', 'identitas/edit_identitas', $data);
   }
public function edit_header()
   {
	   if(isset($_POST['edit'])) 
	   {
		$this->id->edit2();
		
		
		echo "<script>alert('Pengaturan Berhasil Diedit');
			 window.location.replace('../Identitas');
			</script>	
			";
	   } else {
		 if(isset($_POST['id'])){
		 $id=$this->input->post('id');
		 
		 $data['edit'] = $this->db->get_where('tbl_identitas', array('id_identitas' => $id))->row_Array();
		 
		
		 } else {
			 redirect(base_url('Identitas'));
		 }
	   }  
		 $this->template->load('template', 'identitas/edit_header', $data);
   }
   
   public function edit_kopsurat()
   {
	   if(isset($_POST['edit'])) 
	   {
		$this->id->edit3();
		
		
		echo "<script>alert('Pengaturan Berhasil Diedit');
			 window.location.replace('../Identitas');
			</script>	
			";
	   } else {
		 if(isset($_POST['id'])){
		 $id=$this->input->post('id');
		 
		 $data['edit'] = $this->db->get_where('tbl_identitas', array('id_identitas' => $id))->row_Array();
		 
		
		 } else {
			 redirect(base_url('Identitas'));
		 }
	   }  
		 $this->template->load('template', 'identitas/edit_kopsurat', $data);
   }
   
}
?>