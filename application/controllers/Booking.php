<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Booking
 *
 * @author Sameera Danthanarayana
 */
class Booking extends CI_Controller {

    function place_booking() {
        $booking_data = array(
            'check_in' => $this->input->post("arrive"),
            'check_out' => $this->input->post("depart"),
            'adult' => $this->input->post("adult"),
            'child' => $this->input->post("child"));
        $room['avi_details'] = $this->roommodel->availableRooms();
    }

    function create_booking() {
        $status = TRUE;
        $room_amount = "";
        $room_price = "";
        $room_name = "";
        $unique_id = "";
        $output = "";
        $this->load->model('imagemodel');
        $roomDetails = $this->imagemodel->getRoomDetails($this->input->post("room_id"));
        if (!empty($roomDetails)) {
            foreach ($roomDetails as $rm_details) {
                $room_price = $rm_details->rm_amount;
                $room_name = $rm_details->rm_name;
            }
        }

        $no_of_weeks = $this->NoOfWeeks(date("m/d/Y", strtotime($this->input->post("check_in"))), date("m/d/Y", strtotime($this->input->post("check_out"))));
        //First Time
        if (empty($this->session->userdata('room_id'))) {
            $unique_id = uniqid();
            $this->session->set_userdata('uniqueId', $unique_id);
        }
        if (!empty($this->input->post("room_id"))) {
            if ($this->input->post("room_id") <= 6) {
                if (($this->input->post("adult") == 2) || ($this->input->post("adult") == 1 && $this->input->post("child") == 1)) {
                    $room_amount = $rm_details->rm_discount_amount;
                    $status = FALSE;
                }
            }
            if ($this->input->post("child") > 0) {
                $room_amount += ($rm_details->rm_discount_amount / 2) * $this->input->post("child");
            }
            if ($status) {
                $room_amount += $room_price * $this->input->post("adult");
            }
            $temp_booking_data = array(
                'unique_id' => $this->session->userdata('uniqueId'),
                'room_id' => $this->input->post("room_id"),
                'tot_guest' => $this->input->post("guests"),
                'adult' => $this->input->post("adult"),
                'child' => $this->input->post("child"),
                'price' => ($room_amount * $no_of_weeks),
                'room_name' => $room_name,
                'room_price' => $room_price,
                'check_in' => date("Y-m-d", strtotime($this->input->post("check_in"))),
                'check_out' => date("Y-m-d", strtotime($this->input->post("check_out"))),
                'audit' => $_SERVER['REMOTE_ADDR']
            );

            $this->session->set_userdata('room_id', $this->input->post("room_id"));
            $confirmation = $this->bookingmodel->temp_booking($temp_booking_data);
            if ($confirmation) {
                $results = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
                $html_output = $this->create_html($results);
                if (!empty($html_output)) {
                    echo $html_output;
                }
            }
        }
    }

    private function create_html($results) {
        $output = "";
        $i = 1;
        foreach ($results as $booking_data) {
            $output .= "<form id='checkinform' style='margin-top: 10px; font-family: sans-serif;' method='POST' action=''><span class='label label-success pull-left'>Reservation " . $i . "</span><a href='#'><span class='label label-danger pull-right del' id='" . $booking_data->id . "'>Delete</span></a><br>";
            $output .= "<div class='form-group' ><label style=' color: white; font-size: 14px;'>Arrival</label><input type='text'  id='arriavle' value='" . $booking_data->check_in . "' class='form-control' disabled /></div>";
            $output .= "<div class='form-group'><label style=' color: white; font-size: 14px;'>Departure</label><input type='text' id='departure' value='" . $booking_data->check_out . "' class='form-control' disabled/></div>";
            $output .= "<div class='form-group'><label style=' color: white; font-size: 14px;'>Guests&nbsp;<i style='font-size: 14px;' class='fa fa-user-plus'></i></label><br><label style='font-family: cursive; color: white; font-size: 12px;'> " . $booking_data->adult . "  Adults and " . $booking_data->child . " Children</label></div>";
            $output .= "<div class='form-group'><label style=' color: white; font-size: 14px;'>Room Type&nbsp;<i style='font-size: 14px;' class='fa fa-glass'></i></label><br><label style='font-family: cursive; color: white; font-size: 12px;'>" . $booking_data->room_name . "</label></div>";
            $output .= "<div class='form-group'><hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'></div>";
            $output .= "<div class='form-group'><label class='pull-left' style=' color: #e4e4e4; font-size: 16px;' >Total Rate</label><span style=' color: #e4e4e4; font-size: 16px;' class='pull-right'>USD " . $booking_data->price . "<br></div>";
            $output .= "<br><div class='form-group'><hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'><hr style='isplay: block; height: 1px; border: 0; border-top: 2px solid #fff; margin: 1em 0; padding: 0;'></div></form>";
            $i++;
        }
        //$output .="<div class='form-group'><button type='button' class='btn btn-warning' onclick='book_another_room();'>Book Another Room</button></div>";
        return $output;
    }

    private function create_pack_html($results) {
        $output = "";
        $i = 1;
        $output .="<label style='font-size: 14px;'>Selected Packages&nbsp;<i style='font-size: 14px;' class='fa fa-user-plus'></i></label><br>";
        foreach ($results as $pack_data) {
            $output .= "<div class='form-group'>";
            $output .= "<span class='label label-warning pull-left' style='margin-left: 5px;'>Package " . $i . "</span><a href='#'><span class='label label-danger pull-right delpack' id='" . $pack_data->id . "' style='margin-right: 5px;'>Delete</span></a><br>";
            $output .= "<hr style='isplay: block; height: 1px; border: 0; border-top: solid #fff; margin: 10px; padding: 0;'>";
            $output .= "<label style='font-size: 14px;'>Package Name&nbsp;<i style='font-size: 14px;' class='fa fa-glass'></i></label><br>";
            $output .= "<label style='font-size: 12px;'><span id='pack_name'>" . $pack_data->package_name . "</span></label><br>";
            $output .= "<label style='font-size: 14px;'> Guests : <span id='tot_guest'>" . $pack_data->no_of_guests . "</span></label>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
            $output .= "<label class='pull-left' style='margin-left: 10px; font-size: 16px;' >Total Rate</label><span style=' color: #e4e4e4; font-size: 16px;' class='pull-right'>USD <samp id='pack_amount'>" . $pack_data->amount . "</samp></span><br>";
            $output .= "</div>";
            $i++;
        }
        return $output;
    }

    function delete_booking() {
        $this->bookingmodel->delete_temp_booking($this->input->post("temp_booking_id"), $this->session->userdata('uniqueId'));
        $results = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
        $html_output = $this->create_html($results);
        //$results_booking = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
        if (empty($results)) {
            $this->session->unset_userdata('room_id');
            echo "FALSE";
        } else if (!empty($html_output)) {
            echo $html_output;
        }
    }

    function delete_package() {
        $this->bookingmodel->delete_temp_package($this->input->post("temp_pack_id"), $this->session->userdata('uniqueId'));
        $results = $this->Packagemodel->getTempPackagers($this->session->userdata('uniqueId'));
        $html_output = $this->create_pack_html($results);
        //$results_booking = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
        if (empty($results)) {
            echo "";
        } else if (!empty($html_output)) {
            echo $html_output;
        }
    }

    function NoOfWeeks($date1, $date2) {
        $first = DateTime::createFromFormat('m/d/Y', $date1);
        $second = DateTime::createFromFormat('m/d/Y', $date2);
        return floor($first->diff($second)->days / 7) + 1;
    }

    function cancel_booking() {
        if ($this->input->post("action") == "cancel_booking") {
            $results_room = $this->bookingmodel->cancel_booking($this->session->userdata('uniqueId'));
            $this->session->unset_userdata('room_id');
            $this->session->unset_userdata('unique_id');
            $this->session->unset_userdata('pack_id');
            $this->session->unset_userdata('total_booking_amount');
            echo $results_room;
        }
    }

    function add_package() {
        $this->load->model('packagemodel');
        $total = "";
        $invoice = "";
        $results_pack = "";
        $billing_detail = "";
        if ($this->input->post("action") == "add_packge") {
            $packUList = json_decode($this->input->post("packagers"));
            $guestTList = json_decode($this->input->post("guest"));
            $this->session->set_userdata('pack_id', TRUE);
            for ($i = 0; $i < count($packUList); $i++) {
                $pro_data = array(
                    'unique_id' => $this->session->userdata('uniqueId'),
                    'package_name' => $this->Packagemodel->getPackagersName($packUList[$i]),
                    'package_amount' => $this->Packagemodel->getPackagers($packUList[$i]),
                    'package' => $packUList[$i],
                    'no_of_guests' => $guestTList[$i],
                    'amount' => ($this->Packagemodel->getPackagers($packUList[$i]) * $guestTList[$i])
                );
                $lastAutoid = $this->bookingmodel->insert_package($pro_data);
            }
            $results_room = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
            $results_pack = $this->packagemodel->getTempPackagers($this->session->userdata('uniqueId'));
            $total = $this->calculate_total($results_room, $results_pack);
            $invoice = $this->create_html_invoice($results_room, $results_pack, $total);
            $this->session->set_userdata('total_booking_amount', $total);
        } else if ($this->input->post("action") == "do_not_add_packge") {
            $results_room = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
            $total = $this->calculate_total($results_room);
            $invoice = $this->create_html_invoice($results_room, $results_pack, $total);
            $this->session->set_userdata('total_booking_amount', $total);
        }
        if ($this->session->userdata('user_logged')) {
            $billing_detail = "<strong>" . $this->session->userdata['registerd_users_data']['title'] . " " . $this->session->userdata['registerd_users_data']['f_name'] . " " . $this->session->userdata['registerd_users_data']['l_name'] . "<br>" . $this->session->userdata['registerd_users_data']['country'] . "</strong>";
            echo $invoice . "*" . $billing_detail;
        } else {
            echo FALSE;
        }
    }

    private function calculate_total($results_room = null, $results_pack = null) {
        $room_total = "";
        $package_amount = "";
        $total = "";
        if (!empty($results_room)) {
            foreach ($results_room as $room_data) {
                $room_total += $room_data->price;
            }
        }
        if (!empty($results_pack)) {
            foreach ($results_pack as $room_data) {
                $package_amount += $room_data->amount;
            }
        }
        $total = ($room_total + $package_amount);
        return $total;
    }

    public function add_pack() {
        
        $pro_data = array(
            'unique_id' => $this->session->userdata('uniqueId'),
            'package_name' => $this->Packagemodel->getPackagersName($this->input->post("pack_id")),
            'package_amount' => $this->Packagemodel->getPackagers($this->input->post("pack_id")),
            'package' => $this->input->post("pack_id"),
            'no_of_guests' => $this->input->post("guests"),
            'amount' => ($this->Packagemodel->getPackagers($this->input->post("pack_id")) * $this->input->post("guests"))
        );
        $lastAutoid = $this->bookingmodel->insert_package($pro_data);
        $results = $this->Packagemodel->getTempPackagers($this->session->userdata('uniqueId'));
        $html_output = $this->create_pack_html($results);
         if (empty($results)) {
            echo "FALSE";
        } else if (!empty($html_output)) {
            echo $html_output;
        }
    }

    function get_invoice() {
        $this->load->model('packagemodel');
        $results_room = "";
        $results_pack = "";
        $total = "";
        $invoice = "";
        if ($this->input->post("action") == "get_invoice") {
            $results_room = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
            $results_pack = $this->packagemodel->getTempPackagers($this->session->userdata('uniqueId'));
            $total = $this->calculate_total($results_room, $results_pack);
            $invoice = $this->create_html_invoice($results_room, $results_pack, $total);
            if ($this->session->userdata('user_logged')) {
                echo $invoice;
            } else {
                echo FALSE;
            }
        }
    }

    private function create_html_invoice($suite_results, $package_results, $total) {
       $output = "";
        foreach ($suite_results as $suite) {
            $output .="<tr><td>" . $suite->room_name . "</td><td>" . $suite->check_in . "</td><td>" . $suite->check_out . "</td><td class='text-right'><span style='font-weight: bold; color: #000000;'>USD&nbsp;" . $suite->room_price . "</span></td>";
            $output .= "<td class='text-right'>" . $suite->tot_guest . "</td><td class='text-right'><span style='font-weight: bold; color: #000000;'>USD&nbsp;" . $suite->price . "</span></td></tr>";
        }
        if (!empty($package_results)) {
            $output .= "<tr><td><span style='color: #000000; font-size: 1.0em; font-weight: bold'>Orderd Packagers</span></td><td></td><td></td><td></td><td></td><td></td></tr>";
            foreach ($package_results as $package) {
                $output .="<tr><td style='color: #000000;'>" . $package->package_name . "</td><td>-</td><td>-</td><td class='text-right'><span style='font-weight: bold; color: #000000;'>USD&nbsp;" . $package->package_amount . "</span></td>";
                $output .= "<td class='text-right'>" . $package->no_of_guests . "</td><td class='text-right'><span style='font-weight: bold; color: #000000;'>USD&nbsp;" . $package->amount . "</span></td></tr>";
            }
        }
        $output .= "<tr><td class='highrow'></td><td class='highrow'></td><td class='highrow'></td><td class='highrow'></td><td class='highrow text-center'><strong>Total</strong></td>";
        $output .= "<td class='highrow text-right'><span style='font-weight: bold; color: #000000;'>USD&nbsp;" . $total . "</span></td>";
        $output .= "</tr>";

        return $output;
    }

    public function expire_session() {
        $this->session->sess_destroy();
        //$this->load->view('admin_login');
    }

    //put your code here
}
