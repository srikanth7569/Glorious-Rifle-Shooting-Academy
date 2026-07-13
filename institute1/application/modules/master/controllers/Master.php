<?php


/**
 * @property Master_model master_model
 */
class Master extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }
        $this->permission->module('master')->redirect();
        $this->load->model('master_model');
    }


    function courseCategory()
    {
        $data['title']             = "Course Categories";
        $data['content']           = "master/course_category/category_list";
        $data['course_categories'] = $this->master_model->getCourseCategories();
        echo Modules::run('template/layout', $data);
    }

    function addCourseCategory()
    {
        $id = getPost('id');
        if ($id) {
            //update
            if ($this->master_model->updateCourseCategory($id)) {
                $this->session->set_flashdata('success', 'Course Category Updated');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }
        } else {
            if ($this->master_model->insertCourseCategory()) {
                $this->session->set_flashdata('success', 'Course Category Added');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }
        }
        redirect('master/courseCategory');
    }

    function getCourseCategoryByID($id)
    {
        $data = $this->master_model->getCourseCategoryByID($id);
        echo json_encode($data);
    }

    function deleteCourseCategory($id)
    {
        if ($this->master_model->deleteCourseCategory($id)) {
            echo true;
        } else {
            echo false;
        }
    }

    //expense category

    function expenseCategory()
    {
        $data['title']              = "Expense Categories";
        $data['content']            = "master/expense_category/category_list";
        $data['expense_categories'] = $this->master_model->getExpenseCategories();
        echo Modules::run('template/layout', $data);
    }

    function addExpenseCategory()
    {
        $id = getPost('id');
        if ($id) {
            //update
            if ($this->master_model->updateExpenseCategory($id)) {
                $this->session->set_flashdata('success', 'Expense Category Updated');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }
        } else {
            if ($this->master_model->insertExpenseCategory()) {
                $this->session->set_flashdata('success', 'Expense Category Added');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }
        }
        redirect('master/expenseCategory');
    }

    function getExpenseCategoryByID($id)
    {
        $data = $this->master_model->getExpenseCategoryByID($id);
        echo json_encode($data);
    }

    function deleteExpenseCategory($id)
    {
        if ($this->master_model->deleteExpenseCategory($id)) {
            echo true;
        } else {
            echo false;
        }
    }


    //enquiry status

    function enquiryStatus()
    {
        $data['title']   = "Enquiry Status";
        $data['content'] = "master/enquiry_status/category_list";
        $data['status']  = $this->master_model->getEnquiryStatus();
        echo Modules::run('template/layout', $data);
    }

    function addEnquiryStatus()
    {
        $id = getPost('id');
        if ($id) {
            //update
            if ($this->master_model->updateEnquiryStatus($id)) {
                $this->session->set_flashdata('success', 'Enquiry Status Updated');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }
        } else {
            if ($this->master_model->insertEnquiryStatus()) {
                $this->session->set_flashdata('success', 'Enquiry Status Added');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }
        }
        redirect('master/enquiryStatus');
    }

    function getEnquiryStatusByID($id)
    {
        $data = $this->master_model->getEnquiryStatusByID($id);
        echo json_encode($data);
    }

    function deleteEnquiryStatus($id)
    {
        if ($this->master_model->deleteEnquiryStatus($id)) {
            echo true;
        } else {
            echo false;
        }
    }


    //designations


    function designations()
    {
        $data['title']        = "Designation";
        $data['content']      = "master/designation/designation_list";
        $data['designations'] = $this->master_model->getDesignations();
        echo Modules::run('template/layout', $data);
    }

    function addDesignation()
    {
        $id = getPost('id');
        if ($id) {
            //update
            if ($this->master_model->updateDesignation($id)) {
                $this->session->set_flashdata('success', 'Designation Updated');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }
        } else {
            if ($this->master_model->insertDesignation()) {
                $this->session->set_flashdata('success', 'Designation Added');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }
        }
        redirect('master/designations');
    }

    function getDesignationByID($id)
    {
        $data = $this->master_model->getDesignationByID($id);
        echo json_encode($data);
    }

    function deleteDesignation($id)
    {
        if ($this->master_model->deleteDesignation($id)) {
            echo true;
        } else {
            echo false;
        }
    }

    //departments

    function departments()
    {
        $data['title']       = "Departments";
        $data['content']     = "master/department/department_list";
        $data['departments'] = $this->master_model->getDepartments();
        echo Modules::run('template/layout', $data);
    }

    function addDepartment()
    {
        $id = getPost('id');
        if ($id) {
            //update
            if ($this->master_model->updateDepartment($id)) {
                $this->session->set_flashdata('success', 'Department Updated');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }
        } else {
            if ($this->master_model->insertDepartment()) {
                $this->session->set_flashdata('success', 'Department Added');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }
        }
        redirect('master/departments');
    }

    function getDepartmentByID($id)
    {
        $data = $this->master_model->getDepartmentByID($id);
        echo json_encode($data);
    }

    function deleteDepartment($id)
    {
        if ($this->master_model->deleteDepartment($id)) {
            echo true;
        } else {
            echo false;
        }
    }


}
