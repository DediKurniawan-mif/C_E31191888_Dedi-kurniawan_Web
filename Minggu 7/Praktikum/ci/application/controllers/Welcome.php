<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function profil()
	{
		$this->load->view('profil');
	}

    public function contact()
	{
		$this->load->view('contact');
	}
}
