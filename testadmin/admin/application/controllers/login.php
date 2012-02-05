<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
            
	public function index()
	{
        include("../index.php");
        $this->load->helper('form');
        
        if (wire('user')->isLoggedin()) {
            echo 'Logged in';
        }else{
            $this->load->view('login');
        }
	}
	
	public function send()
	{
        include("../index.php");
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');
	    if (wire('session')->login($username, $password)) {
            echo 'Succesful';
	    }else{
	        echo 'Not succesful';
	    }
	    
	}

}