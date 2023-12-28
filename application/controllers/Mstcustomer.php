<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstcustomer extends CI_Controller {
 function __construct()
    {
        parent::__construct();
        is_login();
		
		$this->load->model('Tbl_mstcustomer_model','s');
		 $this->load->library('form_validation');  
       $this->load->library('datatables');
       
    }

    public function index()
    {
		
        $this->template->load('template','mstcustomer/mstcustomer');
    } 
	public function v_mstcustomer()
	{
		$data=$this->s->mstcustomer();
		echo json_encode($data);
	}
	public function tambah()
	{
		if(isset($_POST['tambah']))
		{
			
			$this->template->load('template','mstcustomer/tambah');
			
		} else {

         redirect(base_url('Mstcustomer'));
		}		
		
	}	
	public function simpan()
	 {
		 
		 if (isset($_POST['simpan'])) {
		 
	    $this->s->simpan(); 
		 echo "<script>alert('Data customer Berhasil Disimpan');
		     window.location.replace('../Mstcustomer');
		   </script>";
		
	  } else {
			 redirect(base_url('Mstcustomer'));
		 }
	}
	public function update()
   {
	   if(isset($_POST['id'])) 
	   {
		$this->s->edit();
		
		
		echo "<script>alert('Data customer Berhasil Diedit');
			 window.location.replace('../Mstcustomer');
			</script>	
			";
	   } else {
		   redirect(base_url('Mstcustomer'));
	   }	
   } 
	
   public function edit()
   {
	    if(isset($_POST['id'])){
		
		 $id=$this->input->post('id');
		 
		 
		 $data['edit'] = $this->db->get_where('tbl_mstcustomer', array('id' => $id))->row_Array();
		 
		
		 } else {
			 redirect(base_url('Mstcustomer'));
		 }
	     
		 $this->template->load('template', 'mstcustomer/edit', $data);
    
   }	 
   public function hapus()
   {
	    if(isset($_POST['id'])){
		
		 $id=$this->input->post('id');
		 
		 $data['hapus'] = $this->db->get_where('tbl_mstcustomer', array('id' => $id))->row_Array();
		 
		
		 } else {
			 redirect(base_url('Mstcustomer'));
		 }
	     
		 $this->template->load('template', 'mstcustomer/hapus', $data);
    
   }	 
   public function hapus_data()
   {
	   if(isset($_POST['id'])) 
	   {
		$this->s->hapus();
		
		
		echo "<script>alert('Data customer Berhasil Dihapus');
			 window.location.replace('../Mstcustomer');
			</script>	
			";
	   } else {
		   redirect(base_url('Mstcustomer'));
	   }	
   } 	 
	 

}
