<?php


/**
 * @property Students_model students_model
 * @property Courses_model courses_model
 * @property Batches_model batches_model
 * @property Master_model master_model
 * @property Enquiry_model enquiry_model
 * @property Fee_model fee_model
 */
class Students extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }
        $this->permission->module('students')->redirect();
        $this->load->model(array('students_model',
                                 'courses/courses_model',
                                 'batches/batches_model',
                                 'master/master_model',
                                 'enquiries/enquiry_model',
                                 'fee/fee_model',
                                 'websetting/blogs_model'));
    }


    function index()
    {
        $data['title']    = "Students";
        $data['content']  = "students/student_list";
        $data['students'] = $this->students_model->getStudents();
        echo Modules::run('template/layout', $data);
    }


    function addStudent()
    {
        if ($this->input->post()) {

            $id = getPost('id');
            if ($id) {
                //update
                if ($this->students_model->updateStudent($id)) {
                    $this->session->set_flashdata('success', 'Student Updated Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            } else {
                //create

                if ($this->students_model->addStudent()) {
                    $this->session->set_flashdata('success', 'Student Created Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            }
            redirect('students/addStudent', 'refresh');


        } else {
            $data['title']   = "Add Student";
            $data['content'] = "students/add_student";
            $data['courses'] = $this->courses_model->getCourses();
//            $data['batches']     = $this->batches_model->getBatches();
            $data['departments'] = $this->master_model->getDepartments();
            $data['enquiries']   = $this->enquiry_model->getEnquiries();
            echo Modules::run('template/layout', $data);
        }
    }

    function editStudent($id)
    {
        $data['title']         = "Edit Student";
        $data['content']       = "students/add_student";
        $data['courses']       = $this->courses_model->getCourses();
        $data['batches']       = $this->batches_model->getBatches();
        $data['studentDetail'] = $this->students_model->getStudentByID($id);
        $data['departments']   = $this->master_model->getDepartments();
        echo Modules::run('template/layout', $data);
    }

    function deleteStudent($id)
    {
        if ($this->students_model->deleteStudent($id)) {
            echo true;
        } else {
            echo false;
        }
    }

    function getFeeByCourseID($id)
    {
        $data = $this->courses_model->getCourseByID($id);
        echo json_encode($data);
    }

    function getEnquiryByID()
    {
        $id   = getPost('enquiryID');
        $data = $this->enquiry_model->getEnquiryByID($id);
        echo json_encode($data);
    }


    function getBatchesByCourseID()
    {
        $courseID = getPost('courseID');

        $data = $this->batches_model->getBatchesByCourseID($courseID);
        echo json_encode($data);
    }

    function studentDetail($sid)
    {
        $data['title']   = 'Student Detail';
        $data['detail']  = $this->fee_model->getDetailByStudentID($sid);
        $data['content'] = 'students/studentDetail1';
        echo Modules::run('template/layout', $data);

    }

    function studentStatusChange()
    {
        $sid = getPost('sid');


        $this->db->select('status');
        $this->db->where('id', $sid);
        $status = $this->db->get('student')->row()->status;
        if ($status == 0) {
            $data = array(
                'status' => 1
            );
        } else {
            $data = array(
                'status' => 0
            );
        }
        $this->db->where('id', $sid);
        $this->db->update('student', $data);
        if ($this->db->affected_rows() > 0) {
            echo true;
        } else {
            echo false;
        }
    }
}
