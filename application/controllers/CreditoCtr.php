<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreditoCtr extends CI_Controller {

	public function index()
	{
		$data = $this->array_credito();
		$data["contenido"] = "admin/error-body";
		$data["menu"]      = "creditos/menu-credito";
		$this->load->view('template/plantilla',$data);
	}

	public function creditos()
	{
		$data = $this->array_credito();
		$data["link"]      = $data;
		$data["creditos"]  = "active";
		$data["contenido"] = "creditos/creditos";
		$data["menu"]      = "creditos/menu-credito";

		$data["title"]     = "Registro Créditos";
		$this->load->view('template/plantilla',$data);
	}

	public function activos_creditos()
	{
		$data = $this->array_credito();
		$data["link"]      = $data;
		$data["creditos"]  = "active";
		$data["contenido"] = "creditos/creditos";
		$data["menu"]      = "creditos/menu-credito";

		$data["title"]     = "Créditos Activos";
		$this->load->view('template/plantilla',$data);
	}

	public function pausados_creditos()
	{
		$data = $this->array_credito();
		$data["link"]      = $data;
		$data["creditos"]  = "active";
		$data["menu"]      = "creditos/menu-credito";
		$data["contenido"] = "creditos/creditos";

		$data["title"]     = "Créditos Pausados";
		$this->load->view('template/plantilla',$data);
	}

	public function atrasado_creditos()
	{
		$data = $this->array_credito();
		$data["link"]      = $data;
		$data["creditos"]  = "active";
		$data["contenido"] = "creditos/creditos";
		$data["menu"]      = "creditos/menu-credito";

		$data["title"]     = "Créditos Atrasados";
		$this->load->view('template/plantilla',$data);
	}

	function array_credito()
	{
		$data = array(
			'registro'  => "principal", 
			'activos'   => "acredito", 
			'pausados'  => "pcredito", 
			'atrasados' => "atcredito",
			'perfil'    => "Creditos"
		);
		return $data;
	}
	 /*registro clientes*/
	public function clientes()
	{
		$data = $this->array_cliente();
		$data["link"]      = $data;
		$data["clientes"]  = "active";
		$data["title"]     = "Registro Clientes";
		$data["menu"]      = "creditos/menu-credito";
		$data["contenido"] = "creditos/creditos";
		$this->load->view('template/plantilla',$data);
	}

	public function activos_clientes()
	{
		$data = $this->array_cliente();
		$data["link"]      = $data;
		$data["clientes"]  = "active";
		$data["title"]     = "Créditos Clientes";
		$data["menu"]      = "creditos/menu-credito";
		$data["contenido"] = "creditos/creditos";
		$this->load->view('template/plantilla',$data);
	}

	public function pausados_clientes()
	{
		$data = $this->array_cliente();
		$data["link"]      = $data;
		$data["clientes"]  = "active";
		$data["title"]     = "Clientes Pausado";
		$data["menu"]      = "creditos/menu-credito";
		$data["contenido"] = "creditos/creditos";
		$this->load->view('template/plantilla',$data);
	}

	public function atrasado_clientes()
	{
		$data = $this->array_cliente();
		$data["link"]      = $data;
		$data["clientes"]  = "active";
		$data["title"]     = "Clientes Atrasados";
		$data["contenido"] = "creditos/creditos";
		$data["menu"]      = "creditos/menu-credito";
		$this->load->view('template/plantilla',$data);
	}

	public function pagos_clientes()
	{
		$data = $this->array_cliente();
		$data["link"]      = $data;
		$data["creditos"]  = "active";
		$data["title"]     = "Pagos Cliente";
		$data["menu"]      = "creditos/menu-credito";
		$data["contenido"] = "creditos/pagos";
		$this->load->view('template/plantilla',$data);
	}

	public function detalles_pago()
	{
		$data = $this->array_cliente();
		$data["link"]      = $data;
		$data["creditos"]  = "active";
		$data["title"]     = "Detalles pago";
		$data["menu"]      = "creditos/menu-credito";
		$data["contenido"] = "creditos/detalles-pago";
		$this->load->view('template/plantilla',$data);
	}

	public function perfil_cliente()
	{
		$data = $this->array_cliente();
		$data["link"]      = $data;
		$data["creditos"]  = "active";
		$data["title"]     = "Detalles pago";
		$data["menu"]      = "creditos/menu-credito";
		$data["contenido"] = "creditos/perfil";
		$this->load->view('template/plantilla',$data);
	}

	public function pagos_print()
	{
		$this->load->view('creditos/pago-print');
	}

	function array_cliente()
	{
		$data = array(
			'registro'  => "clientes", 
			'activos'   => "aclientes", 
			'pausados'  => "pclientes", 
			'atrasados' => "atclientes",
			'perfil'    => "Clientes"
		);
		return $data;
	}
	/*end registro clientes*/
}
