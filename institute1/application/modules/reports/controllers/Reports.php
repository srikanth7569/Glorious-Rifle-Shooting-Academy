<?php


/**
 * @property Reports_model reports_model
 */
class Reports extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }
        $this->permission->module('reports')->redirect();

        $this->load->model(array(
            'reports_model'
        ));
    }

    function getFeeReport()
    {
        if ($this->input->post()) {
            $from_date    = getPost('from_date');
            $to_date      = getPost('to_date');
            $data['fees'] = $this->reports_model->getFeeReport($from_date, $to_date);
            $this->load->view('fee_table', $data);
        } else {
            $data['title']   = "Fee Report";
            $data['content'] = "reports/fee_report";
            echo Modules::run('template/layout', $data);
        }

    }

    function getExpenseReport()
    {
        if ($this->input->post()) {
            $from_date        = getPost('from_date');
            $to_date          = getPost('to_date');
            $data['expenses'] = $this->reports_model->getExpenseReport($from_date, $to_date);
            $this->load->view('expense_table', $data);
        } else {
            $data['title']   = "Expense Report";
            $data['content'] = "reports/expense_report";
            echo Modules::run('template/layout', $data);
        }
    }
}
