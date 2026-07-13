<?php


/**
 * @property Master_model master_model
 * @property Payroll_model payroll_model
 * @property Setting_model setting_model
 */
class Payroll extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('payroll_model',
                                 'master/master_model',
                                 'faculties/faculties_model',
                                 'students/students_model',
                                 'setting/setting_model'));
    }

    function index()
    {
        $data['title']   = 'Payroll';
        $data['content'] = 'hrm/payroll_form';
        $data['roles']   = $this->master_model->getDesignations();
        echo Modules::run('template/layout', $data);
    }

    function getEmployeesRecord()
    {
        $data['employees'] = $this->payroll_model->getEmployeesRecord();
        $this->load->view('emp_tbl', $data);
    }

    function generatePayroll($empid = null, $month = null, $year = null)
    {

        if ($this->input->post()) {


            if ($this->payroll_model->confirmPay($empid, $month, $year)) {
                $this->session->set_flashdata('success', 'Data Saved Successfully');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }

            redirect('hrm/payroll', 'refresh');
        } else {
            $data['employeeDetails'] = $this->payroll_model->getEmployeeDetail($empid, $month, $year);
            $data['title']           = 'Generate Payroll';
            $data['content']         = 'hrm/emp_detail';
            $data['month']           = $month;
            $data['year']            = $year;
            $data['emp_id']          = $empid;
            echo Modules::run('template/layout', $data);
        }

    }

    function printInvoice($empid, $month, $year)
    {
        $data['setting']   = $this->setting_model->get_app_setting();
        $data['empDetail'] = $this->payroll_model->getEmployeeByID($empid, $month, $year);
        $this->load->view('invoice', $data);
    }
}
