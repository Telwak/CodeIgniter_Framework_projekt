<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class XML_Welcome extends CI_Model {

    function get_xml() {
        $query = $this->db->get('xml');
        return $query->result_array();
    }
}