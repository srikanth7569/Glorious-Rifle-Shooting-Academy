<?php


class Email_model extends CI_Model
{

    function getAllMessages($msg_type = null)
    {
        $this->db->where('status', $msg_type);
        return $this->db->get('messages')->result();
    }

    function getMessageByID($msg_id)
    {
        $this->db->where('id', $msg_id);
        return $this->db->get('messages')->row();
    }

    function countMessages($msg_type = null)
    {
        $this->db->where('status', $msg_type);
        return $this->db->count_all_results('messages');
    }

    function getEmailTemplates($limit = null, $type = null)
    {
        $this->db->limit($limit);

        if ($type) {
            $this->db->where('type', $type);
            $this->db->where('status', 1);
        }
        $data = $this->db->get('email_setting');
        if ($limit) {
            return $data->row();
        }
        return $data->result();
    }

    function addEmailTemplate()
    {

        $data = array(
            'type'    => getPost('type'),
            'subject' => getPost('subject'),
            'message' => getPost('message')
        );
        $this->db->insert('email_setting', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;

    }

    function updateEmailTemplate($id)
    {
        $data = array(
            'type'    => getPost('type'),
            'subject' => getPost('subject'),
            'message' => getPost('message')
        );
        $this->db->where('id', $id);
        $this->db->update('email_setting', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getTemplateByID($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('email_setting')->row();
    }

    function deleteEmailTemplate($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('email_setting');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getSubscribers()
    {
        return $this->db->get('subscriber')->result();
    }

    function countSubscribers()
    {
        return $this->db->count_all('subscriber');
    }


}
