<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function index()
	{
		$this->load->view('./front/contact');
	}

	public function create_message();
	{

	}


}