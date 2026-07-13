<?php


/**
 * @property Fileupload fileupload
 */
class About_model extends CI_Model
{

    function addAbout()
    {


        $slider_image1 = $this->fileupload->do_upload(
            'web_assets/images/',
            'slider1');
        $slider_image2 = $this->fileupload->do_upload(
            'web_assets/images/',
            'slider2');
        $slider_image3 = $this->fileupload->do_upload(
            'web_assets/images/',
            'slider3');

        $members = getPost('team_members');

        $members = implode(',', $members);

        $data = array(
            'slider1'      => $slider_image1,
            'slider2'      => $slider_image2,
            'slider3'      => $slider_image3,
            'who_we_are'   => getPost('who_we_are'),
            'what_we_do'   => getPost('what_we_do'),
            'team_members' => $members
        );

        $this->db->insert('about_us', $data);

        if ($this->db->insert_id()) {
            return true;
        }
        return false;


    }

    function getAbout()
    {

        $row = $this->db->get('about_us')->row();

        $event_members = array();
        $members       = $row->team_members;
        $tt            = explode(',', $members);

        foreach ($tt as $item) {

            $ddd = explode('-', $item);

            $id   = $ddd[0];
            $type = $ddd[1];

            if ($type == 1) {
                //guest

                $this->db->select('guests.*');
                $this->db->select('designation.title as designation');
                $this->db->join('designation', 'designation.id=guests.designation_id', 'left');
                $this->db->where('guests.id', $id);
                $temp_member       = $this->db->get('guests')->row();
                $temp_member->type = 1;
                $event_members[]   = $temp_member;


            } elseif ($type == 2) {
                //faculty

                $this->db->select('faculty.name,faculty.img');
                $this->db->select('designation.title as designation');
                $this->db->join('designation', 'designation.id=faculty.pos_id', 'left');
                $this->db->where('faculty.id', $id);
                $temp_member              = $this->db->get('faculty')->row();
                $temp_member->type        = 2;
                $temp_member->description = '';
                $event_members[]          = $temp_member;
            }


        }


        $row->members = $event_members;


        return $row;

    }

    function updateAbout($id)
    {
        $slider_image1 = $this->fileupload->do_upload(
            'web_assets/images/',
            'slider1');
        $slider_image2 = $this->fileupload->do_upload(
            'web_assets/images/',
            'slider2');
        $slider_image3 = $this->fileupload->do_upload(
            'web_assets/images/',
            'slider3');

        $members = getPost('team_members');

        $members = implode(',', $members);

        $data = array(
            'slider1'      => $slider_image1 ? $slider_image1 : getPost('old_slider1'),
            'slider2'      => $slider_image2 ? $slider_image2 : getPost('old_slider2'),
            'slider3'      => $slider_image3 ? $slider_image3 : getPost('old_slider3'),
            'who_we_are'   => getPost('who_we_are'),
            'what_we_do'   => getPost('what_we_do'),
            'team_members' => $members
        );


        $this->db->where('id', $id);
        $this->db->update('about_us', $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
}
