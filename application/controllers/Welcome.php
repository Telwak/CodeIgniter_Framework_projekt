<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
	        $data['xml'] = $this->XML_Welcome->get_xml();
		$this->load->view('welcome_message', $data);
       
		
	}
}
