<?php

class Brand_Model extends CI_Model
{

    public function save_brand_info($data)
    {
        return $this->db->insert('sed_industry_brand', $data);
    }

    public function getall_brand_info()
    {
        $this->db->select('*');
        $this->db->from('sed_industry_brand');
        $info = $this->db->get();
        return $info->result();
    }

    public function edit_brand_info($id)
    {
        $this->db->select('*');
        $this->db->from('sed_industry_brand');
        $this->db->where('brand_id', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function delete_brand_info($id)
    {
        $this->db->where('brand_id', $id);
        return $this->db->delete('sed_industry_brand');
    }

    public function update_brand_info($data, $id)
    {
        $this->db->where('brand_id', $id);
        return $this->db->update('sed_industry_brand', $data);
    }

    public function published_brand_info($id)
    {
        $this->db->set('upload_status', 1);
        $this->db->where('brand_id', $id);
        return $this->db->update('sed_industry_brand');
    }

    public function unpublished_brand_info($id)
    {
        $this->db->set('upload_status', 0);
        $this->db->where('brand_id', $id);
        return $this->db->update('sed_industry_brand');
    }

}
