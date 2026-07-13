<?php


/**
 * @property Role_model role_model Roles Model
 * @property Permission permission
 */
class Role extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }
        $this->permission->module('permission')->redirect();
        $this->load->model('role_model');
    }

    function index()
    {
        $data['title']     = "Role Setup";
        $data['role_list'] = $this->role_model->get_role_list();
        $data['modules']   = $this->role_model->get_modules();
        $data['content']   = "permission/role_main";
        echo Modules::run('template/layout', $data);
    }

    public function create_role()
    {

        $rolData = array(
            'role_name'        => $this->input->post('role_name',true),
            'role_description' => $this->input->post('role_description',true),
            'create_by'        => $this->session->userdata('id'),
            'date_time'        => date('Y-m-d h:i:s')
        );


        $this->db->insert('sec_role_tbl', $rolData);
        $role_id = $this->db->insert_id();

        $module  = $this->input->post('module',true);
        $menu_id = $this->input->post('menu_id',true);
        $create  = $this->input->post('create',true);
        $read    = $this->input->post('read',true);
        $update  = $this->input->post('edit',true);
        $delete  = $this->input->post('delete',true);

        $new_array = array();
        for ($m = 0; $m < sizeof($module); $m++) {

            for ($i = 0; $i < sizeof($menu_id[$m]); $i++) {

                for ($j = 0; $j < sizeof($menu_id[$m][$i]); $j++) {

                    $dataStore = array(
                        'role_id'    => $role_id,
                        'menu_id'    => $menu_id[$m][$i][$j],
                        'can_create' => (!empty($create[$m][$i][$j]) ? $create[$m][$i][$j] : 0),
                        'can_edit'   => (!empty($update[$m][$i][$j]) ? $update[$m][$i][$j] : 0),
                        'can_access' => (!empty($read[$m][$i][$j]) ? $read[$m][$i][$j] : 0),
                        'can_delete' => (!empty($delete[$m][$i][$j]) ? $delete[$m][$i][$j] : 0),
                        'createby'   => $this->session->userdata('id'),
                        'createdate' => date('Y-m-d h:i:s'),
                    );

                    array_push($new_array, $dataStore);

                }
            }
        }


        if ($this->role_model->create_role($new_array)) {
            $this->session->set_flashdata('success', "Role created");
        } else {
            $this->session->set_flashdata('error', "Some error occurred");
        }

        redirect("permission/role");


    }


    public function delete_role($id = null)
    {
        $this->db->where('role_id', $id)->delete('sec_role_tbl');
        $delete = $this->db->where('role_id', $id)->delete('sec_role_permission');

        if ($delete) {
            $this->session->set_flashdata('success', "Role Deleted");
        } else {
            $this->session->set_flashdata('error', "Some error occurred");
        }
        redirect("permission/role");
    }


    function user_access_role()
    {
        $data['title']          = "Assign Role";
        $data['user_role_list'] = $this->role_model->get_user_list();
        $data['user_dropdown']  = $this->role_model->get_user_dropdown();
        $data['role']           = $this->role_model->get_role();
        $data['content']        = "permission/user_role_main";
        echo Modules::run('template/layout', $data);
    }

    public function save_role_access($q_role_id = null, $q_user_id = null)
    {
        $new_array = array();

        if (!$q_role_id && !$q_user_id) {

            $role_id = $this->input->post('role',true);
            $user_id = $this->input->post('user_id',true);
        } else {
            $role_id = $q_role_id;
            $user_id = $q_user_id;
        }

        for ($j = 0; $j < sizeof($role_id); $j++) {
            $rolData = array(
                'fk_role_id' => $role_id[$j],
                'fk_user_id' => $user_id
            );
            array_push($new_array, $rolData);
        }

        $this->db->where('fk_user_id', $new_array[0]['fk_user_id'])->delete('sec_user_access_tbl');
        $this->db->insert_batch('sec_user_access_tbl', $new_array);

        if (!$q_role_id && !$q_user_id) {
            $this->session->set_flashdata('message', "Access granted");
            redirect("permission/role/user_access_role");
        }

    }


    public function delete_access_role($id)
    {
        $this->db->where('role_acc_id', $id)->delete('sec_user_access_tbl');
        $this->session->set_flashdata('success', "Role Deleted");
        redirect("permission/role");

    }

    public function edit_role($id = null)
    {

        $data['title'] = "Edit Role";

        $data['modules'] = $this->role_model->get_modules();

        $data['roleData'] = $this->db->select('*')
            ->from('sec_role_tbl')
            ->where('role_id', $id)
            ->get()->row();

        $data['roleAcc'] = $this->db->select('sec_role_permission.*,sec_menu_item.menu_title')
            ->from('sec_role_permission')
            ->join('sec_menu_item', 'sec_menu_item.menu_id=sec_role_permission.menu_id')
            ->where('role_id', $id)
            ->get()->result();

        $data['content'] = "permission/role_edit";

        echo Modules::run('template/layout', $data);


    }

    function update_role()
    {
        $role_id = $this->input->post('role_id',true);

        $rolData = array(
            'role_name'        => $this->input->post('role_name',true),
            'role_description' => $this->input->post('role_description',true)
        );
        $this->db->where('role_id', $role_id)->update('sec_role_tbl', $rolData);


        $module  = $this->input->post('module',true);
        $menu_id = $this->input->post('menu_id',true);
        $create  = $this->input->post('create',true);
        $read    = $this->input->post('read',true);
        $update  = $this->input->post('edit',true);
        $delete  = $this->input->post('delete',true);

        $new_array = array();
        for ($m = 0; $m < sizeof($module); $m++) {

            for ($i = 0; $i < sizeof($menu_id[$m]); $i++) {

                for ($j = 0; $j < sizeof($menu_id[$m][$i]); $j++) {
                    $dataStore = array(
                        'role_id'    => $role_id,
                        'menu_id'    => $menu_id[$m][$i][$j],
                        'can_create' => (!empty($create[$m][$i][$j]) ? $create[$m][$i][$j] : 0),
                        'can_edit'   => (!empty($update[$m][$i][$j]) ? $update[$m][$i][$j] : 0),
                        'can_access' => (!empty($read[$m][$i][$j]) ? $read[$m][$i][$j] : 0),
                        'can_delete' => (!empty($delete[$m][$i][$j]) ? $delete[$m][$i][$j] : 0),
                        'createby'   => $this->session->userdata('id'),
                        'createdate' => date('Y-m-d h:i:s'),
                    );

                    array_push($new_array, $dataStore);

                }
            }
        }


        if ($this->role_model->create_role($new_array)) {
            $this->session->set_flashdata('success', "Role update");
        } else {
            $this->session->set_flashdata('error', "Some error occurred");
        }

        redirect("permission/role");


    }


}
