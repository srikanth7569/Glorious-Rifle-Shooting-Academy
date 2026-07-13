<?php


class Enquiry_model extends CI_Model
{

    public $table = 'enquiry';

    function getEnquiries()
    {
        $this->db->select('enquiry.*');
        $this->db->select('courses.title as courseTitle');
        $this->db->select('department.title as deptName');
        $this->db->join('department', 'department.id=enquiry.department', 'left');
        $this->db->join('courses', 'courses.id=enquiry.courseID', 'left');
        $this->db->where('enquiry.status', 0);
        return $this->db->get($this->table)->result();
    }

    function addEnquiry()
    {


        $data = array(
            'name'          => getPost('name'),
            'father_name'   => getPost('father_name'),
            'gender'        => getPost('gender'),
            'email'         => getPost('email'),
            'cnic'          => getPost('cnic'),
            'mobile'        => getPost('mobile'),
            'courseID'      => getPost('courseID'),
            'preferredTime' => getPost('preferredTime'),
            'dob'           => getPost('dob'),
            'department'    => getPost('department'),
            'semester'      => getPost('semester'),
        );

        $this->db->where('email', getPost('email'));
        $this->db->or_where('cnic', getPost('cnic'));
        $enquiry = $this->db->get('enquiry');

        if ($enquiry->num_rows() > 0) {
            return false;
        } else {
            $this->db->insert('enquiry', $data);
            if ($this->db->insert_id()) {
                return true;
            }
        }
        return false;
    }

    function updateEnquiry($id)
    {


        $data = array(
            'name'          => getPost('name'),
            'father_name'   => getPost('father_name'),
            'gender'        => getPost('gender'),
            'email'         => getPost('email'),
            'cnic'          => getPost('cnic'),
            'mobile'        => getPost('mobile'),
            'courseID'      => getPost('courseID'),
            'preferredTime' => getPost('preferredTime'),
            'dob'           => getPost('dob'),
            'department'    => getPost('department'),
            'semester'      => getPost('semester'),
        );

        $this->db->where('id', $id);
        $this->db->update('enquiry', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getEnquiryByID($id)
    {
        $this->db->select('enquiry.*');
        $this->db->select('courses.title as courseTitle');
        $this->db->join('courses', 'courses.id=enquiry.courseID', 'left');
        $this->db->where('enquiry.id', $id);
        return $this->db->get('enquiry')->row();
    }

    function deleteEnquiry($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('enquiry');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

}
