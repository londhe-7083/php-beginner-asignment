<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function index()
	{
        $this->load->view('navbar');
        $this->load->view('register');
	}

	function register()
	{
		$this->My_model->insert("users",$_POST);
	}
}
