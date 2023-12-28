<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
		$this->load->model('Tbl_user_model');
        $this->load->model('Tbl_user_model', 'user');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
		$data['user']=$this->Tbl_user_model->get_verifikator(); 
        $this->template->load('template','user/tbl_user_list', $data);
    } 
    
    public  function data_user()
	{
		$data=$this->user->get_verifikator();
		echo json_encode($data);
	}	
	 function data_user_ses()
	{
		$data=$this->Tbl_user_model->get_user();
		echo json_encode($data);
	}	

    public function tambah_user() 
    
	{
		$data['level']=$this->Tbl_user_model->get_level();
		
		
        $this->template->load('template','user/tbl_user_form', $data);
    }
    
    public function edit() {
        if (isset($_POST['edit'])) {
            
			$this->Tbl_user_model->edit();
			echo "<script>alert('Data User Berhasil Update ');
		     window.location.replace('../user');
		   </script>";
            
            
			
        }else {
			if (isset($_POST['id'])) {
            $id           = $this->input->post('id');
            $data['edit'] = $this->db->get_where('user', array('id_users' => $id))->row_Array();
			$data['level'] =	$this->user->get_level();
			$data['join'] =	$this->user->get_join_level();
			
			
			} else {
			 redirect(base_url('User'));
			}
			}
            $this->template->load('template', 'user/tbl_user_update', $data);
			
        }
    public function hapus() {
        if (isset($_POST['id'])) {
            
			
        $id=$this->input->post('id');
		$this->db->where('id_users', $id);
        $this->db->delete('user');
			  echo "<script>alert('Data User Berhasil Dihapus ');
		     window.location.replace('../user');
		   </script>";
			
        }else {
			if (isset($_POST['id_user'])) {
            $id           = $this->input->post('id_user');
            $data['edit'] = $this->db->get_where('user', array('id_users' => $id))->row_Array();
			
			} else {
			 redirect(base_url('User'));
			}
			}
            $this->template->load('template', 'user/tbl_user_hapus', $data);
			
        }
    
    
    public function simpan(){
		
		 if (isset($_POST['tambah'])) {
		 $username = $this->input->post('username');
		 $this->db->select('*');
		 $this->db->from('user');
		 $this->db->where('username', $username);
		 $query= $this->db->get();
		 $sql = $query;
		$cek_user = $sql->num_rows();
		if ($cek_user > 0) {
			 echo "<script>alert('Username Sudah Pernah Diinput, Silahkan Ganti Username ');
		     window.location.replace('../User');
		   </script>";
		}	else {
		$this->load->library('mailer');	
	    $this->user->save(); 
	
		   
		}   
	  }	else {
		redirect(base_url('User'));
	  }		
	}	
    public function update_action() 
    {
        $this->_rules();
        $foto = $this->upload_foto();
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_users', TRUE));
        } else {
            if($foto['file_name']==''){
                $data = array(
        'full_name'     => $this->input->post('full_name',TRUE),
        'username'         => $this->input->post('username',TRUE),
        'id_user_level' => $this->input->post('id_user_level',TRUE),
        'is_aktif'      => $this->input->post('is_aktif',TRUE));
            }else{
                $data = array(
        'full_name'     => $this->input->post('full_name',TRUE),
        'username'         => $this->input->post('username',TRUE),
                'images'        =>$foto['file_name'],
        'id_user_level' => $this->input->post('id_user_level',TRUE),
        'is_aktif'      => $this->input->post('is_aktif',TRUE));
                
                // ubah foto profil yang aktif
                $this->session->set_userdata('images',$foto['file_name']);
            }

            $this->Tbl_user_model->update($this->input->post('id_users', TRUE), $data);
        $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
            </div>');  
            redirect(site_url('user'));
        }
    }
    
    
    function upload_foto(){
        $config['upload_path']          = './assets/foto_profil';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('images');
        return $this->upload->data();
    }
    
    
    public function _rules() 
    {
    $this->form_validation->set_rules('full_name', 'full_name', 'trim|required');
    $this->form_validation->set_rules('username', 'username', 'trim|required');
    //$this->form_validation->set_rules('password', 'password', 'trim|required');
    //$this->form_validation->set_rules('images', 'images', 'trim|required');
    $this->form_validation->set_rules('id_user_level', 'user level', 'trim|required');
    $this->form_validation->set_rules('is_aktif', 'is aktif', 'trim|required');
    $this->form_validation->set_message('required', '{field} wajib diisi');

    $this->form_validation->set_rules('id_users', 'id_users', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_user.xls";
        $judul = "tbl_user";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
    xlsWriteLabel($tablehead, $kolomhead++, "Full Name");
    xlsWriteLabel($tablehead, $kolomhead++, "Email");
    xlsWriteLabel($tablehead, $kolomhead++, "Password");
    xlsWriteLabel($tablehead, $kolomhead++, "Images");
    xlsWriteLabel($tablehead, $kolomhead++, "Id User Level");
    xlsWriteLabel($tablehead, $kolomhead++, "Is Aktif");

    foreach ($this->Tbl_user_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
        xlsWriteLabel($tablebody, $kolombody++, $data->full_name);
        xlsWriteLabel($tablebody, $kolombody++, $data->email);
        xlsWriteLabel($tablebody, $kolombody++, $data->password);
        xlsWriteLabel($tablebody, $kolombody++, $data->images);
        xlsWriteNumber($tablebody, $kolombody++, $data->id_user_level);
        xlsWriteLabel($tablebody, $kolombody++, $data->is_aktif);

        $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_user.doc");

        $data = array(
            'tbl_user_data' => $this->Tbl_user_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('user/tbl_user_doc',$data);
    }
    
    function profile(){
        
    }

}

