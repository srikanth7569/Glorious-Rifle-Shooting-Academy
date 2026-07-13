<?php


/**
 * @property Event_model event_model
 */
class Event extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('event_model'));
    }

    function index()
    {
        $data['title']   = 'Events';
        $data['content'] = 'websetting/event/event_list';
        $data['events']  = $this->event_model->getEvents();
        echo Modules::run('template/layout', $data);
    }

    function addEvent()
    {
        if ($this->input->post()) {
            $id = getPost('id');
            if ($id) {
                //update
                if ($this->event_model->updateEvent($id)) {
                    $this->session->set_flashdata('success', 'Event Updated');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');

                }

            } else {
                //create
                if ($this->event_model->addEvent()) {
                    $this->session->set_flashdata('success', 'Event Added');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');

                }

            }

            redirect('websetting/event');

        } else {


            $data['members'] = $this->event_model->getAllMembers();

            $data['title']   = "Add Event";
            $data['content'] = "websetting/event/add_event";
            echo Modules::run('template/layout', $data);

        }

    }


    function eventStatusChange()
    {
        $id = getPost('id');
        $this->db->select('status');
        $this->db->where('id', $id);
        $status = $this->db->get('events')->row()->status;
        if ($status == 0) {
            $data = array(
                'status' => 1
            );
        } else {
            $data = array(
                'status' => 0
            );
        }
        $this->db->where('id', $id);
        $this->db->update('events', $data);
        if ($this->db->affected_rows() > 0) {
            echo true;
        } else {
            echo false;
        }
    }

    function getEventByID($id)
    {

        $data = $this->event_model->getEventByID($id);
        echo json_encode($data);

    }

    function editEvent($id)
    {
        $data['members'] = $this->event_model->getAllMembers();
        $data['title']       = "Edit Event";
        $data['eventDetail'] = $this->event_model->getEventByID($id);
        $data['content']     = "websetting/event/add_event";
        echo Modules::run('template/layout', $data);
    }


}
