<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_home_model extends CI_Model
{


public function identitas()
	{
	    $id=1; 
		$this->db->select('*');
		$this->db->from('tbl_identitas');
		$this->db->where('id_identitas',$id);
		$query= $this->db->get();
        return $query->result();	
	}	

	
}
?>