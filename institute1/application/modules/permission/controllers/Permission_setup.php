<?php


/**
 * @property Permission permission
 * @property Permission_model permission_model
 */
class Permission_setup extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }
        $this->permission->module('permission')->redirect();
        $this->load->model('permission_model');


    }

    function index()
    {
        $data['title']          = "Menu Setup";
        $data['menu_item_list'] = $this->permission_model->get_menu_list();
        $data['p_menu']         = $this->permission_model->get_parent_menu();
        $data['content']        = "permission/permission_menu_main";
        echo Modules::run('template/layout', $data);
    }


    public function save_menu()
    {
        $setData = array(
            'menu_title'  => $this->input->post('menu_title',true),
            'module'      => $this->input->post('module',true),
            'parent_menu' => $this->input->post('parent_menu',true),
            'createdate'  => date('Y-m-d'),
            'createby'    => $this->session->userdata('id'),
        );
        $id      = getPost('id');
        if ($id) {
            $this->db->where('menu_id', $id);
            $this->db->update('sec_menu_item', $setData);
            $this->session->set_flashdata('message', "Menu Updated");

            //update
        } else {
            //create
            $this->db->insert('sec_menu_item', $setData);
            $this->session->set_flashdata('message', "Menu added");
        }


        redirect('permission/permission_setup');
    }

    public function delete_menu_item($id)
    {
        $this->db->where('menu_id', $id)->delete('sec_menu_item');
    }


    public function edit_menu_item($id)
    {
        $data['p_menu']    = $this->permission_model->get_parent_menu();
        $data['title']     = "Edit Menu Item";
        $data['content']   = "permission/permission_menu_edit";
        $data['menu_item'] = $this->permission_model->get_menu_item_by_id($id);

        echo Modules::run('template/layout', $data);
    }

    public function update_menu_item()
    {
        $setData = array(
            'menu_title'  => $this->input->post('menu_title',true),
            'page_url'    => $this->input->post('page_url',true),
            'module'      => $this->input->post('module',true),
            'parent_menu' => $this->input->post('parent_menu',true)
        );
        $menu_id = $this->input->post('menu_id',true);
        $this->db->where('menu_id', $menu_id)->update('sec_menu_item', $setData);
        redirect('permission/permission_setup');
    }

    function getMenuByID($id)
    {
        $data = $this->permission_model->get_menu_item_by_id($id);
        echo json_encode($data);
    }


}
