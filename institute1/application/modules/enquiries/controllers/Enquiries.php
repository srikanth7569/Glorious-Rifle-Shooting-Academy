<?php


/**
 * @property Enquiry_model enquiry_model
 * @property Courses_model courses_model
 * @property Master_model master_model
 */
class Enquiries extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }
        $this->permission->module('enquiries')->redirect();
        $this->load->model(array('enquiry_model', 'master/master_model', 'courses/courses_model'));
    }


    function index()
    {

        $data['title']     = "Enquiries";
        $data['enquiries'] = $this->enquiry_model->getEnquiries();
        $data['content']   = "enquiries/enquiry_list";
        echo Modules::run('template/layout', $data);
    }

    function addEnquiry()
    {

        if ($this->input->post()) {

            $id = getPost('id');
            if ($id) {
                //update
                if ($this->enquiry_model->updateEnquiry($id)) {
                    $this->session->set_flashdata('success', 'Enquiry Updated Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            } else {
                //create

                if ($this->enquiry_model->addEnquiry()) {
                    $this->session->set_flashdata('success', 'Enquiry Created Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            }
            redirect($_SERVER['HTTP_REFERER']);
//            redirect('enquiries/addEnquiry', 'refresh');


        } else {
            $data['title']       = "Add Enquiry";
            $data['content']     = "enquiries/add_enquiry";
            $data['courses']     = $this->courses_model->getCourses();
            $data['departments'] = $this->master_model->getDepartments();
            echo Modules::run('template/layout', $data);
        }
    }

    function editEnquiry($id)
    {
        $data['enquiryDetail'] = $this->enquiry_model->getEnquiryByID($id);
        $data['courses']       = $this->courses_model->getCourses();
        $data['departments']   = $this->master_model->getDepartments();
        $data['title']         = "Edit Enquiry";
        $data['content']       = "enquiries/add_enquiry";
        echo Modules::run('template/layout', $data);
    }

    function deleteEnquiry($id)
    {
        if ($this->enquiry_model->deleteEnquiry($id)) {
            echo true;
        } else {
            echo false;
        }
    }

}
