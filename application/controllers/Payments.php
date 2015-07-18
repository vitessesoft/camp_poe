<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Payments
 *
 * @author Sameera Danthanarayana
 */
class Payments extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->helper('string');
        $this->load->model('bookingmodel');
        $this->load->model('packagemodel');
    }

    public function de_purchase($security_code) {
        $results_room = "";
        $results_pack = "";
        if ($security_code == $this->session->userdata('uniqueId')) {
            $config['business'] = 'nuwansadd@gmail.com';
            $config['cpp_header_image'] = ''; //Image header url [750 pixels wide by 90 pixels high]
            $config['return'] = 'http://localhost/duwa/vitesse/index.php/payments/notify_payment';
            $config['cancel_return'] = 'http://localhost/duwa/vitesse/index.php/contact';
            $config['notify_url'] = 'process_payment.php'; //IPN Post
            $config['production'] = FALSE; //Its false by default and will use sandbox
            $config["invoice"] = uniqid(); //The invoice id

            $this->load->library('paypal', $config);

            #$this->paypal->add(<name>,<price>,<quantity>[Default 1],<code>[Optional]);

            $results_room = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
            $results_pack = $this->packagemodel->getTempPackagers($this->session->userdata('uniqueId'));

//            $this->paypal->add('T-shirt', 2.99, 6); //First item
//            $this->paypal->add('Pants', 40);    //Second item
//            $this->paypal->add('Blowse', 10, 10, 'B-199-26'); //Third item with code
//
//            $this->paypal->pay(); //Proccess the payment

            $this->calculate_total($results_room, $results_pack);
        }
    }

    public function notify_payment() {
        $recived_data = "";
        $recived_data = print_r($this->input->post(), TRUE);
        //echo '<pre>' . $recived_data . '</pre>';
        if (!empty($recived_data)) {
            $results_room = $this->bookingmodel->get_temp_data($this->session->userdata('uniqueId'));
            $results_pack = $this->packagemodel->getTempPackagers($this->session->userdata('uniqueId'));
            $this->add_booking($results_room, $results_pack);
            $this->complete_booking($this->session->userdata('uniqueId'));
            redirect(base_url() . "index.php/camp/available-suites");
        }
    }

    function complete_booking() {
        $results_room = $this->bookingmodel->cancel_booking($this->session->userdata('uniqueId'));
        $this->session->unset_userdata('room_id');
        $this->session->unset_userdata('unique_id');
        $this->session->unset_userdata('pack_id');
        $this->session->unset_userdata('total_booking_amount');
    }

    private function calculate_total($results_room = null, $results_pack = null) {

        if (!empty($results_room)) {
            foreach ($results_room as $room_data) {
                $this->paypal->add($room_data->room_name, $room_data->price);
            }
        }
        if (!empty($results_pack)) {
            foreach ($results_pack as $room_data) {
                $this->paypal->add($room_data->package_name, $room_data->amount);
            }
        }
        $this->paypal->pay();
    }

    private function add_booking($results_room, $package_data) {
        $tot_amount = "";
        $booking_id = "";
        $booking_data = "";
        $status_room = "";
        $status_pack = "";
        if (!empty($results_room)) {
            foreach ($results_room as $booked_rooms) {
                $tot_amount += $booked_rooms->price;
                $tot_adult += $booked_rooms->adult;
                $tot_child += $booked_rooms->child;
            }
            $booking_data = $this->create_booking_array($tot_amount, $tot_adult, $tot_child);
            $booking_id = $this->bookingmodel->add_booking($booking_data);
            $status = $this->add_sub_bookings($results_room, $booking_id);
            $status_pack = $this->add_package($package_data, $booking_id);
            if ($status_room) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }

    private function add_package($package_data, $booking_id) {
        $booking_data = "";
        $status = "";
        if (!empty($package_data)) {
            foreach ($package_data as $booked_packs) {

                $booking_data = array(
                    'booking_id' => $booking_id,
                    'customer_id' => $this->session->userdata['registerd_users_data']['id'],
                    'no_of_guest' => $booked_packs->no_of_guests,
                    'package_id' => $booked_packs->package,
                    'amount' => $booked_packs->amount
                );
                $status = $this->bookingmodel->add_package($booking_data);
            }
            return $status;
        }
    }

    private function currentDateTime() {
        date_default_timezone_set("Asia/Colombo");
        $date = date_create();
        $current_time = date_format($date, 'Y-m-d H:i:s');
        return $current_time;
    }

    private function add_sub_bookings($room_data, $booking_id) {
        $status = "";
        $booking_data = "";
        foreach ($room_data as $booked_rooms) {
            $booking_data = array(
                'booking_id' => $booking_id,
                'room_id' => $booked_rooms->room_id,
                'check_in' => $booked_rooms->check_in,
                'check_out' => $booked_rooms->check_out
            );
            $this->bookingmodel->add_sub_booking($booking_data);
        }
        return $status;
    }

    private function create_booking_array($tot_amount, $tot_adult, $tot_child) {
        $booking_data = array(
            'customer_id' => $this->session->userdata['registerd_users_data']['id'],
            'booked_date' => $this->currentDateTime(),
            'no_of_guests' => ($tot_adult + $tot_child),
            'childrens' => $tot_child,
            'adult' => $tot_adult,
            'payment_type' => "paypal",
            'paid_amount' => $tot_amount,
            'audit' => $_SERVER['REMOTE_ADDR']
        );
        return $booking_data;
    }

}
