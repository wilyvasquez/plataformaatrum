<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCtr extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function error_404()
	{
		$data["contenido"] = "error-body";
		$this->load->view('template/plantilla',$data);
	}

	public function logout()
	{
		// $this->session->sess_destroy();
		redirect(base_url().'');
	}
}
