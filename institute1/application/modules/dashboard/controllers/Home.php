<?php


/**
 * @property Home_model home_model
 * @property Permission permission
 * @property Setting_model setting_model
 * @property Logs_model logs_model
 */

class Home extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }


        $type = $this->session->userdata('type');

        if ($type != null) {
            redirect('profile');
        }

        $this->load->model(array('home_model', 'setting/setting_model'));

    }


    function index()
    {
        $data['title']         = "Dashboard";
        $data['content']       = "dashboard/dashboard";
        $data['setting']       = $this->setting_model->get_app_setting();
        $data['dashboardData'] = $this->home_model->getDashboard();

        echo Modules::run('template/layout', $data);
    }

}
