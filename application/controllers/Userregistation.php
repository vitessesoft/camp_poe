<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserRegistation
 *
 * @author Sameera Danthanarayana
 */
class UserRegistation extends CI_Controller {

    function index() {
        $this->load->view('user_registation');
    }

    function register_user() {
        if (!empty($this->input->post("action"))) {
            $user_data = array(
                'title' => $this->input->post("title"),
                'f_name' => $this->input->post("f_name"),
                'l_name' => $this->input->post("l_name"),
                'id_type' => $this->input->post("id_type"),
                'id_number' => $this->input->post("id_number"),
                'email' => $this->input->post("email"),
                'country' => $this->input->post("country"),
                'tel' => $this->input->post("tel"),
                'user_name' => $this->input->post("username"),
                'password' => MD5($this->input->post("password")),
                'registerd_date' => $this->currentDateTime());

            $registraion_completed = $this->registrationmodel->registerUser($user_data);
            echo $registraion_completed;
        }
        //$this->check_availablilty();
        //$this->load->view('available_rooms');
    }

    function validate_user() {
        $this->load->model('registrationmodel');
        $user_exist = $this->registrationmodel->validateUser($this->input->post("email"));
        echo $user_exist;
    }

    function check_member_login() {
        $email = $this->input->post("username");
        $password = $this->input->post("password");
        if ((isset($email)) && (isset($password))) {
            $result = $this->registrationmodel->check_login($email, $password);
            if ($result) {
                $output = "<i class='fa fa-user'></i>&nbsp;" . $this->session->userdata['registerd_users_data']['username'] . " | <a href='#' id='logout' onclick='logout();' style= color: white;'><i class='fa fa-sign-out'></i></a>";
            } else {
                $output = "Invalid";
            }
        } else {
            $this->load->view('user_registation');
        }
        echo $output;
    }

    public function logoutuser() {
        if (!empty($this->input->post("action")) && ($this->input->post("action") == "logout")) {
            $this->session->sess_destroy();
            echo "<a href='#' data-toggle='modal' data-target='#login_form' style='color: white;'>Login</a>";
        } else {
            echo "0";
        }
    }

    private function currentDateTime() {
        date_default_timezone_set("Asia/Colombo");
        $date = date_create();
        $current_time = date_format($date, 'Y-m-d H:i:s');
        return $current_time;
    }

    public function check_availablilty() {

        $tot_no_guest = "";
        $checkin = $this->input->post("check_in");
        $checkout = $this->input->post("check_out");
        if ($checkin == "" || $checkout == "") {
            $checkin = date('Y-m-d');
            $checkout = date('Y-m-d', time() + 86400);
        }
        if ($this->input->post("adult") == "" && $this->input->post("child") == "") {
            $tot_no_guest = 1;
        } else {
            $tot_no_guest = $this->input->post("child") + $this->input->post("adult");
        }
        $no_of_weeks = $this->NoOfWeeks(date("m/d/Y", strtotime($checkin)), date("m/d/Y", strtotime($checkout)));

        $booking_data = array(
            'check_in' => date("Y-m-d", strtotime($checkin)),
            'check_out' => date("Y-m-d", strtotime($checkout)),
            'adult' => $this->input->post("adult"),
            'child' => $this->input->post("child"),
            'no_of_guest' => $tot_no_guest,
            'no_of_weeks' => $no_of_weeks);
        $room = $this->roommodel->availableRooms($booking_data);
        //echo $room;

        $output = "";
        if (!empty($room)) {
            foreach ($room as $rooms) {
                $output .= "<div class='media'><a class='pull-left' href='#' data-toggle='modal' data-target='#sigiriya'><img class='media-object' src='" . base_url() . $rooms->rm_cover_img . "' alt='Media Object'>";
                $output .= "</a><div class='media-body'><h4 class='media-heading'><span style='font-size: 24px; color: black;'>" . $rooms->rm_name . "</span></h4><span style='font-size: 28px;'><i class='fa fa-dollar'></i>&nbsp;&nbsp;" . $rooms->rm_amount . "/<span style='font-size: 20px;'>Per Week and Person</span></span><br>";
                $output .= $rooms->rm_detail . "<br><button type='button' id='" . $rooms->rm_id . "' class='btn btn-success order'><i style='font-size: 12px;' class='fa fa-key'></i>&nbsp;&nbsp;Order Now</button>&nbsp;&nbsp;<button id='" . $rooms->rm_id . "' type='button' class='btn btn-success view' id='" . $rooms->rm_id . "' data-toggle='modal' data-target='#sigiriya'><i style='font-size: 12px;' class='fa fa-list-alt'></i>&nbsp;&nbsp;View Details</button></div></div></br><hr style='isplay: block; height: 1px; border: 0; border-top: 1px solid #000; margin: 1em 0; padding: 0;'><br>";
            }
        } else {
            $output = "<div class='alert alert-danger' role='alert'>We apologize. There is no online availability for what you've requested. Please contact the hotel at 0777777717 for other possible options.</div>";
        }
        echo $output . "*" . date("m/d/Y", strtotime($checkin)) . "*" . date("m/d/Y", strtotime($checkout)) . "*" . $no_of_weeks;
    }

}
