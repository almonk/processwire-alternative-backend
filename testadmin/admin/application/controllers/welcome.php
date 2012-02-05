<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        include("../index.php");
    
		$this->load->view('dashboard');
	}
}