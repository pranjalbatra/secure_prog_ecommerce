<?php
/*
This control has been created as a log in form for the admin pages and it is resticted to users with admin authrization. It captures user email, name and id of admin.
*/
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->get_user();
    }
    public function index()
    {
        $data                = array();
        $data['maincontent'] = $this->load->view('admin/pages/home', '', true);
        $this->load->view('admin/master', $data);
    }

    public function get_user()
    {

        $email = $this->session->userdata('user_email');
        $name  = $this->session->userdata('user_name');
        $id    = $this->session->userdata('user_id');

        if ($email == false) {
            redirect('admin');
        }

    }

    public function logout()
    {

        $email = $this->session->unset_userdata('user_email');
        $name  = $this->session->unset_userdata('user_name');
        $id    = $this->session->unset_userdata('user_id');

        if ($email == false) {
            redirect('admin');
        }

    }

}
