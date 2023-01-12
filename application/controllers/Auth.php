<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }
	public function index()
	{
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if($this->form_validation->run() == false){
        $data["title"] = "Login Page";
        $this->load->view('templates/auth_header',$data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
        }else{
            $this->_login();
        }
	}
    public function register()
	{
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah digunakan!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',[
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        
        if($this->form_validation->run() == false) {
        $data["title"] = "Register Page";
        $this->load->view('templates/auth_header',$data);
        $this->load->view('auth/register');
        $this->load->view('templates/auth_footer');
            }else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => htmlspecialchars($this->input->post('password1', true)),
                'role' => 'Member'
            ];
            
            $this->db->insert('user',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Akun berhasil dibuat!</div>');
            redirect('auth');
                
        }
    }
   private function _login(){

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user){
            //ada
            if($password == $user['password']){
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role']
                ];
                if($user['role'] == 'Member'){
                    $this->session->set_userdata($data);
                    redirect('');    
                }else{
                    $this->session->set_userdata($data);
                    redirect('tiket/admin');    
                }
            }else {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email atau Password Salah!</div>');
                redirect('auth');
            }
        }else{
            //tidak ada
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email tidak terdaftar!</div>');
            redirect('auth');
        }
        
    }
    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->sess_destroy();
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Successfully logout!</div>');
        redirect('auth');
    }
}
