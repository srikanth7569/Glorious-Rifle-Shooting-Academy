<?php


class Setting_model extends CI_Model
{
    public function get_app_setting()
    {
        $this->db->select('currency.symbol as currencySymbol');
        $this->db->join('currency', 'currency.id=setting.currency', 'left');
        $data = $this->db->select("setting.*")
            ->limit(1)
            ->from("setting")
            ->get()
            ->row();

        return $data;
    }

    public function createAppSetting()
    {
        //logo upload
        $logo = $this->fileupload->do_upload(
            'assets/img/icons/',
            'logo'
        );
        $data = array(
            'institute_name'  => getPost('institute_name'),
            'logo'            => $logo,
            'email'           => getPost('email'),
            'phone'           => getPost('phone'),
            'address'         => getPost('address'),
            'regNoPrefix'     => getPost('regNoPrefix'),
            'receiptNoPrefix' => getPost('receiptNoPrefix'),
        );
        $this->db->insert("setting", $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;
    }

    public function updateAppSetting($id)
    {
        //logo upload
        $logo = $this->fileupload->do_upload(
            'assets/img/icons/',
            'logo'
        );
        $data = array(
            'institute_name'  => getPost('institute_name'),
            'logo'            => $logo ? $logo : getPost('old_image'),
            'email'           => getPost('email'),
            'phone'           => getPost('phone'),
            'address'         => getPost('address'),
            'regNoPrefix'     => getPost('regNoPrefix'),
            'receiptNoPrefix' => getPost('receiptNoPrefix'),
            'currency'        => getPost('currency'),
        );
        $this->db->where('id', $id);
        $this->db->update("setting", $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }


    function createUser()
    {

        $data = array(
            'username'  => $this->input->post('userName', true),
            'email'     => $this->input->post('email', true),
            'password'  => md5($this->input->post('password', true)),
            'token'     => md5($this->input->post('email', true)),
            'is_active' => 1
        );
        $this->db->insert('user', $data);

        if ($this->db->insert_id()) {
            return true;
        } else {
            return false;
        }

    }

    function updateUser($id)
    {

        $data = array(
            'username'  => $this->input->post('userName', true),
            'email'     => $this->input->post('email', true),
            'password'  => md5($this->input->post('password', true)),
            'token'     => md5($this->input->post('email', true)),
            'is_active' => 1
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;


    }

    function getUsers()
    {
        $q = $this->db->get('user');
        return $q->result();
    }

    function getUserByID($id)
    {
        $this->db->where('id', $id);
        $q = $this->db->get('user');
        return $q->row();
    }

    function createMenu()
    {
        $data = array(
            'menu_title' => $this->input->post('menu', true)
        );

        $this->db->insert('menu', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;

    }

    function deleteUser($uid)
    {
        $this->db->where('uid', $uid);
        $this->db->delete('role');

        $this->db->where('id', $uid);
        $this->db->delete('user');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;

    }

    function updateProfile($id)
    {
        $data = array(
            'firstname' => getPost('firstname'),
            'lastname'  => getPost('lastname'),
            'email'     => getPost('email'),
            'password'  => md5(getPost('password')),
            'about'     => getPost('about')
        );

        $this->db->where('id', $id);
        $this->db->update('user', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function createThemeSetting($uid)
    {
        $data = array(
            'uid'           => $uid,
            'layout'        => getPost('layout'),
            'sidebar_color' => getPost('sb_color'),
            'theme_color'   => getPost('theme_color'),
            'mini_sidebar'  => getPost('mini_sb')
        );
        $this->db->insert('theme_setting', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;
    }

    function updateThemeSetting($uid)
    {
        $data = array(
            'layout'        => getPost('layout'),
            'sidebar_color' => getPost('sb_color'),
            'theme_color'   => getPost('theme_color'),
            'mini_sidebar'  => getPost('mini_sb')
        );
        $this->db->where('uid', $uid);
        $this->db->update('theme_setting', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function addCurrency()
    {

        $data = array(
            'name'   => getPost('name'),
            'code'   => getPost('code'),
            'symbol' => getPost('symbol'),
        );

        $this->db->insert('currency', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;
    }

    function updateCurrency($id)
    {

        $data = array(
            'name'   => getPost('name'),
            'code'   => getPost('code'),
            'symbol' => getPost('symbol'),
        );

        $this->db->where('id', $id);
        $this->db->update('currency', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getCurrencyList()
    {
        return $this->db->get('currency')->result();
    }

    function getCurrencyByID($id)
    {

        return $this->db->where('id', $id)->get('currency')->row();
    }

    function deleteCurrency($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('currency');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }


}
