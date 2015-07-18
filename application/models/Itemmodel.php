<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of itemmodel
 *
 * @author Sameera
 */
class itemmodel extends CI_Model {

    function getAllItems() {
        $query = $this->db->get('items');
        return $query->result();
    }
    
    function getAllItemImages() {
        $query = $this->db->get('item_images');
        return $query->result();
    }
    function getOneItemImages($id) {
        $query = $this->db->get_where('item_images', array('item_id' => $id));
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    function getItemDetail($id) {
        $query = $this->db->get_where('items', array('id' => $id));
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function addItem($itemData) {
        if ($this->db->insert('items', $itemData)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function updateItem($itemData) {
        $this->db->where('id', $itemData->id);
        $this->db->update('items', $itemData);
    }

    function deleteItem($itemId) {
        $this->db->where('id', $itemId);
        $this->db->delete('item');
    }

}
