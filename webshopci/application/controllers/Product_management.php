<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_management extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['title'] = "Product Management | CI-Webshop";
		$this->load->model("Amar_model", "am", TRUE);
		$data ['allUnit']= $this->am->view_data("unit", "", "name", "asc" );
		$data ['allCat']= $this->am->view_data("category", "", "name", "asc" );
		$data ['allScat']= $this->am->view_data("subcategory", "", "name", "asc" );

		/*
		echo "<pre>";
		print_r($data);
		echo "<pre>";
		*/
		
		$data['content'] = $this->load->view("back/product-new",$data, TRUE);
		$this->load->view("master",$data);
	}

}