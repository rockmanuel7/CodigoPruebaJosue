<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('presentacion');
		$this->load->view('lista');
	     $this->load->view('footer');
	}
}
