<?php


class Faqs_model extends CI_Model
{

    function addFaq()
    {
        $data = array(
            'question' => getPost('question'),
            'answer'   => getPost('answer'),
        );
        $this->db->insert('faqs', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;
    }

    function updateFaq($id)
    {
        $data = array(
            'question' => getPost('question'),
            'answer'   => getPost('answer'),
        );
        $this->db->where('id', $id);
        $this->db->update('faqs', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getFaqs()
    {
        return $this->db->get('faqs')->result();
    }

    function getFaqByID($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('faqs')->row();
    }

    function deleteFaq($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('faqs');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
}
