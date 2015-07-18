<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bookingmodel
 *
 * @author Sameera
 */
class bookingmodel extends CI_Model {

    function temp_booking($temp_data) {

        if ($this->db->insert('temp_booking_data', $temp_data)) {
            $current_txn_id = $this->db->insert_id();
            if (!empty($current_txn_id)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function cancel_booking($session_id) {
        $this->db->delete('temp_booking_data', array('unique_id' => $session_id));
        $this->db->delete('temp_package_data', array('unique_id' => $session_id));
        return TRUE;
    }

    function get_temp_data($session_id) {
        $query = $this->db->get_where('temp_booking_data', array('unique_id' => $session_id));
        return $query->result();
    }

    function get_next_booking_id() {
        $invoice_id = "";
        $this->db->select_max('id');
        $query = $this->db->get('booking');
        foreach ($query->result() as $booking_data) {
            $invoice_id = $booking_data->id + 1;
        }
        return $invoice_id;
    }

    function delete_temp_booking($id, $session_id) {
        $this->db->delete('temp_booking_data', array('unique_id' => $session_id, 'id' => $id));
    }
    function delete_temp_package($id, $session_id) {
        $this->db->delete('temp_package_data', array('unique_id' => $session_id, 'id' => $id));
    }

    function insert_package($pro_data) {
        if ($this->db->insert('temp_package_data', $pro_data)) {
            $current_txn_id = $this->db->insert_id();
            if (!empty($current_txn_id)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
    
    function add_booking($booking_data) {
        if ($this->db->insert('booking', $booking_data)) {
            $current_txn_id = $this->db->insert_id();
            if (!empty($current_txn_id)) {
                return $current_txn_id;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
    function add_package($pack_data) {
        if ($this->db->insert('package_linked', $pack_data)) {
            $current_txn_id = $this->db->insert_id();
            if (!empty($current_txn_id)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
    function add_sub_booking($booking_data) {
        if ($this->db->insert('booking_linked', $booking_data)) {
            $current_txn_id = $this->db->insert_id();
            if (!empty($current_txn_id)) {
                return $current_txn_id;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

}
