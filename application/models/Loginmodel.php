<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class loginmodel extends CI_Model {

    function check($email, $password) {
        $password1 = md5($password);
        $query = $this->db->get_where('users', array('user_id' => $email));
        if ($query->num_rows() > 0) {
            $query = $query->row_array();
            if (($email === $query["user_id"]) && ($password1 === $query["password"])) {
                $userdata = array(
                    'email' => $query['user_id'],
                    'role' => $query['role'],
                    'name' => $query['name']
                );
                $this->session->set_userdata('loginData', $userdata);
                $this->updateLogin($this->session->userdata['loginData']['email']);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function updateLogin($user) {
        $data = array(
            'last_login' => $this->currentDateTime(),
            'audit' => $_SERVER['REMOTE_ADDR']
        );

        $this->db->where('user_id', $user);
        $this->db->update('users', $data);
    }

    private function currentDateTime() {
        date_default_timezone_set("Asia/Colombo");
        $date = date_create();
        $current_time = date_format($date, 'Y-m-d H:i:s');
        return $current_time;
    }

}

?>
