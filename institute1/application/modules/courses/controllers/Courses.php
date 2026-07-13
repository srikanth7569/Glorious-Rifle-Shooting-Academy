<?php


/**
 * @property Master_model master_model
 * @property Courses_model courses_model
 */
class Courses extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }

        $this->permission->module('courses')->redirect();
        $this->load->model(array('courses_model', 'master/master_model'));
    }

    function index()
    {
        $data['title']   = "Courses";
        $data['content'] = "courses/course_list";
        $data['courses'] = $this->courses_model->getAllCourses();
        echo Modules::run('template/layout', $data);
    }

    function addCourse()
    {

        if ($this->input->post()) {

            $id = getPost('id');
            if ($id) {
                //update
                if ($this->courses_model->updateCourse($id)) {
                    $this->session->set_flashdata('success', 'Course Updated Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            } else {
                //create

                if ($this->courses_model->addCourse()) {


                    $this->session->set_flashdata('success', 'Course Created Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            }
            redirect('courses', 'refresh');


        } else {
            $data['title']      = "Add Course";
            $data['content']    = "courses/add_course";
            $data['categories'] = $this->master_model->getCourseCategories();
            echo Modules::run('template/layout', $data);
        }


    }

    function editCourse($id)
    {
        $data['courseDetail'] = $this->courses_model->getCourseByID($id);

        $cc_chapter        = explode(',', $data['courseDetail']->cc_chapter);
        $cc_chapter_detail = explode(',', $data['courseDetail']->cc_chapter_detail);


        $data['cc_chapter']        = $cc_chapter;
        $data['cc_chapter_detail'] = $cc_chapter_detail;

        $data['title']      = "Edit Course";
        $data['content']    = "courses/add_course";
        $data['categories'] = $this->master_model->getCourseCategories();
        echo Modules::run('template/layout', $data);
    }

    function deleteCourse($id)
    {
        if ($this->courses_model->deleteCourse($id)) {
            echo true;
        } else {
            echo false;
        }
    }
}
