<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo_view extends CI_Controller {
	public function index()
	{
		$this->load->view('template/headerview');
		$this->load->view('content1/contentview');
		$this->load->view('template/footerview');
	}
}