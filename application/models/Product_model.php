<?php

class Product_Model extends CI_Model
{

    public function save_product_info($data)
    {
        return $this->db->insert('sed_commodity', $data);
    }

    public function get_all_product()
    {
        $this->db->select('*,sed_commodity.upload_status as pstatus');
        $this->db->from('sed_commodity');
        $this->db->join('sed_division', 'sed_division.id=sed_commodity.commodity_category');
        $this->db->join('sed_industry_brand', 'sed_industry_brand.brand_id=sed_commodity.commodity_industry_brand');
        $this->db->order_by('sed_commodity.commodity_id', 'DESC');
        $info = $this->db->get();
        return $info->result();
    }

    public function edit_product_info($id)
    {
        $this->db->select('*,sed_commodity.upload_status as pstatus');
        $this->db->from('sed_commodity');
        $this->db->join('sed_division', 'sed_division.id=sed_commodity.commodity_category');
        $this->db->join('sed_industry_brand', 'sed_industry_brand.brand_id=sed_commodity.commodity_industry_brand');
        $this->db->where('sed_commodity.commodity_id', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function delete_product_info($id)
    {
        $this->db->where('commodity_id', $id);
        return $this->db->delete('sed_commodity');
    }

    public function update_product_info($data, $id)
    {
        $this->db->where('commodity_id', $id);
        return $this->db->update('sed_commodity', $data);
    }

    public function published_product_info($id)
    {
        $this->db->set('upload_status', 1);
        $this->db->where('commodity_id', $id);
        return $this->db->update('sed_commodity');
    }

    public function unpublished_product_info($id)
    {
        $this->db->set('upload_status', 0);
        $this->db->where('commodity_id', $id);
        return $this->db->update('sed_commodity');
    }

    public function get_all_published_category()
    {
        $this->db->select('*');
        $this->db->from('sed_division');
        $this->db->where('upload_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_published_brand()
    {
        $this->db->select('*');
        $this->db->from('sed_industry_brand');
        $this->db->where('upload_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

}
