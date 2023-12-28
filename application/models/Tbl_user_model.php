<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_user_model extends CI_Model
{

    public $table = 'user';
    public $id = 'id_users';
	public $nama = 'full_name';
    public $order = 'DESC';
	public $order2 = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    
	
    // get all
    function get_all()
    {
        $this->db->order_by($this->nama, $this->order2);
		$this->db->join('user_level','user.id_user_level=user_level.id_user_level');
        return $this->db->get($this->table)->result();
    }
	function get_user()
	{
	 $user=$this->session->userdata('username');	
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $user);
		$query= $this->db->get();
        return $query->result();	
	}	
	
	
	function get_verifikator()
	{
	    
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('user_level','user.id_user_level=user_level.id_user_level');
		$this->db->where('user.id_user_level','2');
		$query= $this->db->get();
        return $query->result();	
	}	
	
	
	
	public function get_level()
	{
	 	
		$this->db->select('*');
		$this->db->from('user_level');
		$this->db->where('id_user_level','2');
		$query= $this->db->get();
        return $query->result();	
	}	
	public function get_prodi()
	{
	 	
		$this->db->select('*');
		$this->db->from('tbl_prodi');
		$query= $this->db->get();
        return $query->result();	
	}	
	public function get_join_level()
	{
	 	$id=$this->input->post('id');
		$this->db->select('*');
			
		$this->db->join('user_level','user.id_user_level=user_level.id_user_level');
		$this->db->from('user');
		$this->db->where('id_users', $id);
		$query= $this->db->get();
        return $query->result();	
	}	
	Public function save() {
		      
       $password       = $this->input->post('password');
            $options        = array("cost"=>4);
            $hashPassword   = password_hash($password,PASSWORD_BCRYPT,$options);
            
            $data = array(
        'full_name'     => $this->input->post('full_name'),
        'username'         => $this->input->post('username'),
		'email'         => $this->input->post('email'),
        'password'      => $hashPassword,
        'id_user_level' => 2
        
		
        );
        $this->db->insert('user', $data);
		$email_penerima = $this->input->post('email');
		$username = $this->input->post('username');
            $subjek = 'User Verifikasi Sayembara';
            $pesan = 'User Verifikasi : '.$username.' , Password : '. $password.'<br>  <br> Silahkan Login di http://sayembara.binjaikota.go.id/admin'  ;

            $content = $this->load->view('content', array('pesan'=>$pesan), true); 
            $sendmail = array(
                'email_penerima'=>$email_penerima,
                'subjek'=>$subjek,
                'content'=>$content

            );
            $send = $this->mailer->send($sendmail);


            echo "<script>alert('User Berhasil di create');
			 window.location.replace('../User');
			</script>";
    }
	public function edit()
	{
		$foto = $this->upload_foto();
			$password       = $this->input->post('password',TRUE);
            $options        = array("cost"=>4);
            $hashPassword   = password_hash($password,PASSWORD_BCRYPT,$options);
			if($foto['file_name']==''){
             $data = array(
			'full_name'     => $this->input->post('full_name',TRUE),
			'username'         => $this->input->post('username',TRUE),
			'id_user_level' => $this->input->post('level_user',TRUE),
			'password'      => $hashPassword,
			'is_aktif'      => $this->input->post('is_aktif',TRUE));
			
            }else{
            $data = array(
			'full_name'     => $this->input->post('full_name',TRUE),
			'username'         => $this->input->post('username',TRUE),
			'images'        =>$foto['file_name'],
			'password'      => $hashPassword,
			'id_user_level' => $this->input->post('level_user',TRUE),
			'is_aktif'      => $this->input->post('is_aktif',TRUE));
                
                
            }
			$id=$this->input->post('id_users');
            $this->db->where('id_users', $id);
			$this->db->update($this->table, $data);
	}	
	 function upload_foto(){
        $config['upload_path']          = 'images/foto_user';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
       // $config['max_size']             = 10000;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('images');
        return $this->upload->data();
    }
    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_users', $q);
    $this->db->or_like('full_name', $q);
    $this->db->or_like('username', $q);
    $this->db->or_like('password', $q);
    $this->db->or_like('images', $q);
    $this->db->or_like('id_user_level', $q);
    $this->db->or_like('is_aktif', $q);
    $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_users', $q);
    $this->db->or_like('full_name', $q);
    $this->db->or_like('username', $q);
    $this->db->or_like('password', $q);
    $this->db->or_like('images', $q);
    $this->db->or_like('id_user_level', $q);
    $this->db->or_like('is_aktif', $q);
    $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    


    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
	public function hapus() {
		$id=$this->input->post('id');
		$this->db->where('id_users', $id);
        $this->db->delete('tbl_user');
    }
	function cek(){
	$controller = $this->uri->segment(1);
	$url=$controller;
	$menu = $this->db->get_where('tbl_menu', array('url' => $url))->row_array();
    $level_user = $this->session->userdata('id_user_level');
	 $query= $this->db->get_where('tbl_hak_akses', array('id_user_level' => $level_user, 'id_menu' => $menu['id_menu']));
        return $query->result();
   
	}	

}
?>
