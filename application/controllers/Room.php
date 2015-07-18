<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Room
 *
 * @author Sameera Danthanarayana
 */
class Room extends CI_Controller {

    //private static $room_one = 1;

    public function index() {
        //$this->load->model('imagemodel');
        //$room['details'] = $this->imagemodel->getRoomParameters();
        $this->load->view('rooms');
    }

    public function room_id() {
        $this->load->model('imagemodel');
        $room['images'] = $this->imagemodel->getRoomImages($this->uri->segment(3));
        $room['details'] = $this->imagemodel->getRoomDetails($this->uri->segment(3));
        $this->load->view('room_one', $room);
    }

    public function room_img_by_id() {
        $this->load->model('imagemodel');
        //$room = $this->imagemodel->getRoomImages($this->input->post("id"));
        //$roomDetails = $this->imagemodel->getRoomDetails($this->input->post("id"));
        $room = $this->imagemodel->getRoomImages($this->input->post("id"));
        $roomDetails = $this->imagemodel->getRoomDetails($this->input->post("id"));
        $output = "";
        $output.= "<ol class='carousel-indicators hidden-xs'>";
        if (!empty($room)) {
            $status = "active";
            $count = 0;
            foreach ($room as $room_imgs) {
                $output.= "<li data-target='#myCarousel' data-slide-to='" . $count . "' class='" . $status . "'></li>";
                $count++;
                $status = "";
            }
        }
        $output.= "</ol><div class = 'carousel-inner'>";
        if (!empty($room)) {
            foreach ($room as $room_imgs) {
                $output.= "<div class = '" . $room_imgs->class . "' > <img src = '" . base_url() . $room_imgs->ril_img_url . "' class = 'properties' alt = 'properties' style='width: 600px; height: 376px; top: 22px; left: 15px;'/></div>";
            }
        }
        $output.= "</div>";
        $room_detail = "";
        $room_name = "";
        foreach ($roomDetails as $roomdel) {
            $room_detail = $roomdel->rm_detail;
            $room_detail .= $roomdel->rm_addtional_details;
            $room_name = $roomdel->rm_name;
        }
        echo $output . "*" . $room_detail . "*" . $room_name;
        //$this->load->view('room_one', $room);
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
                $output .= "</a><div class='media-body'><h4 class='media-heading'><span style='font-size: 35px; color:#2a7b72; padding:0px;'>" . $rooms->rm_name . "</span></h4><span style='font-size: 25px; color:#2a7b72;'><i class='fa fa-dollar'></i>&nbsp;&nbsp;" . $rooms->rm_amount . "/<span style='font-size: 20px;'>Per Week and Person</span></span><br>";
                $output .= "<p style='color: #ffffff; margin-top: 20px; padding-left:15px;  padding-right:15px; padding-top:0;  padding-bottom:0;'>".$rooms->rm_detail . "</p><br><button type='button' id='" . $rooms->rm_id . "' class='btn btn-success order'><i style='font-size: 12px;' class='fa fa-key'></i>&nbsp;&nbsp;Order Now</button>&nbsp;&nbsp;<button id='" . $rooms->rm_id . "' type='button' class='btn btn-success view' id='" . $rooms->rm_id . "' data-toggle='modal' data-target='#sigiriya'><i style='font-size: 12px;' class='fa fa-list-alt'></i>&nbsp;&nbsp;View Details</button></div></div></br><hr style='isplay: block; height: 1px; border: 0; border-top: 1px solid #000; margin: 1em 0; padding: 0;'><br>";
            }
        } else {
            $output = "<div class='alert alert-danger' role='alert'>We apologize. There is no online availability for what you've requested. Please contact the hotel at 0777777717 for other possible options.</div>";
        }
        echo $output . "*" . date("m/d/Y", strtotime($checkin)) . "*" . date("m/d/Y", strtotime($checkout)) . "*" . $no_of_weeks;
    }

    public function availabe_rooms() {

        $tot_no_guest = "";
        $checkin = $this->input->post("arrive");
        $checkout = $this->input->post("depart");

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
        $booking_data['avi_details'] = $this->roommodel->availableRooms($booking_data);
        $booking_data['check_in'] = date("m/d/Y", strtotime($checkin));
        $booking_data['check_out'] = date("m/d/Y", strtotime($checkout));
        if (!empty($this->input->post("room_home_id"))) {
            $booking_data['pack_details'] = $this->Packagemodel->getAvailabePackagers($booking_data, $this->input->post("room_id"));
        } else {
            $booking_data['pack_details'] = $this->Packagemodel->getAvailabePackagers($booking_data);
        }

        if (!empty($this->session->userdata('uniqueId'))) {
            $booking_data['booking_data'] = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
            $booking_data['pack_data'] = $this->Packagemodel->getTempPackagers($this->session->userdata('uniqueId'));
        }
        $this->load->view('available_rooms', $booking_data);
    }

    function currentDateTime() {
        echo $this->NoOfWeeks('1/1/2015', '1/7/2015');
    }

    function NoOfWeeks($date1, $date2) {
        $first = DateTime::createFromFormat('m/d/Y', $date1);
        $second = DateTime::createFromFormat('m/d/Y', $date2);
        return floor($first->diff($second)->days / 7) + 1;
    }

}
