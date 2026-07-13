<?php


/**
 * @property Fileupload fileupload
 */
class Event_model extends CI_Model
{

    function addEvent()
    {


        $members = getPost('members');

        $members = implode(',', $members);

        $img = $this->fileupload->do_upload(
            'web_assets/images/',
            'image');
        $this->fileupload->do_resize($img, 450, 233);

        $data = array(
            'title'         => getPost('title'),
            'description'   => getPost('description'),
            'event_content' => getPost('event_content'),
            'image'         => $img,
            'date'          => getPost('date'),
            'start_time'    => getPost('start_time'),
            'end_time'      => getPost('end_time'),
            'location'      => getPost('location'),
            'total_slots'   => getPost('total_slots'),
            'cost'          => getPost('cost'),
            'members'       => $members
        );
        $this->db->insert('events', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;


    }


    function updateEvent($id)
    {

        $img = $this->fileupload->do_upload(
            'web_assets/images/',
            'image');

        if ($img) {
            $this->fileupload->do_resize($img, 1489, 838);
        }

        $data = array(
            'title'         => getPost('title'),
            'description'   => getPost('description'),
            'event_content' => getPost('event_content'),
            'image'         => $img ? $img : getPost('old_image'),
            'date'          => getPost('date'),
            'start_time'    => getPost('start_time'),
            'end_time'      => getPost('end_time'),
            'location'      => getPost('location'),
            'total_slots'   => getPost('total_slots'),
            'cost'          => getPost('cost'),
        );
        $this->db->where('id', $id);
        $this->db->update('events', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;


    }


    function getEvents($limit = null)
    {
        $this->db->limit($limit);
        $this->db->order_by('id', 'DESC');
        $events = $this->db->get('events')->result();

        foreach ($events as $event) {

            $event_members = array();
            $members       = $event->members;
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

            $event->members = $event_members;

        }

        return $events;
    }

    function getEventByID($id)
    {
        $this->db->where('id', $id);
        $event = $this->db->get('events')->row();

        $event_members = array();
        $members       = $event->members;
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

        $event->members = $event_members;
        return $event;


    }

    function getAllMembers()
    {
        $data      = array();
        $guest     = $this->db->get('guests')->result();
        $faculties = $this->db->get('faculty')->result();

        foreach ($guest as $item) {
            $item->guestType = 1;
            $data[]          = $item;
        }
        foreach ($faculties as $faculty) {
            $faculty->guestType = 2;
            $data[]             = $faculty;

        }
        return $data;

    }


}
