<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Shop
 *
 * @author Sameera Danthanarayana
 */
class Shop extends CI_Controller {

    public function index() {
        $data['items'] = $this->itemmodel->getAllItems();
        $data['images'] = $this->itemmodel->getAllItemImages();
        $this->load->view('cart', $data);
    }

    public function item_details($id) {
        $data['images'] = $this->itemmodel->getAllItemImages();
        $data['item_detail'] = $this->itemmodel->getItemDetail($id);
        $data['item_img'] = $this->itemmodel->getOneItemImages($id);
        $this->load->view('view_item', $data);
    }

}
