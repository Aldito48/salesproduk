<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailsalesinvoice extends CI_Controller {
 function __construct()
    {
        parent::__construct();
        is_login();
		
		$this->load->model('Tbl_detailsalesinvoice_model','s');
		 $this->load->library('form_validation');  
       $this->load->library('datatables');
       
    }

    public function index()
    {
		
        $this->template->load('template','detailsalesinvoice/detailsalesinvoice');
    } 
	public function v_detailsalesinvoice()
	{
		$data=$this->s->detailsalesinvoice();
		echo json_encode($data);
	}
	public function tambah()
	{
		if(isset($_POST['tambah']))
		{
			
			$this->template->load('template','detailsalesinvoice/tambah');
			
		} else {

         redirect(base_url('Detailsalesinvoice'));
		}		
		
	}	
	public function simpan()
	 {
		 
		 if (isset($_POST['simpan'])) {
		 
	    $this->s->simpan(); 
		 echo "<script>alert('Data Produk Berhasil Disimpan');
		     window.location.replace('../Detailsalesinvoice');
		   </script>";
		
	  } else {
			 redirect(base_url('Detailsalesinvoice'));
		 }
	}
	public function update()
   {
	   if(isset($_POST['id'])) 
	   {
		$this->s->edit();
		
		
		echo "<script>alert('Data Detail Sales Invoice Berhasil Diedit');
			 window.location.replace('../Detailsalesinvoice');
			</script>	
			";
	   } else {
		   redirect(base_url('Detailsalesinvoice'));
	   }	
   } 
	
   public function edit()
   {
	    if(isset($_POST['id'])){
		
		 $id=$this->input->post('id');
		 
		 
		 $data['edit'] = $this->db->get_where('tbl_detailsalesinvoice', array('id' => $id))->row_Array();
		 
		
		 } else {
			 redirect(base_url('Detailsalesinvoice'));
		 }
	     
		 $this->template->load('template', 'detailsalesinvoice/edit', $data);
    
   }	 
   public function hapus()
   {
	    if(isset($_POST['id'])){
		
		 $id=$this->input->post('id');
		 
		 $data['hapus'] = $this->db->get_where('tbl_detailsalesinvoice', array('id' => $id))->row_Array();
		 
		
		 } else {
			 redirect(base_url('Detailsalesinvoice'));
		 }
	     
		 $this->template->load('template', 'detailsalesinvoice/hapus', $data);
    
   }	 
   public function hapus_data()
   {
	   if(isset($_POST['id'])) 
	   {
		$this->s->hapus();
		
		
		echo "<script>alert('Data Detail Sales Invoice Berhasil Dihapus');
			 window.location.replace('../Detailsalesinvoice');
			</script>	
			";
	   } else {
		   redirect(base_url('Detailsalesinvoice'));
	   }	
   } 	 
	 

}
