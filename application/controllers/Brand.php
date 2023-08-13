<?php
/*
This controller has multiple functions which helps us to add a brand on the e-commerce platform, manage a brand etc.
It also helps us to save a brand's details like brand_name, brand_description and the status of upload.
It reduces time and effort by seamless addition and deletion of new brands from the e-commerce system.
The brand can be published and unpublished accordingly based on admin's and orgaizations requriements.
*/
defined('BASEPATH') or exit('No direct script access allowed');

class Brand extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->get_user();
    }

    public function add_brand()
    {
        $data                = array();
        $data['maincontent'] = $this->load->view('admin/pages/add_brand', '', true);
        $this->load->view('admin/master', $data);
    }

    public function manage_brand()
    {
        $data                = array();
        $data['all_brand']   = $this->brand_model->getall_brand_info();
        $data['maincontent'] = $this->load->view('admin/pages/manage_brand', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function save_brand()
    {
        $data                       = array();
        $data['brand_name']         = $this->input->post('brand_name');
        $data['brand_description']  = $this->input->post('brand_description');
        $data['upload_status'] = $this->input->post('upload_status');

        $this->form_validation->set_rules('brand_name', 'Brand Name', 'trim|required');
        $this->form_validation->set_rules('brand_description', 'Brand Description', 'trim|required');
        $this->form_validation->set_rules('upload_status', 'Publication Status', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->brand_model->save_brand_info($data);
            if ($result) {
                $this->session->set_flashdata('message', 'Brand Inseted Sucessfully');
                redirect('manage/brand');
            } else {
                $this->session->set_flashdata('message', 'Brand Inserted Failed');
                redirect('manage/brand');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('add/brand');
        }

    }

    public function delete_brand($id)
    {
        $result = $this->brand_model->delete_brand_info($id);
        if ($result) {
            $this->session->set_flashdata('message', 'Brand Deleted Sucessfully');
            redirect('manage/brand');
        } else {
            $this->session->set_flashdata('message', 'Brand Deleted Failed');
            redirect('manage/brand');
        }
    }

    public function edit_brand($id)
    {
        $data                     = array();
        $data['brand_info_by_id'] = $this->brand_model->edit_brand_info($id);
        $data['maincontent']      = $this->load->view('admin/pages/edit_brand', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function update_brand($id)
    {
        $data                       = array();
        $data['brand_name']         = $this->input->post('brand_name');
        $data['brand_description']  = $this->input->post('brand_description');
        $data['upload_status'] = $this->input->post('upload_status');

        $this->form_validation->set_rules('brand_name', 'Brand Name', 'trim|required');
        $this->form_validation->set_rules('brand_description', 'Brand Description', 'trim|required');
        $this->form_validation->set_rules('upload_status', 'Publication Status', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->brand_model->update_brand_info($data, $id);
            if ($result) {
                $this->session->set_flashdata('message', 'Brand Update Sucessfully');
                redirect('manage/brand');
            } else {
                $this->session->set_flashdata('message', 'Brand Update Failed');
                redirect('manage/brand');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('add/brand');
        }

    }

    public function published_brand($id)
    {
        $result = $this->brand_model->published_brand_info($id);
        if ($result) {
            $this->session->set_flashdata('message', 'Published Brand Sucessfully');
            redirect('manage/brand');
        } else {
            $this->session->set_flashdata('message', 'Published Brand  Failed');
            redirect('manage/brand');
        }
    }

    public function unpublished_brand($id)
    {
        $result = $this->brand_model->unpublished_brand_info($id);
        if ($result) {
            $this->session->set_flashdata('message', 'UnPublished Brand Sucessfully');
            redirect('manage/brand');
        } else {
            $this->session->set_flashdata('message', 'UnPublished Brand  Failed');
            redirect('manage/brand');
        }
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

}
