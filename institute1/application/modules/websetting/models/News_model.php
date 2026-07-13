<?php


/**
 * @property Fileupload fileupload
 */
class News_model extends CI_Model
{

    function addNews($uid)
    {

        $image = $this->fileupload->do_upload(
            'web_assets/uploads/',
            'image');

        $this->fileupload->do_resize($image, 870, 445);


        $data = array(
            'title'       => getPost('title'),
            'img'         => $image,
            'description' => getPost('description'),
            'author_id'   => $uid,
            'category'    => getPost('category_id')
        );

        $this->db->insert('news', $data);

        if ($this->db->insert_id()) {
            return true;
        }
        return false;


    }

    function updateNews($id)
    {
        $image = $this->fileupload->do_upload(
            'web_assets/uploads/',
            'image');
        $this->fileupload->do_resize($image, 870, 445);
        $data = array(
            'title'       => getPost('title'),
            'img'         => $image ? $image : getPost('old_image'),
            'description' => getPost('description'),
            'category'    => getPost('category_id')
        );
        $this->db->where('id', $id);
        $this->db->update('news', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getNews($limit = null)
    {
        $this->db->select('news.*');
        $this->db->select('course_category.name as categoryName');
        $this->db->select('user.firstname,user.image');
        $this->db->join('user', 'user.id=news.author_id', 'left');
        $this->db->join('course_category', 'course_category.id=news.category', 'left');
        $this->db->limit($limit);
        $this->db->order_by('news.id', 'DESC');
        $news = $this->db->get('news')->result();
        return $news;
    }


    function getNewsByID($id)
    {
        $this->db->select('news.*');
        $this->db->select('course_category.name as categoryName');
        $this->db->select('user.firstname,user.image');
        $this->db->join('user', 'user.id=news.author_id', 'left');
        $this->db->join('course_category', 'course_category.id=news.category', 'left');
        $this->db->where('news.id', $id);
        $news_detail = $this->db->get('news')->row();
        return $news_detail;
    }
}
