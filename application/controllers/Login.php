<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index($code = null, $msg = null)
    {
        if ($code == 1) {
            $msg = 'User tidak terdaftar';
            $alert = 'alert alert-danger';
        } else if ($code == 2) {
            $msg = 'Password salah';
            $alert = 'alert alert-danger';
        } else if ($code == 3) {
            $msg = 'User tidak terdaftar di area ';
            $alert = 'alert alert-danger';
        } else if ($code == 6) {
            $msg = 'User tidak terdaftar di area';
            $alert = 'alert alert-danger';
        } else {
            $msg = null;
            $alert = null;
        }

        $data['msg'] = $msg;
        $data['alert'] = $alert;
        $data['content'] = 'login';
        $this->load->view('template-login', $data);
    }

    public function tryLogin()
    {
        //$this->load->model('Login_model');

        // $npk = trim($this->input->post('npk'));
        // $pass = trim($this->input->post('password'));
        redirect('scan');

        // if ($this->Login_model->userExist($npk)) {
        //     if ($this->Login_model->auth($npk, $pass)) {
        //         if ($this->Login_model->checkArea($npk, $pass)) {
        //             $this->Login_model->setSession($npk);
        //             redirect('Scan');
        //         } else {
        //             $this->index('3');
        //         }
        //     } else {
        //         $this->index('2');
        //     }
        // } else {
        //     $this->index('1');
        // }
    }

    public function logout($area = null)
    {
        $this->session->unset_userdata('fullname');
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('area');
        $this->session->unset_userdata('idscanner');
        $this->session->unset_userdata('id_doc');
        $this->session->unset_userdata('status_session');
        $this->session->sess_destroy();

        redirect('Login/index/' . $area);
    }
}
