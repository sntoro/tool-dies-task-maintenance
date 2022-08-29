<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scan extends CI_Controller {

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

		$data['msg'] = $msg;
        $data['alert'] = $alert;
        $data['content'] = 'scan-qrcode';
        $this->load->view('template-login', $data);
	}

	public function transaction()
	{
		$this->load->view('transaction');
	}
}
