<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_loginloket extends CI_Model {

    function login(){

        try {
            $email = $this->input->post('email', true);
            $password = $this->input->post('password', true);
            $result = $this->db->get_where('loket',array(
                                'email' => $email,
                                'password' => $password,
                                'status' => 1))->row();

            if($result){
                $this->session->set_userdata('login_loket',true);
                $this->session->set_userdata('email',$result->email);
                $this->session->set_userdata('nama',$result->nama);
                $this->session->set_userdata('gambar',$result->gambar);
                $this->session->set_userdata('theme','sb_loket');


                redirect('loket/index');
            } else {
                return "Maaf, Email atau Password Anda Salah !";
            }

        } catch(Exception $e){
            return $e->getMessage();
        }
    }
}