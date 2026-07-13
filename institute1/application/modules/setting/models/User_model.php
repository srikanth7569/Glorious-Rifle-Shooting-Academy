<?php


class User_model extends CI_Model
{

    public function get_user_list()
    {
        return $this->db->select("
				user.*, 
				CONCAT_WS(firstname, lastname) AS fullname 
			")
            ->from('user')
            ->order_by('id', 'desc')
            ->where('type', null)
            ->get()
            ->result();
    }

    public function delete_user($id = null)
    {
        return $this->db->where('id', $id)
            ->where_not_in('is_admin', 1)
            ->delete("user");
    }

    public function create_user($data = array())
    {
        return $this->db->insert('user', $data);
    }

    function update_user($id, $data = array())
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    public function get_user_by_id($id = null)
    {
        return $this->db->select('*')
            ->from('user')
            ->where('id', $id)
            ->get()
            ->row();
    }
}
