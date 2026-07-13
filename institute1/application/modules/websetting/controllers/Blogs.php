<?php


/**
 * @property Blogs_model blogs_model
 * @property Master_model master_model
 */
class Blogs extends MX_Controller
{

    public $type;
    public $uid;
    public $u_detail;

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array(
            'blogs_model',
            'master/master_model'
        ));


        $this->type    = $this->session->userdata('type');
        $this->u_email = $this->session->userdata('email');

        if ($this->type == 1) {
            //teacher
            $this->db->where('email', $this->u_email);
            $this->u_detail = $this->db->get('faculty')->row();
        }
        if ($this->type == 2) {
            //student
            $this->db->where('cnic', $this->u_email);
            $this->u_detail = $this->db->get('student')->row();
        }
        if ($this->u_detail)
            $this->uid = $this->u_detail->id;
    }

    function index()
    {
        $isAdmin = $this->session->userdata('isAdmin');

        $data['profile'] = $this->type;

        if ($isAdmin) {
            $data['content'] = 'websetting/blogs/admin_blogs';
            $data['title']   = 'Blogs';
        } else {
            $data['title']   = 'My Blogs';
            $data['content'] = 'websetting/blogs/my_blogs';
        }
        $data['blogs'] = $this->blogs_model->getBlogs($isAdmin, $this->type, $this->uid);
        echo Modules::run('template/layout', $data);
    }

    function addBlog()
    {

        if ($this->input->post()) {
            $id = getPost('id');

            if ($id) {
                //update

                if ($this->blogs_model->updateBlog($id, $this->type, $this->uid)) {
                    $this->session->set_flashdata('success', 'Blog Edited');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }


            } else {
                //create
                if ($this->blogs_model->addBlog($this->type, $this->uid)) {
                    $this->session->set_flashdata('success', 'Blog Submitted For Approval');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }
            }

            redirect('websetting/blogs');


        } else {
            $data['title']      = 'Add Blog';
            $data['profile']    = $this->type;
            $data['content']    = 'websetting/blogs/add_blog';
            $data['categories'] = $this->master_model->getCourseCategories();
            echo Modules::run('template/layout', $data);
        }


    }

    function blogDetail($id)
    {
        $data['title']      = 'Blog Detail';
        $data['profile']    = $this->type;
        $data['content']    = 'websetting/blogs/blog_detail';
        $data['blogDetail'] = $this->blogs_model->getBlogByID($id, $this->type, $this->uid);
        echo Modules::run('template/layout', $data);
    }

    function editBlog($id)
    {
        $data['title']      = 'Edit Blog';
        $data['profile']    = $this->type;
        $data['content']    = 'websetting/blogs/add_blog';
        $data['categories'] = $this->master_model->getCourseCategories();
        $data['blogDetail'] = $this->blogs_model->getBlogByID($id, $this->type, $this->uid);
        echo Modules::run('template/layout', $data);
    }


    function blogStatusChange()
    {
        $id = getPost('blog_id');
        $this->db->select('status');
        $this->db->where('id', $id);
        $status = $this->db->get('blogs')->row()->status;
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
        $this->db->update('blogs', $data);
        if ($this->db->affected_rows() > 0) {
            echo true;
        } else {
            echo false;
        }
    }

    function delBlog($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blogs');
        if ($this->db->affected_rows() > 0) {
            echo true;
        } else {
            echo false;
        }
    }


}
