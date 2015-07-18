<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TeamPoe
 *
 * @author Sameera Danthanarayana
 */
class TeamPoe extends CI_Controller {
    
     function index(){
         $this->load->view('team_poe');
    }
    
      function team_two(){
         $this->load->view('tema_profile_2');
    }
    
    
}
