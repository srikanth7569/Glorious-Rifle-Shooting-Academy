<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs_model extends CI_Model
{

    private $table = 'accesslog';

    public function log_recorded($data = array())
    {
        $this->db->insert('accesslog', $data);
    }

    function get_logs($from_date = null, $to_date = null)
    {

        if (!$from_date and !$to_date) {
            $from_date = date('Y-m-d');
            $to_date   = date('Y-m-d');
        }

        $this->db->like('entry_date', "$from_date", 'after');
        $this->db->or_like('entry_date', "$to_date", 'after');

//        $this->db->where("entry_date between '$from_date%'  and '$to_date%' ");
        $this->db->order_by('sl_no', 'ASC');
        $q = $this->db->get('accesslog');
        if ($q->num_rows() > 0) {
            return $q->result();
        } else {
            return false;
        }


    }
}