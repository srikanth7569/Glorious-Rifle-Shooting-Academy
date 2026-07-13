<?php


/**
 * @property Email_model email_model
 * @property Enquiry_model enquiry_model
 */
class Email extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();

        //Do your magic here

        $this->load->model(array(
            'email_model',
            'enquiries/enquiry_model'
        ));


    }


    function inbox()
    {
        $data['title']    = 'Inbox';
        $data['content']  = 'email/inbox';
        $data['messages'] = $this->email_model->getAllMessages(1);
        echo Modules::run('template/layout', $data);
    }


    function read($msg_id)
    {
        $data['title']   = 'Read';
        $data['detail']  = $this->email_model->getMessageByID($msg_id);
        $data['content'] = 'email/read';
        echo Modules::run('template/layout', $data);
    }


    function compose($msg_id = null)
    {
        $data['detail'] = '';
        if ($msg_id) {
            $data['detail'] = $this->email_model->getMessageByID($msg_id);
        }
        $data['title']   = 'Compose';
        $data['content'] = 'email/compose';
        echo Modules::run('template/layout', $data);
    }

    function sent()
    {
        $data['title']    = 'Sent';
        $data['content']  = 'email/inbox';
        $data['messages'] = $this->email_model->getAllMessages(2);
        echo Modules::run('template/layout', $data);
    }


    function subscribers()
    {
        $data['title']       = 'Subscriber';
        $data['content']     = 'email/subscriber';
        $data['subscribers'] = $this->email_model->getSubscribers();
        echo Modules::run('template/layout', $data);
    }


    public function send_email()
    {
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $this->db->limit(1);
        $setting = $this->db->get('setting')->row();


        $from_email = $setting->email ? $setting->email : 'qaiserawan7700@gmail.com';
        $to_email   = getPost('to_email');
        $subject    = getPost('subject');
        $msg        = getPost('message');

        $this->email->from($from_email, $setting->institute_name);
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($msg);
        if ($this->email->send()) {
            $data = array(
                'name'    => ' ',
                'email'   => $to_email,
                'subject' => $subject,
                'message' => $msg,
                'status'  => 2
            );

            $this->db->insert('messages', $data);

            $this->session->set_flashdata("success", "Email Send Successfully.");
        } else {
            $this->session->set_flashdata("error", "Some Error Occurred");
        }

        redirect('email/inbox');
    }

    function sendEmailToEnquiry()
    {
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $enq_id     = getPost('enq_id');
        $enq_detail = $this->enquiry_model->getEnquiryByID($enq_id);

        $this->db->limit(1);
        $setting = $this->db->get('setting')->row();


        $from_email = $setting->email ? $setting->email : 'qaiserawan7700@gmail.com';
        $to_email   = $enq_detail->email;

        $email_setting = $this->email_model->getEmailTemplates(1, 1);

        $subject = $email_setting->subject;
        $msg     = $email_setting->message;

        $msg = str_replace('{{student_name}}', $enq_detail->name, $msg);
        $msg = str_replace('{{student_mobile}}', $enq_detail->mobile, $msg);
        $msg = str_replace('{{student_cnic}}', $enq_detail->cnic, $msg);
        $msg = str_replace('{{student_course}}', $enq_detail->courseTitle, $msg);


        $this->email->from($from_email, $setting->institute_name);
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($msg);
        if ($this->email->send()) {
            $insert_data = array(
                'name'    => $enq_detail->name,
                'email'   => $to_email,
                'subject' => $subject,
                'message' => $msg,
                'status'  => 2
            );

            $this->db->insert('messages', $insert_data);


            $this->db->where('id', $enq_detail->id);
            $this->db->update('enquiry', array('email_status' => 1));


            echo json_encode(array('success' => true, 'email' => $to_email));
        } else {
            echo json_encode(array('success' => false));
        }
    }

    function sendEmailToSubscribers()
    {
        $sent   = false;
        $course = getPost('course_title');
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);

        $subscibers = $this->email_model->getSubscribers();

        $this->db->limit(1);
        $setting = $this->db->get('setting')->row();


        $from_email    = $setting->email ? $setting->email : 'qaiserawan7700@gmail.com';
        $email_setting = $this->email_model->getEmailTemplates(1, 2);
        $subject       = $email_setting->subject;
        $msg           = $email_setting->message;
        $msg           = str_replace('{{student_course}}', $course, $msg);

        foreach ($subscibers as $subsciber) {
            $to_email = $subsciber->email;
            $this->email->from($from_email, $setting->institute_name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($msg);


            if ($this->email->send()) {
                $insert_data = array(
                    'name'    => 'Subscriber',
                    'email'   => $to_email,
                    'subject' => $subject,
                    'message' => $msg,
                    'status'  => 2
                );

                $this->db->insert('messages', $insert_data);

            }
        }


        $this->db->where('title', $course);
        $this->db->update('courses', array('email_status' => 1));


        echo json_encode(array('success' => true, 'msg' => 'Email Sent to All Subscribers'));


    }


}
