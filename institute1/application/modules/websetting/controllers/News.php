<?php


/**
 * @property News_model news_model
 * @property Master_model master_model
 */
class News extends MX_Controller
{

    public $type;
    public $uid;

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array(
            'news_model',
            'master/master_model'
        ));
        $this->uid = $this->session->userdata('id');
    }

    function index()
    {
        $data['content'] = 'websetting/news/all_news';
        $data['title']   = 'News';
        $data['news']    = $this->news_model->getNews();
        echo Modules::run('template/layout', $data);
    }

    function addNews()
    {

        if ($this->input->post()) {
            $id = getPost('id');

            if ($id) {
                //update

                if ($this->news_model->updateNews($id)) {
                    $this->session->set_flashdata('success', 'News Edited');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }


            } else {
                //create
                if ($this->news_model->addNews($this->uid)) {
                    $this->session->set_flashdata('success', 'News Added');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }
            }

            redirect('websetting/news');


        } else {
            $data['title']      = 'Add News';
            $data['profile']    = $this->type;
            $data['content']    = 'websetting/news/add_news';
            $data['categories'] = $this->master_model->getCourseCategories();
            echo Modules::run('template/layout', $data);
        }


    }

    function newsDetail($id)
    {
        $data['title']      = 'News Detail';
        $data['profile']    = $this->type;
        $data['content']    = 'websetting/news/news_detail';
        $data['newsDetail'] = $this->news_model->getNewsByID($id);
        echo Modules::run('template/layout', $data);
    }

    function editNews($id)
    {
        $data['title']      = 'Edit News';
        $data['content']    = 'websetting/news/add_news';
        $data['categories'] = $this->master_model->getCourseCategories();
        $data['newsDetail'] = $this->news_model->getNewsByID($id);
        echo Modules::run('template/layout', $data);
    }


    function newsStatusChange()
    {
        $id = getPost('news_id');
        $this->db->select('status');
        $this->db->where('id', $id);
        $status = $this->db->get('news')->row()->status;
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
        $this->db->update('news', $data);
        if ($this->db->affected_rows() > 0) {
            echo true;
        } else {
            echo false;
        }
    }

    function delNews($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('new');

        if ($this->db->affected_rows() > 0) {
            echo true;
        } else {
            echo false;
        }
    }


}
