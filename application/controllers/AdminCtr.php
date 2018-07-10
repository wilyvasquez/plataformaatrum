<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCtr extends CI_Controller {

	public function index()
	{
		$data["contenido"] = "error-body";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
	}

	public function usuarios()
	{
		$data["user"]      = "active";
		$data["contenido"] = "admin/usuarios";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
	}

	public function FormUser()
	{
		$data["user"]      = "active";
		$data["contenido"] = "admin/form-user";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
	}
	 /*MOTOS*/
	public function motocicletas()
	{
		$data["motos"]     = "active";
		$data["contenido"] = "admin/motocicletas";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
	}

	public function FormMotos()
	{
		$data["motos"]     = "active";
		$data["title"]     = "Agregar Motocicletas";
		$data["contenido"] = "admin/form-motos";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
	}

	public function UpMotos($id)
	{
		$data["motos"]     = "active";
		$data["title"]     = "Actualizar Motocicletas";
		$data["contenido"] = "admin/up-motos";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
	}
	/*END MOTOS*/

	 /*CREDTIOS*/
	public function creditos()
	{
		$data["credito"]   = "active";
		$data["contenido"] = "admin/creditos";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
	}

	public function FormCredito()
	{
		$data["credito"]   = "active";
		$data["title"]     = "Subir Credito";
		$data["contenido"] = "admin/form-credito";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
	}

	public function UpCredito($id)
	{
		$data["credito"]   = "active";
		$data["title"]     = "Actualizar Credito";
		$data["contenido"] = "admin/form-credito";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
	}

	/*END CREDITOS*/

	public function referencia()
	{
		$data["ref"]       = "active";
		$data["contenido"] = "admin/referencias";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
	}

	public function estadisticas()
	{
		$data["ref"]       = "active";
		$data["contenido"] = "admin/estadisticas";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
		$this->load->view('admin/js-donat');
	}

	public function perfil()
	{
		$data["contenido"] = "admin/perfil";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
	}

	public function perfilUser()
	{
		$data["user"]      = "active";
		$data["contenido"] = "admin/perfil-user";
		$data["menu"]      = "admin/menu-admin";
		$this->load->view('template/plantilla',$data);
	}
}
