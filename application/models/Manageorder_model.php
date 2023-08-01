<?php

class Manageorder_Model extends CI_Model
{

    public function manage_order_info()
    {
        $this->db->select('*');
        $this->db->from('sed_manage_order');
        $this->db->join('sed_current_customers', 'sed_current_customers.customer_id = sed_manage_order.customer_id');
        $this->db->join('sed_shippment', 'sed_shippment.shipping_id = sed_manage_order.shipping_id');
        $result = $this->db->get();
        return $result->result();
    }

    public function order_info_by_id($order_id)
    {
        $this->db->select('*');
        $this->db->from('sed_manage_order');
        $this->db->where('order_id', $order_id);
        $result = $this->db->get();
        return $result->row();
    }

    public function customer_info_by_id($custoemr_id)
    {
        $this->db->select('*');
        $this->db->from('sed_current_customers');
        $this->db->where('customer_id', $custoemr_id);
        $result = $this->db->get();
        return $result->row();
    }

    public function shipping_info_by_id($shipping_id)
    {
        $this->db->select('*');
        $this->db->from('sed_shippment');
        $this->db->where('shipping_id', $shipping_id);
        $result = $this->db->get();
        return $result->row();
    }

    public function payment_info_by_id($payment_id)
    {
        $this->db->select('*');
        $this->db->from('sed_transaction_data');
        $this->db->where('payment_id', $payment_id);
        $result = $this->db->get();
        return $result->row();
    }

    public function orderdetails_info_by_id($order_id)
    {
        $this->db->select('*');
        $this->db->from('sed_manage_order_details');
        $this->db->where('order_id', $order_id);
        $result = $this->db->get();
        return $result->result();
    }

}
