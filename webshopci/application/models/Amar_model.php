<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amar_model extends CI_Model{

	public function view_data($table, $where, $order1, $order2){

		$this->db->select("*");
		$this->db->from($table);
		if($order1 != ""){
			$this->db->order_by($order1, $order2);
		}

		return $this->db->get()->result();



	}
}