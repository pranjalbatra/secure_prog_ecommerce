<?php
/*
This controller has multiple functions which helps us to add a category on the e-commerce platform, to manage a prodcut.
It also helps us to save a category's details like manage category, add catrgory, and other critical funcations mentioned below.
It reduces time and effort by seamless addition and deletion of new categories from the e-commerce system.
The categories can be published and unpublished accordingly based on admin's and e-commerce requriements.
*/
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->get_user();
    }

    public function add_category()
    {
        $data                = array();
        $data['maincontent'] = $this->load->view('admin/pages/add_category', '', true);
        $this->load->view('admin/master', $data);
    }

    public function manage_category()
    {
        $data                 = array();
        $data['all_categroy'] = $this->category_model->getall_category_info();
        $data['maincontent']  = $this->load->view('admin/pages/manage_category', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function save_category()
    {
        $data                         = array();
        $data['division_name']        = $this->input->post('division_name');
        $data['division_description'] = $this->input->post('division_description');
        $data['upload_status']   = $this->input->post('upload_status');

        $this->form_validation->set_rules('division_name', 'Category Name', 'trim|required');
        $this->form_validation->set_rules('division_description', 'Category Description', 'trim|required');
        $this->form_validation->set_rules('upload_status', 'Publication Status', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->category_model->save_category_info($data);
            if ($result) {
                $this->session->set_flashdata('message', 'Category Inseted Sucessfully');
                redirect('manage/category');
            } else {
                $this->session->set_flashdata('message', 'Category Inserted Failed');
                redirect('manage/category');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('add/category');
        }

    }

    public function delete_category($id)
    {
        $result = $this->category_model->delete_category_info($id);
        if ($result) {
            $this->session->set_flashdata('message', 'Category Deleted Sucessfully');
            redirect('manage/category');
        } else {
            $this->session->set_flashdata('message', 'Category Deleted Failed');
            redirect('manage/category');
        }
    }

    public function edit_category($id)
    {
        $data                        = array();
        $data['category_info_by_id'] = $this->category_model->edit_category_info($id);
        $data['maincontent']         = $this->load->view('admin/pages/edit_category', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function update_category($id)
    {
        $data                         = array();
        $data['division_name']        = $this->input->post('division_name');
        $data['division_description'] = $this->input->post('division_description');
        $data['upload_status']   = $this->input->post('upload_status');

        $this->form_validation->set_rules('division_name', 'Category Name', 'trim|required');
        $this->form_validation->set_rules('division_description', 'Category Description', 'trim|required');
        $this->form_validation->set_rules('upload_status', 'Publication Status', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->category_model->update_category_info($data, $id);
            if ($result) {
                $this->session->set_flashdata('message', 'Category Update Sucessfully');
                redirect('manage/category');
            } else {
                $this->session->set_flashdata('message', 'Category Update Failed');
                redirect('manage/category');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('add/category');
        }

    }

    public function published_category($id)
    {
        $result = $this->category_model->published_category_info($id);
        if ($result) {
            $this->session->set_flashdata('message', 'Published Category Sucessfully');
            redirect('manage/category');
        } else {
            $this->session->set_flashdata('message', 'Published Category  Failed');
            redirect('manage/category');
        }
    }

    public function unpublished_category($id)
    {
        $result = $this->category_model->unpublished_category_info($id);
        if ($result) {
            $this->session->set_flashdata('message', 'UnPublished Category Sucessfully');
            redirect('manage/category');
        } else {
            $this->session->set_flashdata('message', 'UnPublished Category  Failed');
            redirect('manage/category');
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
