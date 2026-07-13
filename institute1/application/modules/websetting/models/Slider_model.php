<?php


/**
 * @property Fileupload fileupload
 */
class Slider_model extends CI_Model
{

    function addSlider()
    {

        $img = $this->fileupload->do_upload(
            'web_assets/images/',
            'img');
        $this->fileupload->do_resize($img, 1489, 838);

        $data = array(
            'title'       => getPost('title'),
            'description' => getPost('description'),
            'img'         => $img
        );
        $this->db->insert('slider', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;


    }


    function updateSlider($id)
    {

        $img = $this->fileupload->do_upload(
            'web_assets/images/',
            'img');
        $this->fileupload->do_resize($img, 1489, 838);

        $data = array(
            'title'       => getPost('title'),
            'description' => getPost('description'),
            'img'         => $img ? $img : getPost('old_image')
        );
        $this->db->where('id', $id);
        $this->db->update('slider', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;


    }


    function getSliders()
    {
        return $this->db->get('slider')->result();
    }

    function getSliderByID($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('slider')->row();
    }


}
