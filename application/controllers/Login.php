<?php
Class Login extends CI_Controller{
    
    
    
    function index(){
        $this->load->view('auth/login');
		chek_seesion_login();
		
    }
    
    function cheklogin(){

        $this->rules();
        $username      = $this->input->post('username');
        //$password   = $this->input->post('password');
        $password = $this->input->post('password');

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    // set pesan form validasi error
    $this->form_validation->set_message('required', '{field} wajib diisi');

        // set default prefix (awalan) dan suffix (akhiran) pesan error
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

if ($this->form_validation->run() == FALSE) {
    $this->index();
} else {
        $hashPass = password_hash($password,PASSWORD_DEFAULT);
        $test     = password_verify($password, $hashPass);
        // query chek users
        $this->db->where('username',$username);
        //$this->db->where('password',  $test);
        $users       = $this->db->get('user');
        
        if($users->num_rows()>0){
            $user = $users->row_array();
            if(password_verify($password,$user['password'])){
                // retrive user data to session
                $this->session->set_userdata($user);
                redirect('Home');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert">Username atau password salah</div>');
                redirect('Login');
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert">Username atau Password Tidak Ditemukan</div>');
            redirect('Login');
        }
    }
    }
    
    public function rules() 
    {
    $this->form_validation->set_rules('username', 'username', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required');
    
    $this->form_validation->set_message('required', '{field} wajib diisi');


    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    }

    function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('status_login','Anda sudah berhasil keluar dari aplikasi');
        redirect('Login');
    }
	Public function daftar()
	{
	$this->load->view('auth/daftar');
		
	}	
}
