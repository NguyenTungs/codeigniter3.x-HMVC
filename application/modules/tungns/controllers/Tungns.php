<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'controllers/WEBINARIS.php');
class Tungns extends WEBINARIS {

	public function index()
	{
		$this->load->view('welcome_message');
	}
        
        public function test()
	{
		$this->load->view('welcome_message');
	}
}
