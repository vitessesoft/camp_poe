<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Packagemodel
 *
 * @author Sameera
 */
class Packagemodel extends CI_Model {

    function getAvailabePackagers() {
        $query = $this->db->get('packagers');
        return $query->result();
    }

    function getPackagers($id) {
        $query = $this->db->get_where('packagers', array('id' => $id));
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $packData) {
                return $packData->amount;
            }
        }
    }
    
    function getPackagersName($id) {
        $query = $this->db->get_where('packagers', array('id' => $id));
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $packData) {
                return $packData->name;
            }
        }
    }

    function getTempPackagers($session_id) {
        $query = $this->db->get_where('temp_package_data', array('unique_id' => $session_id));
        return $query->result();
    }

}
