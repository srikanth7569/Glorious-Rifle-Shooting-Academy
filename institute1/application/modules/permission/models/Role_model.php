<?php


class Role_model extends CI_Model
{

    function get_role_list()
    {
        return $this->db->select('*')
            ->from('sec_role_tbl')
            ->get()->result();
    }

    function get_modules()
    {
        return $this->db->select('module')
            ->from('sec_menu_item')
            ->group_by('module')
            ->get()
            ->result();
    }

    public function create_role($data = array())
    {
        $this->db->where('role_id', $data[0]['role_id'])->delete('sec_role_permission');
        return $this->db->insert_batch('sec_role_permission', $data);
    }

    function get_user_list()
    {
        return $this->db->select('sec_user_access_tbl.*,sec_role_tbl.*,user.firstname,user.lastname')
            ->from('sec_user_access_tbl')
            ->join('user', 'user.id=sec_user_access_tbl.fk_user_id')
            ->join('sec_role_tbl', 'sec_role_tbl.role_id=sec_user_access_tbl.fk_role_id')
            ->order_by('sec_user_access_tbl.fk_user_id')
            ->get()->result();
    }

    function get_user_dropdown()
    {
        return $this->db->select('id,firstname,lastname')
            ->from('user')
            ->where('is_admin!=', 1)
            ->where('type', null)
            ->get()
            ->result();
    }

    function get_role()
    {
        return $this->db->select('role_name,role_id')
            ->from('sec_role_tbl')
            ->get()
            ->result();
    }
}
