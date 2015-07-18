<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index() {
        $this->load->view('contact_info');
    }

    public function send_email() {
        $this->load->library('email');
        //if ($this->input->post("submit"))) {
            $this->email->from($this->input->post("email"), $this->input->post("name"));
            $this->email->to('info@camppoe.com');
            $this->email->cc('another@another-example.com');
            $this->email->bcc('them@their-example.com');

            $this->email->subject($this->input->post("subject"));
            $this->email->message('Testing the email class.');

            $this->email->send();

            echo $this->email->print_debugger();
            $email_body = "Phone No : " . $this->input->post("phone") . "<br> message" . $this->input->post("message");

            //$this->load->view('contact_info');
        //}
    }

}
