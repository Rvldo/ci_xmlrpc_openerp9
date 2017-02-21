<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class firstrun extends CI_Controller {

	public function index()
	{
		$this->load->view('firstrun_view');
	}
}
