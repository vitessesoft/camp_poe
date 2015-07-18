<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registrationmodel
 *
 * @author Sameera
 */
class registrationmodel extends CI_Model {

    private $table = "registerd_users";

    function registerUser($userData) {
        if ($this->db->insert($this->table, $userData)) {
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

    function validateUser($email) {
        // $query = $this->db->get($this->table);
        $query = $this->db->get_where('registerd_users', array('email' => $email));
        $result_set = $query->result();
        if (!empty($result_set)) {
            $return_value = 1;
        } else {
            $return_value = 0;
        }
        return $return_value;
    }

    function check_login($email, $password) {
        $password1 = md5($password);
        $query = $this->db->get_where('registerd_users', array('user_name' => $email));
        if ($query->num_rows() > 0) {
            $query = $query->row_array();
            if (($email === $query["user_name"]) && ($password1 === $query["password"])) {
                $userdata = array(
                    'id' => $query['id'],
                    'title' => $query['title'],
                    'email' => $query['email'],
                    'username' => $query['user_name'],
                    'f_name' => $query['f_name'],
                    'l_name' => $query['l_name'],
                    'country' => $query['country']
                );
                $this->session->set_userdata('registerd_users_data', $userdata);
                $this->session->set_userdata('user_logged', TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

}
