<?php


/**
 * @property Event_model event_model
 * @property About_model about_model
 */
class About extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();

        //Do your magic here
        $this->load->model(array('about_model', 'event_model'));
    }

    function index()
    {

        if ($this->input->post()) {

            $id = getPost('id');

            if ($id) {
                //update
                if ($this->about_model->updateAbout($id)) {

                    $this->session->set_flashdata('success', 'About Updated');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            } else {
                //create
                if ($this->about_model->addAbout()) {

                    $this->session->set_flashdata('success', 'About Added');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }


            }


            redirect('websetting/about', 'refresh');

        } else {
            $data['title']   = 'About Us';
            $data['content'] = 'websetting/about/about_us';
            $data['members'] = $this->event_model->getAllMembers();
            $data['about']   = $this->about_model->getAbout();
            echo Modules::run('template/layout', $data);
        }


    }

}
