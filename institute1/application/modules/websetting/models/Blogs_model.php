<?php


/**
 * @property Fileupload fileupload
 */
class Blogs_model extends CI_Model
{

    function addBlog($type, $uid)
    {

        $image = $this->fileupload->do_upload(
            'web_assets/uploads/',
            'image');

        $this->fileupload->do_resize($image, 870, 445);


        $data = array(
            'title'       => getPost('title'),
            'img'         => $image,
            'description' => getPost('description'),
            'author_type' => $type,
            'author_id'   => $uid,
            'category'    => getPost('category_id')
        );

        $this->db->insert('blogs', $data);

        if ($this->db->insert_id()) {
            return true;
        }
        return false;


    }

    function updateBlog($id, $type, $uid)
    {
        $image = $this->fileupload->do_upload(
            'web_assets/uploads/',
            'image');
        $this->fileupload->do_resize($image, 870, 445);
        $data = array(
            'title'       => getPost('title'),
            'img'         => $image ? $image : getPost('old_image'),
            'description' => getPost('description'),
            //            'author_type' => $type,
            //            'author_id'   => $uid,
            'category'    => getPost('category_id')
        );
        $this->db->where('id', $id);
        $this->db->update('blogs', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getBlogs($isAdmin = null, $type = null, $uid = null, $cat_id = null)
    {
        if ($isAdmin) {
            $blogs = $this->getAllBlogs($isAdmin);
            return $blogs;
        }


        if ($type and $uid) {
            $this->db->where('author_type', $type);
            $this->db->where('author_id', $uid);
            $blogs = $this->db->get('blogs')->result();
        } else {
            $blogs = $this->getAllBlogs($isAdmin, $cat_id);
        }
        return $blogs;
    }

    function getAllBlogs($isAdmin, $cat_id = null)
    {
        if (!$isAdmin) {
            $this->db->where('status', 1);
        }

        $this->db->select('blogs.*');
        $this->db->select('course_category.name as categoryName');
        $this->db->join('course_category', 'course_category.id=blogs.category', 'left');


        if ($cat_id) {
            $this->db->where('blogs.category', $cat_id);
        }

        $blogs = $this->db->get('blogs')->result();
        foreach ($blogs as $blog) {
            if ($blog->author_type == 1) {
                $this->db->where('id', $blog->author_id);
                $blog->authorDetail = $this->db->get('faculty')->row();
            } elseif ($blog->author_type == 2) {
                $this->db->where('id', $blog->author_id);
                $blog->authorDetail = $this->db->get('student')->row();
            }
        }

        return $blogs;
    }

    function getBlogByID($id, $type = null, $uid = null)
    {
        if ($type and $uid) {
            $this->db->where('author_type', $type);
            $this->db->where('author_id', $uid);
            $this->db->where('id', $id);
            $blog_detail = $this->db->get('blogs')->row();
        } else {
            $this->db->where('id', $id);
            $blog_detail = $this->db->get('blogs')->row();
            if ($blog_detail->author_type == 1) {
                $this->db->where('id', $blog_detail->author_id);
                $blog_detail->authorDetail = $this->db->get('faculty')->row();
            } elseif ($blog_detail->author_type == 2) {
                $this->db->where('id', $blog_detail->author_id);
                $blog_detail->authorDetail = $this->db->get('student')->row();
            }
        }
        return $blog_detail;
    }

    function getStudentBlogs($sid)
    {
        $this->db->select('blogs.*');
        $this->db->select('course_category.name as categoryName');
        $this->db->join('course_category', 'course_category.id=blogs.category', 'left');

        $this->db->where('author_id', $sid);
        return $this->db->get('blogs')->result();
    }


    function getLatestBlogs($limit = null)
    {
        $this->db->select('blogs.*');
        $this->db->select('course_category.name as categoryName');
        $this->db->join('course_category', 'course_category.id=blogs.category', 'left');

        $this->db->limit($limit);
        $this->db->order_by('id', 'DESC');
        return $this->db->get('blogs')->result();

    }


}
