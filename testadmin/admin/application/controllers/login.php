<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
            
	public function index()
	{
        include("../index.php");
        $this->load->helper('form');

        if (wire('user')->isLoggedin()) {
            redirect('dashboard');
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
            redirect('dashboard');
	    }else{
	        $this->session->set_flashdata('error', '<b>Incorrect login</b>');
	        redirect('login');
	    }
	    
	}
	
	public function logout()
	{
	    include("../index.php");
	    wire('session')->logout();
	    
	    $this->session->set_flashdata('success', '<b>Logged out successfully</b>');
        redirect('login');
	}

}