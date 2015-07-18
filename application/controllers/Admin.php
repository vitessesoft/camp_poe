<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        if ($this->session->userdata('loginData')) {
            $this->load->view('admin_index');
        } else {
            $this->load->view('admin_login');
        }
    }

    public function login() {
        if ($this->session->userdata('loginData')) {
            $this->load->view('admin_index');
        } else {
            $this->load->view('admin_login');
        }
    }

    public function check_login() {
        if ($this->session->userdata('loginData')) {
            $this->load->view('admin_index');
        } else {
            $email = $this->input->post("email");
            $password = $this->input->post("password");
            if ((isset($email)) && (isset($password))) {
                $result = $this->loginmodel->check($email, $password);
                if ($result) {
                    $this->load->view('admin_index');
                } else {
                    $msg["wrong_login"] = "Invalid Login!";
                    $this->load->view('admin_login', $msg);
                }
            } else {
                $this->load->view('admin_login');
            }
        }
    }

    public function manage_images() {
        $this->load->model('imagemodel');
        $data['result'] = $this->imagemodel->getHomeImages();
        $this->load->view('admin_upload_img', $data);
    }
    
    public function room_images() {
        $this->load->model('imagemodel');
        $room['images'] = $this->imagemodel->getAllRoomImages();
        $room['details'] = $this->imagemodel->getAllRoomDetails();
        //$data['result'] = $this->imagemodel->getHomeImages();
        $this->load->view('admin_room_img', $room);
    }

    public function logoutuser() {
        $this->session->sess_destroy();
        $this->load->view('admin_login');
    }

    function upload() {

            $config['upload_path']='resoures/img/';
            $config['allowed_types']='gif|jpg|png';
            $this->load->library('upload',$config);

            if (!$this->upload->do_upload()) {
                $error=array('error'=>$this->upload->display_errors());
                $this->load->view('admin_upload_img',$error);
                
            }

            else{
                $file_data=$this->upload->data();
                $data['img']=base_url().'resoures/img/'.$file_data['file_name'];
                echo $file_data['file_name'];
                $this->load->model('file');
                $this->file->insert($data['img']);
            }

    }

}
