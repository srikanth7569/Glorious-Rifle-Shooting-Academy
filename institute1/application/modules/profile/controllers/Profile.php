<?php


/**
 * @property Faculties_model faculties_model
 * @property Fee_model fee_model
 */
class Profile extends MX_Controller
{


    public $type;
    public $uid;
    public $u_email;
    public $u_detail;

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('profile_model',
                                 'fee/fee_model',
                                 'faculties/faculties_model',
                                 'websetting/blogs_model'

        ));

        $this->type = $this->session->userdata('type');

        $this->u_email = $this->session->userdata('email');

        if ($this->type == 1) {
            //teacher
            $this->db->where('email', $this->u_email);
            $this->u_detail = $this->db->get('faculty')->row();
        }
        if ($this->type == 2) {
            //student
            $this->db->where('cnic', $this->u_email);
            $this->u_detail = $this->db->get('student')->row();
        }

        if ($this->u_detail)
            $this->uid = $this->u_detail->id;

    }

    function index()
    {

        $data['title']   = 'Profile';
        $data['profile'] = $this->type;


        if ($this->type == 1) {

            $data['detail']  = $this->faculties_model->getFacultyByID($this->uid);
            $data['content'] = 'faculties/faculty_detail';
        } elseif ($this->type == 2) {
            $data['detail']  = $this->fee_model->getDetailByStudentID($this->uid);
            $data['content'] = 'students/studentDetail1';
        }


        echo Modules::run('template/layout', $data);


    }
}
