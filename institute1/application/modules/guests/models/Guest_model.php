<?php


/**
 * @property Fileupload fileupload
 */
class Guest_model extends CI_Model
{

    function addGuest()
    {

        $img = $this->fileupload->do_upload(
            'assets/data/images/',
            'img'
        );
        if ($img)
            $this->fileupload->do_resize($img, 500, 500);


        $data = array(
            'name'           => getPost('name'),
            'designation_id' => getPost('designation_id'),
            'img'            => $img,
            'description'    => getPost('description')
        );

        $this->db->insert('guests', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;


    }


    function getAllGuests()
    {
        $this->db->select('guests.*');
        $this->db->select('designation.title as designation');
        $this->db->join('designation', 'designation.id=guests.designation_id', 'left');
        return $this->db->get('guests')->result();
    }

    function getGuestByID($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('guests')->row();
    }

    function updateGuest($id)
    {
        $img = $this->fileupload->do_upload(
            'assets/data/images/',
            'img'
        );
        if ($img)
            $this->fileupload->do_resize($img, 500, 500);


        $data = array(
            'name'           => getPost('name'),
            'designation_id' => getPost('designation_id'),
            'img'            => $img ? $img : getPost('old_image'),
            'description'    => getPost('description')
        );

        $this->db->where('id', $id);
        $this->db->update('guests', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function delGuest($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('guests');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }


}
