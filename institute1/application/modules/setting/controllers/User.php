<?php


/**
 * @property Permission permission
 * @property User_model user_model
 */
class User extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }
        $this->load->model('user_model');

        $this->permission->module('user')->redirect();
    }

    function index()
    {
        $data['title'] = "User";
        $data['user_list'] = $this->user_model->get_user_list();
        $data['content']   = "setting/manage_user";
        echo Modules::run('template/layout', $data);
    }


    public function delete_user($id = null)
    {
        if ($this->user_model->delete_user($id)) {
            echo true;
        } else {
            echo false;
        }
    }


    public function create_user()
    {
        $config['upload_path']   = './assets/data/user/';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('picture')) {
            $data                     = $this->upload->data();
            $image                    = $config['upload_path'] . $data['file_name'];
            $config['image_library']  = 'gd2';
            $config['source_image']   = $image;
            $config['create_thumb']   = false;
            $config['maintain_ratio'] = TRUE;
            $config['width']          = 115;
            $config['height']         = 90;


            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $this->session->set_flashdata('message', ('image_upload_successfully'));
        }


        $data['user'] = (object)$userLevelData = array(
            'firstname'   => $this->input->post('first_name',true),
            'lastname'    => $this->input->post('last_name',true),
            'email'       => $this->input->post('email',true),
            'password'    => md5($this->input->post('password',true)),
            'image'       => (!empty($image) ? $image : $this->input->post('old_image',true)),
            'last_login'  => null,
            'last_logout' => null,
            'ip_address'  => null,
            'status'      => $this->input->post('status',true),
            'is_admin'    => 0
        );


        if (empty($userLevelData['image'])) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
        }

        $id = getPost('id');
        if ($id) {
            //update
            if ($this->user_model->update_user($id, $userLevelData)) {
                $this->session->set_flashdata('message', "User Updated");
            } else {
                $this->session->set_flashdata('error', 'Some error occurred');
            }
        } else {
            //create
            if ($this->user_model->create_user($userLevelData)) {
                $this->session->set_flashdata('message', "User created");
            } else {
                $this->session->set_flashdata('error', 'Some error occurred');
            }
        }
        redirect("setting/user");


    }


    function getUserByID($id)
    {
        $data = $this->user_model->get_user_by_id($id);
        echo json_encode($data);
    }


}
