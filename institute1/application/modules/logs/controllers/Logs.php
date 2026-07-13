<?php


/**
 * @property Logs_model logs_model
 */
class Logs extends MX_Controller
{


    public function __construct()
    {
    	parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }
    	$this->load->model('logs_model');
    }
    function index()
    {

        $data['title']   = "System Logs";
        $data['content'] = "logs/logs_view";
        $data['logsinfo']=$this->logs_model->get_logs();
        echo Modules::run('template/layout', $data);


    }

    function get_logs_by_date()
    {
        $from_date=date('Y-m-d',strtotime($this->input->post('from_date',true)));
        $to_date=date('Y-m-d',strtotime($this->input->post('to_date',true)));
        $data['logsinfo']=$this->logs_model->get_logs($from_date,$to_date);
        $this->load->view('logs/logs_tbl',$data);
    }

}
