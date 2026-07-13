<?php


/**
 * @property Guest_model guest_model
 */
class Guests extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        //Do your magic here
        $this->load->model(
            array('guest_model', 'master/master_model')
        );
    }

    function index()
    {
        $data['title']       = 'Guests';
        $data['content']     = 'guests/guest_list';
        $data['designation'] = $this->master_model->getDesignations();
        $data['guests']      = $this->guest_model->getAllGuests();
        echo Modules::run('template/layout', $data);
    }

    function addGuest()
    {
        $id = getPost('id');
        if ($id) {

            //update

            if ($this->guest_model->updateGuest($id)) {
                $this->session->set_flashdata('success', 'Guest Updated');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');

            }
        } else {
            //create
            if ($this->guest_model->addGuest()) {
                $this->session->set_flashdata('success', 'Guest Added');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');

            }
        }

        redirect('guests');
    }

    function getGuestByID($id)
    {
        $data = $this->guest_model->getGuestByID($id);
        echo json_encode($data);
    }

    function delGuest($id)
    {
        if ($this->guest_model->delGuest($id)) {
            echo true;
        } else {
            echo false;
        }
    }


}
