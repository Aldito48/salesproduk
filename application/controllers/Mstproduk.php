<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstproduk extends CI_Controller {
 function __construct()
    {
        parent::__construct();
        is_login();
		
		$this->load->model('Tbl_mstproduk_model','s');
		 $this->load->library('form_validation');  
       $this->load->library('datatables');
       
    }

    public function index()
    {
		
        $this->template->load('template','mstproduk/mstproduk');
    } 
	public function v_mstproduk()
	{
		$data=$this->s->mstproduk();
		echo json_encode($data);
	}
	public function tambah()
	{
		if(isset($_POST['tambah']))
		{
			
			$this->template->load('template','mstproduk/tambah');
			
		} else {

         redirect(base_url('Mstproduk'));
		}		
		
	}	
	public function simpan()
	 {
		 
		 if (isset($_POST['simpan'])) {
		 
	    $this->s->simpan(); 
		 echo "<script>alert('Data Produk Berhasil Disimpan');
		     window.location.replace('../Mstproduk');
		   </script>";
		
	  } else {
			 redirect(base_url('Mstproduk'));
		 }
	}
	public function update()
   {
	   if(isset($_POST['id'])) 
	   {
		$this->s->edit();
		
		
		echo "<script>alert('Data Produk Berhasil Diedit');
			 window.location.replace('../Mstproduk');
			</script>	
			";
	   } else {
		   redirect(base_url('Mstproduk'));
	   }	
   } 
	
   public function edit()
   {
	    if(isset($_POST['id'])){
		
		 $id=$this->input->post('id');
		 
		 
		 $data['edit'] = $this->db->get_where('tbl_mstproduk', array('id' => $id))->row_Array();
		 
		
		 } else {
			 redirect(base_url('Mstproduk'));
		 }
	     
		 $this->template->load('template', 'mstproduk/edit', $data);
    
   }	 
   public function hapus()
   {
	    if(isset($_POST['id'])){
		
		 $id=$this->input->post('id');
		 
		 $data['hapus'] = $this->db->get_where('tbl_mstproduk', array('id' => $id))->row_Array();
		 
		
		 } else {
			 redirect(base_url('Mstproduk'));
		 }
	     
		 $this->template->load('template', 'mstproduk/hapus', $data);
    
   }	 
   public function hapus_data()
   {
	   if(isset($_POST['id'])) 
	   {
		$this->s->hapus();
		
		
		echo "<script>alert('Data Produk Berhasil Dihapus');
			 window.location.replace('../Mstproduk');
			</script>	
			";
	   } else {
		   redirect(base_url('Mstproduk'));
	   }	
   } 	 
	 

}
