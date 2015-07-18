<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function index() {
        $this->load->view('work');
    }
       public function albem() {
        $this->load->view('albem');
    }
          public function blog() {
        $this->load->view('blog');
    }


}
