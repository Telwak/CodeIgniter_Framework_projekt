<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class XML_Welcome extends CI_Model {
	
		
      
		
    function get_xml() {
		$this->db->order_by("ID", "desc");
        $query = $this->db->get('xml');
        return $query->result_array();
    }
	   function search_xml($id,$text) {
		 if ($id == null)
		 {
			 	$this->db->order_by("ID", "desc");
			   $query = $this->db->get_where('xml',array('TEXT' => $text));
		 }else if ($text == null)
		 {
			 	$this->db->order_by("ID", "desc");
			 $query = $this->db->get_where('xml',array('ID' => $id));
		 }else
		 {
			 	$this->db->order_by("ID", "desc");
			 $query = $this->db->get_where('xml',array('TEXT' => $text,'ID' => $id));
		 }
        return $query->result_array();
    }
	 function delete_xml($row) {
	
        $this->db->delete('xml', array('ID' => $row));
			$this->db->order_by("ID", "desc");
        $query = $this->db->get('xml');
        return $query->result_array();
    }
	 function add_xml($row) {
	$data = array(
                    'ID' => null,
                    'TEXT' => $row
                   
                );
        $this->db->insert('xml',$data); 
		
		$this->db->order_by("ID", "desc");
        $query = $this->db->get('xml');
		
        return $query->result_array();
    }
}