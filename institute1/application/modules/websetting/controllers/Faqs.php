<?php


/**
 * @property Faqs_model faqs_model
 */
class Faqs extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();

        //Do your magic here
        $this->load->model('faqs_model');
    }

    function index()
    {

        if ($this->input->post()) {


            $id = getPost('id');
            if ($id) {
                //update

                if ($this->faqs_model->updateFaq($id)) {
                    $this->session->set_flashdata('success', 'Faq Updated');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }
            } else {
                //create

                if ($this->faqs_model->addFaq()) {
                    $this->session->set_flashdata('success', 'Faq Added');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            }

            redirect('websetting/faqs', 'refresh');


        } else {
            $data['title']   = 'FAQs';
            $data['faqs']    = $this->faqs_model->getFaqs();
            $data['content'] = 'websetting/faqs/faqs_list';
            echo Modules::run('template/layout', $data);
        }


    }

    function getFaqByID($id)
    {
        $data = $this->faqs_model->getFaqByID($id);
        echo json_encode($data);
    }

    function deleteFaq($id)
    {
        if ($this->faqs_model->deleteFaq($id)) {
            echo true;
        } else {
            echo false;
        }
    }

}
