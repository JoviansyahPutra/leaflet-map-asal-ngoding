<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function sto_json()
	{
		$data=$this->db->get('sto')->result();
		echo json_encode($data);

	}
}
