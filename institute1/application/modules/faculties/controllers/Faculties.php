<?php


/**
 * @property Master_model master_model
 * @property Faculties_model faculties_model
 * @property Courses_model courses_model
 */
class Faculties extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }

        $type = $this->session->userdata('type');

        if ($type == null)
            $this->permission->module('faculties')->redirect();

        $this->load->model(array('faculties_model', 'courses/courses_model', 'master/master_model'));
    }

    function index()
    {
        $data['title']     = "Faculties";
        $data['content']   = "faculties/faculty_list";
        $data['faculties'] = $this->faculties_model->getFaculties();
        echo Modules::run('template/layout', $data);
    }

    function addFaculty()
    {

        if ($this->input->post()) {

            $id = getPost('id');
            if ($id) {
                //update
                if ($this->faculties_model->updateFaculty($id)) {
                    $this->session->set_flashdata('success', 'Faculty Updated Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

                redirect('faculties');

            } else {
                //create

                if ($this->faculties_model->addFaculty()) {
                    $this->session->set_flashdata('success', 'Faculty Created Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            }
            redirect('faculties/addFaculty', 'refresh');


        } else {
            $data['title']       = "Add Faculty";
            $data['designation'] = $this->master_model->getDesignations();
            $data['courses']     = $this->courses_model->getCourses();
            $data['content']     = "faculties/add_faculty";
            echo Modules::run('template/layout', $data);
        }


    }

    function editFaculty($id)
    {
        $data['facultyDetail'] = $this->faculties_model->getFacultyByID($id);

        $selected_course = explode(',', $data['facultyDetail']->course);

        $data['selected_course'] = $selected_course;
        $data['designation']     = $this->master_model->getDesignations();
        $data['courses']         = $this->courses_model->getCourses();
        $data['title']           = "Edit Faculty";
        $data['content']         = "faculties/add_faculty";
        echo Modules::run('template/layout', $data);
    }

    function deleteFaculty($id)
    {
        if ($this->faculties_model->deleteFaculty($id)) {
            echo true;
        } else {
            echo false;
        }
    }

    function facultyDetail($id)
    {
        $data['title']   = 'Faculty Detail';
        $data['detail']  = $this->faculties_model->getFacultyByID($id);
        $data['content'] = 'faculties/faculty_detail';

        echo Modules::run('template/layout', $data);
    }

    //save user rating

    function userRating()
    {

        $u_id      = $this->session->userdata('id');
        $f_id      = getPost('f_id');
        $course_id = getPost('course_id');
        $rating    = getPost('rating');
        $review    = getPost('review');


        $this->db->where('user_id', $u_id);
        $this->db->where('course_id', $course_id);
        $this->db->where('teacher_id', $f_id);
        $q = $this->db->get('teacher_rating');

        if ($q->num_rows() > 0) {
            //update record

            $userRating = array(
                'rating' => $rating,
                "review" => $review,
            );
            $this->db->where('user_id', $u_id);
            $this->db->where('course_id', $course_id);
            $this->db->where('teacher_id', $f_id);
            $this->db->update('teacher_rating', $userRating);

            if ($this->db->affected_rows() > 0) {
                echo true;
            } else {
                echo false;
            }

        } else {
            //create record

            $userRating = array(
                'teacher_id' => $f_id,
                "course_id"  => $course_id,
                "user_id"    => $u_id,
                "rating"     => $rating,
                "review"     => $review,
            );
            $this->db->insert('teacher_rating', $userRating);
            if ($this->db->insert_id()) {
                echo true;
            } else {
                echo false;
            }

        }


    }

    function getUserRating()
    {

        $u_id      = $this->session->userdata('id');
        $f_id      = getPost('faculty_id');
        $course_id = getPost('course_id');

        $this->db->where('user_id', $u_id);
        $this->db->where('course_id', $course_id);
        $this->db->where('teacher_id', $f_id);
        $q = $this->db->get('teacher_rating');
        if ($q->num_rows() > 0) {
            echo json_encode($q->row());
        } else {
            echo false;
        }

    }
}
