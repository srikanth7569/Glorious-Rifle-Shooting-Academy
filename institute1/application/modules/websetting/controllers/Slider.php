<?php


/**
 * @property Slider_model slider_model
 */
class Slider extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('slider_model'));
    }

    function index()
    {
        $data['title']   = 'Sliders';
        $data['content'] = 'websetting/slider/slider_list';
        $data['sliders'] = $this->slider_model->getSliders();
        echo Modules::run('template/layout', $data);
    }

    function addSlider()
    {
        $id = getPost('id');
        if ($id) {
            //update
            if ($this->slider_model->updateSlider($id)) {
                $this->session->set_flashdata('success', 'Slider Updated');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');

            }

        } else {
            //create
            if ($this->slider_model->addSlider()) {
                $this->session->set_flashdata('success', 'Slider Added');
            } else {
                $this->session->set_flashdata('error', 'Some Error Occurred');

            }

        }

        redirect('websetting/slider');
    }


    function sliderStatusChange()
    {
        $id = getPost('id');
        $this->db->select('status');
        $this->db->where('id', $id);
        $status = $this->db->get('slider')->row()->status;
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
        $this->db->update('slider', $data);
        if ($this->db->affected_rows() > 0) {
            echo true;
        } else {
            echo false;
        }
    }

    function getSliderByID($id)
    {

        $data = $this->slider_model->getSliderByID($id);
        echo json_encode($data);

    }


}
