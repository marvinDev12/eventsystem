<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CInitialize extends CI_Controller {


	public function index()
	{
		$this->load->view('vLogin.php');
	}
}
