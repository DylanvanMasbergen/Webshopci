<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_management extends CI_Controller {

	public function index()
	{
		$data = array();

		

		$this->load->view("master",$data);
	}
}