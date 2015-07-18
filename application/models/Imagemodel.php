<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class imagemodel extends CI_Model {

    function getHomeImages() {
        $query = $this->db->get('home_sider');
        return $query->result();
    }

    function getRoomImages($roomId) {
        $query = $this->db->get_where('room_img_urls', array('rm_id' => $roomId));
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getAllRoomImages() {
        $query = $this->db->get('room_img_urls');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getRoomParameters() {
        $query = $this->db->get('room_parameters');
        return $query->result();
    }

    function getRoomDetails($roomId) {
        $query = $this->db->get_where('rooms', array('rm_id' => $roomId));
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getAllRoomDetails() {
        $query = $this->db->get('rooms');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function saveImage($data) {
        if ($this->db->insert('home_sider', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function deleteImg($id) {
        $this->db->where('id', $id);
        $this->db->delete('home_sider');
    }

}
?>


