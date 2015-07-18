<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of roommodel
 *
 * @author Sameera
 */
class roommodel extends CI_Model {

//    function availableRooms($booking_data) {
//        $query = $this->db->query('SELECT rooms.* FROM booking,rooms WHERE DATE(booking.b_check_in) < DATE_SUB('.$booking_data['check_in'].') AND DATE(booking.b_check_out) > DATE_SUB('.$booking_data['check_out'].')');
//        $query = $this->db->get('SELECT rooms.* FROM booking,rooms where booking.b_id = 1');
//        return $query->result();
//    }

    function availableRooms($booking_data, $room_id = null) {
        //$query = $this->db->query('SELECT rooms.* FROM booking,rooms WHERE DATE(booking.b_check_in) < DATE_SUB('.$booking_data['check_in'].') AND DATE(booking.b_check_out) > DATE_SUB('.$booking_data['check_out'].')');
        //$query = "SELECT rs.* FROM booking_linked as bl, rooms as rs WHERE ('" . $booking_data['check_in'] . "' NOT BETWEEN DATE(bl.check_in) AND DATE(bl.check_out)) OR ('" . $booking_data['check_out'] . "' NOT BETWEEN DATE(bl.check_in) AND DATE(bl.check_out)) AND rs.max_no_of_guest >= '". $booking_data['no_of_guest'] . "' AND rs.rm_id != bl.room_id";
        $query = "SELECT rs.rm_id,rs.rm_name,rs.rm_comments,rs.rm_cover_img,rs.rm_available,rs.max_no_of_guest,rs.rm_detail,rs.rm_addtional_details,rs.rm_amount,rs.rm_amount*" . $booking_data['no_of_weeks'] * $booking_data['no_of_guest'] . " as tot_rm_amount from rooms as rs where ((rs.max_no_of_guest <= '" . $booking_data['no_of_guest'] . "') OR (rs.max_no_of_guest > '" . $booking_data['no_of_guest'] . "' AND rs.max_no_of_guest = '2')) AND not exists (select bl.* from booking_linked as bl where bl.room_id = rs.rm_id and ((DATE(bl.check_in) >= '" . $booking_data['check_in'] . "' and DATE(bl.check_out) <= '" . $booking_data['check_out'] . "') or (DATE(bl.check_in) <= '" . $booking_data['check_in'] . "' and DATE(bl.check_out) >= '" . $booking_data['check_out'] . "') or (DATE(bl.check_in) >= '" . $booking_data['check_in'] . "' and DATE(bl.check_out) >= '" . $booking_data['check_out'] . "' and DATE(bl.check_in) <= '" . $booking_data['check_out'] . "') or (DATE(bl.check_in) <= '" . $booking_data['check_in'] . "' and DATE(bl.check_out) <= '" . $booking_data['check_out'] . "' and DATE(bl.check_out) >= '" . $booking_data['check_in'] . "')))";
        if (!empty($room_id)) {
            $query .= " AND as.rm_id=" . $room_id;
        }
        if (!empty($this->session->userdata('uniqueId'))) {
            $query .= " AND not exists (select tb.* from temp_booking_data as tb where tb.room_id = rs.rm_id and tb.unique_id = '" . $this->session->userdata('uniqueId') . "' and ((DATE(tb.check_in) >= '" . $booking_data['check_in'] . "' and DATE(tb.check_out) <= '" . $booking_data['check_out'] . "') or (DATE(tb.check_in) <= '" . $booking_data['check_in'] . "' and DATE(tb.check_out) >= '" . $booking_data['check_out'] . "') or (DATE(tb.check_in) >= '" . $booking_data['check_in'] . "' and DATE(tb.check_out) >= '" . $booking_data['check_out'] . "' and DATE(tb.check_in) <= '" . $booking_data['check_out'] . "') or (DATE(tb.check_in) <= '" . $booking_data['check_in'] . "' and DATE(tb.check_out) <= '" . $booking_data['check_out'] . "' and DATE(tb.check_out) >= '" . $booking_data['check_in'] . "')))";
        }
        $result_query = $this->db->query($query);
        return $result_query->result();
        //return $query;
    }

    //put your code here
}
