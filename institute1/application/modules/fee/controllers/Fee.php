<?php


/**
 * @property Fee_model fee_model
 * @property Courses_model courses_model
 * @property Batches_model batches_model
 * @property Students_model students_model
 * @property Setting_model setting_model
 */
class Fee extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }
        $this->permission->module('fee')->redirect();
        $this->load->model(array('fee_model', 'courses/courses_model',
                                 'batches/batches_model',
                                 'students/students_model',
                                 'setting/setting_model',
                                 'websetting/blogs_model'));

    }

    function index()
    {
        $data['title']   = "Collect Fee";
        $data['content'] = "fee/collect_fee_form";
        $data['courses'] = $this->courses_model->getCourses();
        echo Modules::run('template/layout', $data);
    }

    function getBatches($courseID)
    {
        $data = $this->batches_model->getBatchesByCourseID($courseID);
        echo json_encode($data);
    }

    function getStudentsByBatchID($batchID)
    {
        $data['students'] = $this->fee_model->getStudentsDetailByBatchID($batchID);
        $this->load->view('student_list', $data);
    }

    function getStudentsByName($sname)
    {
        $data['students'] = $this->fee_model->getStudentsByName($sname);
        $this->load->view('student_list', $data);
    }

    function collectFee($sid = null)
    {
        if ($this->input->post()) {
            if ($this->fee_model->collectFee()) {
                $this->session->set_flashdata('success', 'Fee Collected Successfully');
                $this->session->set_flashdata('printInvoice', getPost('id'));
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }
            redirect('fee', 'refresh');
        } else {

            $data['title']   = "Collect Fee";
            $data['content'] = "fee/add_fee";

            $receiptNoPrefix   = $this->fee_model->getReceiptNo();
            $data['receiptNo'] = $receiptNoPrefix;
            $data['feeDetail'] = $this->fee_model->getFeeDetailByStudentID($sid);

            echo Modules::run('template/layout', $data);
        }

    }

    function printInvoice($sid)
    {
        $data['setting'] = $this->setting_model->get_app_setting();
        $data['detail']  = $this->fee_model->getDetailByStudentID($sid);
        $this->load->view('invoice', $data);
    }

    function delFee()
    {
        $fid = getPost('fid');

        $this->db->where('id', $fid);
        $this->db->delete('fee');

        if ($this->db->affected_rows() > 0) {
            echo true;
        } else {
            echo false;
        }

    }

}
