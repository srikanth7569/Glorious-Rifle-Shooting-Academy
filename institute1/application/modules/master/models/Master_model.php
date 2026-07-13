<?php


class Master_model extends CI_Model
{

    function getCourseCategories()
    {
        return $this->db->get('course_category')->result();
    }

    function getExpenseCategories()
    {
        return $this->db->get('expense_category')->result();
    }

    function getEnquiryStatus()
    {
        return $this->db->get('enquiry_status')->result();
    }

    function getDesignations()
    {
        return $this->db->get('designation')->result();
    }

    function getDepartments()
    {
        return $this->db->get('department')->result();
    }

    function insertCourseCategory()
    {
        $data = array(
            'name' => getPost('title')
        );

        $this->db->insert('course_category', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;
    }

    function insertExpenseCategory()
    {
        $data = array(
            'name' => getPost('title')
        );

        $this->db->insert('expense_category', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;
    }

    function insertEnquiryStatus()
    {
        $data = array(
            'title' => getPost('title')
        );

        $this->db->insert('enquiry_status', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;
    }

    function insertDesignation()
    {
        $data = array(
            'title'       => getPost('title'),
            'description' => getPost('description'),
        );

        $this->db->insert('designation', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;
    }

    function insertDepartment()
    {
        $data = array(
            'title' => getPost('title'),
        );

        $this->db->insert('department', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;
    }

    function updateDepartment($id)
    {
        $data = array(
            'title' => getPost('title'),
        );
        $this->db->where('id', $id);
        $this->db->update('department', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function updateCourseCategory($id)
    {
        $data = array(
            'name' => getPost('title')
        );
        $this->db->where('id', $id);
        $this->db->update('course_category', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function updateExpenseCategory($id)
    {
        $data = array(
            'name' => getPost('title')
        );
        $this->db->where('id', $id);
        $this->db->update('expense_category', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function updateEnquiryStatus($id)
    {
        $data = array(
            'title' => getPost('title')
        );
        $this->db->where('id', $id);
        $this->db->update('enquiry_status', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function updateDesignation($id)
    {
        $data = array(
            'title'       => getPost('title'),
            'description' => getPost('description'),
        );
        $this->db->where('id', $id);
        $this->db->update('designation', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getCourseCategoryByID($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('course_category')->row();
    }

    function getExpenseCategoryByID($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('expense_category')->row();
    }

    function getEnquiryStatusByID($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('enquiry_status')->row();
    }

    function getDesignationByID($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('designation')->row();
    }

    function getDepartmentByID($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('department')->row();
    }

    function deleteCourseCategory($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('course_category');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function deleteExpenseCategory($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('expense_category');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function deleteEnquiryStatus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('enquiry_status');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function deleteDesignation($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('designation');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function deleteDepartment($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('department');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
}
