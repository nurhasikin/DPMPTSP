<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_loginloket');
    }

    public function index(){
        // halaman login, kalau sudah login, maka pindah ke halaman dashboard loket
        if($this->session->userdata('login_loket'))
            redirect('loket/dashboard');

        if(isset($_POST['login'])){
            $data['result'] = $this->M_loginloket->login();
            $this->load->view('loket/v_login',$data);
        } else {
            $this->load->view('loket/v_login');
        }

    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('loket/login');
    }
}