<?php

class Web_Model extends CI_Model
{

    public function get_all_featured_product()
    {
        $this->db->select('*,sed_commodity.upload_status as pstatus');
        $this->db->from('sed_commodity');
        $this->db->join('sed_division', 'sed_division.id=sed_commodity.commodity_category');
        $this->db->join('sed_industry_brand', 'sed_industry_brand.brand_id=sed_commodity.commodity_industry_brand');
        $this->db->order_by('sed_commodity.commodity_id', 'DESC');
        $this->db->where('sed_commodity.upload_status', 1);
        $this->db->where('commodity_feature', 1);
        $this->db->limit(4);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_new_product()
    {
        $this->db->select('*,sed_commodity.upload_status as pstatus');
        $this->db->from('sed_commodity');
        $this->db->join('sed_division', 'sed_division.id=sed_commodity.commodity_category');
        $this->db->join('sed_industry_brand', 'sed_industry_brand.brand_id=sed_commodity.commodity_industry_brand');
        $this->db->order_by('sed_commodity.commodity_id', 'DESC');
        $this->db->where('sed_commodity.upload_status', 1);
        $this->db->limit(4);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_product()
    {
        $this->db->select('*');
        $this->db->from('sed_commodity');
        $this->db->join('sed_division', 'sed_division.id=sed_commodity.commodity_category');
        $this->db->join('sed_industry_brand', 'sed_industry_brand.brand_id=sed_commodity.commodity_industry_brand');
        $this->db->order_by('sed_commodity.commodity_id', 'DESC');
        $this->db->where('sed_commodity.upload_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_product_pagi($limit,$offset)
    {
        $this->db->select('*');
        $this->db->from('sed_commodity');
        $this->db->join('sed_division', 'sed_division.id=sed_commodity.commodity_category');
        $this->db->join('sed_industry_brand', 'sed_industry_brand.brand_id=sed_commodity.commodity_industry_brand');
        $this->db->order_by('sed_commodity.commodity_id', 'DESC');
        $this->db->where('sed_commodity.upload_status', 1);
        $this->db->limit($limit,$offset);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_single_product($id)
    {
        $this->db->select('*');
        $this->db->from('sed_commodity');
        $this->db->join('sed_division', 'sed_division.id=sed_commodity.commodity_category');
        $this->db->join('sed_industry_brand', 'sed_industry_brand.brand_id=sed_commodity.commodity_industry_brand');
        $this->db->where('sed_commodity.commodity_id', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function get_all_category()
    {
        $this->db->select('*');
        $this->db->from('sed_division');
        $this->db->where('upload_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_product_by_cat($id)
    {
        $this->db->select('*');
        $this->db->from('sed_commodity');
        $this->db->join('sed_division', 'sed_division.id=sed_commodity.commodity_category');
        $this->db->join('sed_industry_brand', 'sed_industry_brand.brand_id=sed_commodity.commodity_industry_brand');
        $this->db->order_by('sed_commodity.commodity_id', 'DESC');
        $this->db->where('sed_commodity.upload_status', 1);
        $this->db->where('sed_division.id', $id);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_product_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('sed_commodity');
        $this->db->join('sed_division', 'sed_division.id=sed_commodity.commodity_category');
        $this->db->join('sed_industry_brand', 'sed_industry_brand.brand_id=sed_commodity.commodity_industry_brand');
        $this->db->order_by('sed_commodity.commodity_id', 'DESC');
        $this->db->where('sed_commodity.upload_status', 1);
        $this->db->where('sed_commodity.commodity_id', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function save_customer_info($data)
    {
        $this->db->insert('sed_current_customers', $data);
        return $this->db->insert_id();
    }

    public function save_shipping_address($data)
    {
        $this->db->insert('sed_shippment', $data);
        return $this->db->insert_id();
    }

    public function get_customer_info($data)
    {
        $this->db->select('*');
        $this->db->from('sed_current_customers');
        $this->db->where($data);
        $info = $this->db->get();
        return $info->row();
    }

    public function save_payment_info($data)
    {
        $this->db->insert('sed_transaction_data', $data);
        return $this->db->insert_id();
    }

    public function save_order_info($data)
    {
        $this->db->insert('sed_manage_order', $data);
        return $this->db->insert_id();
    }

    public function save_order_details_info($oddata)
    {
        $this->db->insert('sed_manage_order_details', $oddata);
    }

    public function get_all_slider_post()
    {
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $this->db->where('upload_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_popular_posts()
    {
        $this->db->select('*');
        $this->db->from('sed_commodity');
        $this->db->where('upload_status', 1);
        $this->db->limit(4);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_search_product($search)
    {
        $this->db->select('*');
        $this->db->from('sed_commodity');
        $this->db->join('sed_division', 'sed_division.id=sed_commodity.commodity_category');
        $this->db->join('sed_industry_brand', 'sed_industry_brand.brand_id=sed_commodity.commodity_industry_brand');
        $this->db->join('sed_all_users', 'sed_all_users.user_id=sed_commodity.commodity_author');
        $this->db->order_by('sed_commodity.commodity_id', 'DESC');
        $this->db->where('sed_commodity.upload_status', 1);
        $this->db->like('sed_commodity.commodity_title', $search, 'both');
        $this->db->or_like('sed_commodity.commodity_summary', $search, 'both');
        $this->db->or_like('sed_commodity.commodity_description', $search, 'both');
        $this->db->or_like('sed_division.division_name', $search, 'both');
        $this->db->or_like('sed_industry_brand.brand_name', $search, 'both');
        $info = $this->db->get();
        return $info->result();
    }

}
