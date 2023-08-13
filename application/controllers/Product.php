<?php
/*
This controller has multiple functions which helps us to manager a product on the e-commerce platform, manage a product etc.
It also helps us to save a product's details like name, description, title etc.
It reduces time and effort by seamless addition and deletion of new products from the e-commerce platform.
The products can be published and unpublished accordingly based on admin's and orgaizations requriements.
*/
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->get_user();
    }

    public function add_product()
    {
        $data                           = array();
        $data['all_published_category'] = $this->product_model->get_all_published_category();
        $data['all_published_brand']    = $this->product_model->get_all_published_brand();
        $data['maincontent']            = $this->load->view('admin/pages/add_product', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function manage_product()
    {
        $data                    = array();
        $data['get_all_product'] = $this->product_model->get_all_product();
        $data['maincontent']     = $this->load->view('admin/pages/manage_product', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function save_product()
    {
        $data                              = array();
        $data['commodity_title']             = $this->input->post('commodity_title');
        $data['commodity_summary'] = $this->input->post('commodity_summary');
        $data['commodity_description']  = $this->input->post('commodity_description');
        $data['commodity_price']             = $this->input->post('commodity_price');
        $data['commodity_quantity']          = $this->input->post('commodity_quantity');
        $data['commodity_category']          = $this->input->post('commodity_category');
        $data['commodity_industry_brand']             = $this->input->post('commodity_industry_brand');
        $data['commodity_feature']           = $this->input->post('commodity_feature');
        $data['upload_status']        = $this->input->post('upload_status');
        $data['commodity_author']            = $this->session->userdata('user_id');

        $this->form_validation->set_rules('commodity_title', 'Product Title', 'trim|required');
        $this->form_validation->set_rules('commodity_summary', 'Product Short Description', 'trim|required');
        $this->form_validation->set_rules('commodity_description', 'Product Long Status', 'trim|required');
        // $this->form_validation->set_rules('commodity_image', 'Product Image', 'trim|required');
        $this->form_validation->set_rules('commodity_price', 'Product Price', 'trim|required');
        $this->form_validation->set_rules('commodity_quantity', 'Product Quantity', 'trim|required');
        $this->form_validation->set_rules('commodity_category', 'Product Category', 'trim|required');
        $this->form_validation->set_rules('commodity_industry_brand', 'Product Brand', 'trim|required');
        $this->form_validation->set_rules('commodity_feature', 'Product Feature', 'trim');
        $this->form_validation->set_rules('upload_status', 'Publication Status', 'trim|required');

        if (!empty($_FILES['commodity_image']['name'])) {
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 4096;
            $config['max_width']     = 2000;
            $config['max_height']    = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('commodity_image')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('message', $error);
                redirect('add/product');
            } else {
                $post_image            = $this->upload->data();
                $data['commodity_image'] = $post_image['file_name'];
            }
        }
        if ($this->form_validation->run() == true) {

            $result = $this->product_model->save_product_info($data);

            if ($result) {
                $this->session->set_flashdata('message', 'Product Inserted Sucessfully');
                redirect('manage/product');
            } else {
                $this->session->set_flashdata('message', 'Product Inserted Failed');
                redirect('manage/product');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('add/product');
        }
    }

    public function published_product($id)
    {
        $result = $this->product_model->published_product_info($id);
        if ($result) {
            $this->session->set_flashdata('message', 'Published Product Sucessfully');
            redirect('manage/product');
        } else {
            $this->session->set_flashdata('message', 'Published Product  Failed');
            redirect('manage/product');
        }
    }
    public function unpublished_product($id)
    {
        $result = $this->product_model->unpublished_product_info($id);
        if ($result) {
            $this->session->set_flashdata('message', 'UnPublished Product Sucessfully');
            redirect('manage/product');
        } else {
            $this->session->set_flashdata('message', 'UnPublished Product  Failed');
            redirect('manage/product');
        }
    }

    public function edit_product($id)
    {
        $data                           = array();
        $data['all_published_category'] = $this->product_model->get_all_published_category();
        $data['all_published_brand']    = $this->product_model->get_all_published_brand();
        $data['product_info_by_id']     = $this->product_model->edit_product_info($id);
        $data['maincontent']            = $this->load->view('admin/pages/edit_product', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function update_product($id)
    {
        $data                              = array();
        $data['commodity_title']             = $this->input->post('commodity_title');
        $data['commodity_summary'] = $this->input->post('commodity_summary');
        $data['commodity_description']  = $this->input->post('commodity_description');
        $data['commodity_price']             = $this->input->post('commodity_price');
        $data['commodity_quantity']          = $this->input->post('commodity_quantity');
        $data['commodity_category']          = $this->input->post('commodity_category');
        $data['commodity_industry_brand']             = $this->input->post('commodity_industry_brand');
        $data['commodity_feature']           = $this->input->post('commodity_feature');
        $data['upload_status']        = $this->input->post('upload_status');
        $data['commodity_author']            = $this->session->userdata('user_id');

        $product_delete_image = $this->input->post('product_delete_image');

        $delete_image = substr($product_delete_image, strlen(base_url()));

        $this->form_validation->set_rules('commodity_title', 'Product Title', 'trim|required');
        $this->form_validation->set_rules('commodity_summary', 'Product Short Description', 'trim|required');
        $this->form_validation->set_rules('commodity_description', 'Product Long Status', 'trim|required');
        // $this->form_validation->set_rules('commodity_image', 'Product Image', 'trim|required');
        $this->form_validation->set_rules('commodity_price', 'Product Price', 'trim|required');
        $this->form_validation->set_rules('commodity_quantity', 'Product Quantity', 'trim|required');
        $this->form_validation->set_rules('commodity_category', 'Product Category', 'trim|required');
        $this->form_validation->set_rules('commodity_industry_brand', 'Product Brand', 'trim|required');
        $this->form_validation->set_rules('commodity_feature', 'Product Feature', 'trim');
        $this->form_validation->set_rules('upload_status', 'Publication Status', 'trim|required');

        if (!empty($_FILES['commodity_image']['name'])) {
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 4096;
            $config['max_width']     = 2000;
            $config['max_height']    = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('commodity_image')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('message', $error);
                redirect('add/product');
            } else {
                $post_image            = $this->upload->data();
                $data['commodity_image'] = $post_image['file_name'];
                unlink($delete_image);
            }
        }
        if ($this->form_validation->run() == true) {

            $result = $this->product_model->update_product_info($data, $id);

            if ($result) {
                $this->session->set_flashdata('message', 'Product Updated Sucessfully');
                redirect('manage/product');
            } else {
                $this->session->set_flashdata('message', 'Product Updated Failed');
                redirect('manage/product');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('add/product');
        }
    }

    public function delete_product($id)
    {
        $delete_image = $this->get_image_by_id($id);
        unlink('uploads/' . $delete_image->commodity_image);
        $result = $this->product_model->delete_product_info($id);
        if ($result) {
            $this->session->set_flashdata('message', 'Product Deleted Sucessfully');
            redirect('manage/product');
        } else {
            $this->session->set_flashdata('message', 'Product Deleted Failed');
            redirect('manage/product');
        }
    }

    private function get_image_by_id($id)
    {
        $this->db->select('commodity_image');
        $this->db->from('sed_commodity');
        $this->db->where('sed_commodity.commodity_id', $id);
        $info = $this->db->get();
        return $info->row();
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
