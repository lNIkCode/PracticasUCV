<?php
class Ceventos extends ci_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index (){
		$this->load->view('vencuestas');
	}
}
