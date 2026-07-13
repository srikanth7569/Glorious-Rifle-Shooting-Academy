<?php


/**
 * @property  Auth_model auth_model
 * @property Logs_model logs_model
 */
class Auth extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('auth_model', 'logs/logs_model'));
    }

    public function index()
    {

        if ($this->session->userdata('isLogIn')) {

            redirect('dashboard/home');


        }
        $data['title'] = 'Dashboard';


        $data['user'] = (object)$userData = array(
            'email'    => $this->input->post('email',true),
            'password' => $this->input->post('password',true),
        );
        if (isset($_POST['login'])) {

            $user = $this->auth_model->checkUser($userData);


            if ($user->num_rows() > 0) {


                $checkPermission = $this->auth_model->userPermission2($user->row()->id);


                if ($checkPermission != NULL) {
                    $permission  = array();
                    $permission1 = array();
                    if (!empty($checkPermission)) {
                        foreach ($checkPermission as $value) {
                            $permission[$value->module] = array(
                                'create' => $value->create,
                                'read'   => $value->read,
                                'update' => $value->update,
                                'delete' => $value->delete
                            );


                            $permission1[$value->menu_title] = array(
                                'create' => $value->create,
                                'read'   => $value->read,
                                'update' => $value->update,
                                'delete' => $value->delete
                            );


                        }
                    }
                }

                $sData = array(
                    'isLogIn'          => true,
                    'isAdmin'          => (($user->row()->is_admin == 1) ? true : false),
                    'user_type'        => $user->row()->is_admin,
                    'id'               => $user->row()->id,
                    'type'             => $user->row()->type,
                    'fullname'         => $user->row()->fullname,
                    'user_level'       => $user->row()->user_level,
                    'email'            => $user->row()->email,
                    'image'            => $user->row()->image,
                    'last_login'       => $user->row()->last_login,
                    'last_logout'      => $user->row()->last_logout,
                    'ip_address'       => $user->row()->ip_address,
                    'permission'       => json_encode(@$permission),
                    'label_permission' => json_encode(@$permission1)
                );


                //store date to session
                $this->session->set_userdata($sData);

                //update database status
                $this->auth_model->last_login();
                //welcome message
                $this->session->set_flashdata('success', 'Welcome Back' . ' ' . $user->row()->fullname);


                //user_agent
                $this->load->library('user_agent');

                if ($this->agent->is_browser()) {
                    $agent = $this->agent->browser() . ' ' . $this->agent->version();
                } elseif ($this->agent->is_robot()) {
                    $agent = $this->agent->robot();
                } elseif ($this->agent->is_mobile()) {
                    $agent = $this->agent->mobile();
                } else {
                    $agent = 'Unidentified User Agent';
                }


                $logData = array(
                    'action_page' => __CLASS__ . " " . __FUNCTION__,
                    'action_done' => "Logged In",
                    'remarks'     => "IP Address " . $this->input->ip_address() . " " . $agent . " Platform " . $this->agent->platform(),
                    'user_name'   => $this->session->userdata('fullname'),
                    'entry_date'  => date('Y-m-d H:i:s'),
                );

                $this->logs_model->log_recorded($logData);


//                $this->auth_model->fill_calendar_with_dates(date('' . $prevYear . '-' . $prevMonth . '-01'), date('Y-m-t'));

                redirect('dashboard/home', 'refresh');

            } else {


                $logData = array(
                    'action_page' => __CLASS__ . " " . __FUNCTION__,
                    'action_done' => "Try to Login with invalid username or password",
                    'remarks'     => "IP Address" . $this->input->ip_address(),
                    'user_name'   => $this->session->userdata('fullname'),
                    'entry_date'  => date('Y-m-d H:i:s'),
                );
                $this->logs_model->log_recorded($logData);

                $this->session->set_flashdata('error', "Incorrect username or password");
                redirect('login');
            }

        } else {
            echo Modules::run('template/login');
        }
    }

    public function logout()
    {
        //update database status
        $this->auth_model->last_logout();
        //destroy session
        $this->session->sess_destroy();
        redirect('login');
    }
}
