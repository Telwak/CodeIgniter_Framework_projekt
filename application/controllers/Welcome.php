<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
	        $data['xml'] = $this->XML_Welcome->get_xml();
		$this->load->view('welcome_message', $data);
		
       
	}
	  function search_xml() {
		  
		  $Post = $this->input->post('Search');
		  $Post1 = $this->input->post('SearchID');
		    $data['xml'] = $this->XML_Welcome->search_xml($Post1,$Post);
    		$this->load->view('welcome_message', $data);
       
    }
	
 function delete_xml() {
		  
			$Post = $this->input->post('Usun');
		    $data['xml'] = $this->XML_Welcome->delete_xml($Post);
			$this->load->view('welcome_message', $data);
    }
	function add_xml() {
		  
			$Post = $this->input->post('Add');
		    $data['xml'] = $this->XML_Welcome->add_xml($Post);
			$this->load->view('welcome_message', $data);
    }
}
