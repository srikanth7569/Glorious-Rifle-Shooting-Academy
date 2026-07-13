<?php


/**
 * @property Setting_model setting_model
 * @property Fileupload fileupload
 * @property User_model user_model
 * @property Email_model email_model
 */
class Setting extends MX_Controller
{
    public $data = array();

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }
        $this->permission->module('setting')->redirect();
        $this->load->model(array('setting_model', 'user_model', 'email/email_model'));
    }

    function appSetting()
    {
        if ($this->input->post()) {

            $id = getPost('id');
            if ($id) {
                //update
                if ($this->setting_model->updateAppSetting($id)) {
                    $this->session->set_flashdata('success', 'App Setting Updated');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            } else {
                //create

                if ($this->setting_model->createAppSetting()) {
                    $this->session->set_flashdata('success', 'App Setting Created');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }


            }

            redirect('setting/appSetting', 'refresh');


        } else {
            $data['currencyList']  = $this->setting_model->getCurrencyList();
            $data['settingDetail'] = $this->setting_model->get_app_setting();
            $data['title']         = "App Setting";
            $data['content']       = "setting/app_setting";
            echo Modules::run('template/layout', $data);
        }


    }

    function profile()
    {
        $id = $this->session->userdata('id');
        if ($this->input->post()) {
            if ($this->setting_model->updateProfile($id)) {
                $this->session->set_flashdata('success', 'Profile Updated');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');
            }
            redirect('setting/profile', 'refresh');

        } else {
            $data['title'] = "Profile";

            $data['user_profile'] = $this->user_model->get_user_by_id($id);
            $data['content']      = "setting/profile";
            echo Modules::run('template/layout', $data);
        }


    }

    function updateThemeSetting()
    {

        $uid = $this->session->userdata('id');

        $this->db->where('uid', $uid);
        $data = $this->db->get('theme_setting');
        if ($data->num_rows() > 0) {
            //update

            if ($this->setting_model->updateThemeSetting($uid)) {
                echo true;
            } else {
                echo false;
            }

        } else {
            //new record
            if ($this->setting_model->createThemeSetting($uid)) {
                echo true;
            } else {
                echo false;
            }
        }

    }


    function emailSetting()
    {
        if ($this->input->post()) {
            $id = getPost('id');
            if ($id) {
                //update

                if ($this->email_model->updateEmailTemplate($id)) {
                    $this->session->set_flashdata('success', 'Template Updated Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }


            } else {
                //insert

                if ($this->email_model->addEmailTemplate()) {
                    $this->session->set_flashdata('success', 'Template Added Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            }

            redirect('setting/emailSetting', 'refresh');

        } else {


            $data['title']     = 'Email Template';
            $data['content']   = 'setting/email_templates';
            $data['templates'] = $this->email_model->getEmailTemplates();
            echo Modules::run('template/layout', $data);


        }
    }

    function getTemplateByID($id)
    {

        $data = $this->email_model->getTemplateByID($id);
        echo json_encode($data);

    }

    function deleteEmailTemplate($id)
    {
        if ($this->email_model->deleteEmailTemplate($id)) {
            echo true;
        } else {
            echo false;
        }
    }

    function emailTemplateStatusChange()
    {
        $sid = getPost('id');

        $this->db->select('status');
        $this->db->where('id', $sid);
        $status = $this->db->get('email_setting')->row()->status;
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
        $this->db->update('email_setting', $data);
        if ($this->db->affected_rows() > 0) {
            echo true;
        } else {
            echo false;
        }
    }


    function currency()
    {


        if ($this->input->post()) {

            $id = getPost('id');
            if ($id) {
                //update
                if ($this->setting_model->updateCurrency($id)) {
                    $this->session->set_flashdata('success', 'Currency Updated Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }


            } else {
                //create

                if ($this->setting_model->addCurrency()) {
                    $this->session->set_flashdata('success', 'Currency Added Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }


            }

            redirect('setting/currency', 'refresh');


        } else {

            $data['currencyList'] = $this->setting_model->getCurrencyList();
            $data['title']        = 'Currency';
            $data['content']      = 'setting/currency_list';
            echo Modules::run('template/layout', $data);
        }


    }

    function getCurrencyByID($id)
    {
        $data = $this->setting_model->getCurrencyByID($id);

        echo json_encode($data);
    }

    function deleteCurrency($id)
    {
        if ($this->setting_model->deleteCurrency($id)) {
            echo true;
        } else {
            echo false;
        }
    }


}
