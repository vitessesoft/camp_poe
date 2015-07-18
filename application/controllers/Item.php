<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Item
 *
 * @author Sameera Danthanarayana 
 */
class Item {

    function add_item() {
        $item_added = $this->shopmodel->addItem();
        if ($item_added) {
            
        } else {
            
        }
    }

    function delete_item() {
        $item_deleted = $this->shopmodel->deleteItem();
        if ($item_deleted) {
            
        } else {
            
        }
    }

    function update_item() {
        $item_deleted = $this->shopmodel->updateItem();
        if ($item_deleted) {
            
        } else {
            
        }
    }

}
