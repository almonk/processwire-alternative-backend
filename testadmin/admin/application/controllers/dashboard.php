<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
            
	public function index()
	{
        $this->load->view('dashboard');
	}
	
	
	public function test()
	{
	    $this->load->view('new');
	}
	

}