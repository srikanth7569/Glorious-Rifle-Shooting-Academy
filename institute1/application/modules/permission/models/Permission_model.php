<?php


class Permission_model extends CI_Model
{


    function get_menu_list()
    {
        $this->db->select('sec_menu_item.*');
        $this->db->order_by('sec_menu_item.module', 'asc');
        return $this->db->get('sec_menu_item')->result();
    }

    function get_parent_menu()
    {
        return $this->db->select('menu_id,menu_title')
            ->get('sec_menu_item')
            ->result();
    }

    function get_menu_item_by_id($id)
    {
        return $this->db->select('*')
            ->where('menu_id', $id)
            ->get('sec_menu_item')
            ->row();
    }


}
