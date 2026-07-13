<?php


/**
 * @property Courses_model courses_model
 * @property Batches_model batches_model
 * @property Master_model master_model
 * @property Blogs_model blogs_model
 */
class Frontend extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();

        //Do your magic here
        $this->load->model(array(
            'websetting/slider_model',
            'websetting/event_model',
            'courses/courses_model',
            'master/master_model',
            'faculties/faculties_model',
            'enquiries/enquiry_model',
            'websetting/blogs_model',
            'websetting/news_model',
            'websetting/about_model',
            'websetting/faqs_model',
            'batches/batches_model'
        ));

    }

    function index()
    {
        $data['sliders']        = $this->slider_model->getSliders();
        $data['events']         = $this->event_model->getEvents(3);
        $data['popularCourses'] = $this->courses_model->getAllCourses();
        $data['upcomingBatch']  = $this->batches_model->getUpcomingBatch();


        $data['news'] = $this->news_model->getNews(3);
        $this->load->view('home', $data);
    }

    function layout($data = null)
    {
        $this->load->view('layout', $data);
    }

    function allCourses()
    {

        if ($this->input->post()) {
            $course_categories  = getPost('course_category');
            $instructor         = getPost('instructor');
            $type               = getPost('course_type');
            $data['allCourses'] = $this->courses_model->getFilterCourses($course_categories, $instructor, $type);
            $data['title']      = 'All Courses';
            $data['content']    = 'frontend/course/all_courses';
            $this->layout($data);


        } else {
            $data['title']      = 'All Courses';
            $data['allCourses'] = $this->courses_model->getAllCourses();
            $data['content']    = 'frontend/course/all_courses';
            $this->layout($data);
        }


    }

    function basicDevelopment()
    {
        $data['title']      = 'Basic Development';
        $data['allCourses'] = $this->courses_model->getAllCourses(1);
        $data['content']    = 'frontend/course/all_courses';
        $this->layout($data);
    }

    function advanceDevelopment()
    {
        $data['title']      = 'Advance Development';
        $data['allCourses'] = $this->courses_model->getAllCourses(2);
        $data['content']    = 'frontend/course/all_courses';
        $this->layout($data);
    }

    function courseDetail($id)
    {
        $data['content']      = 'frontend/course/course_detail';
        $data['courseDetail'] = $this->courses_model->getCourseByID($id);


        $data['cc_chapter']        = explode(',', $data['courseDetail']->cc_chapter);
        $data['cc_chapter_detail'] = explode(',', $data['courseDetail']->cc_chapter_detail);


        $data['title'] = $data['courseDetail']->courseCategoryTitle;
        $this->layout($data);

    }

    function blogs()
    {
        $data['content'] = 'blogs/all_blog';
        $data['title']   = 'Blogs';
        $data['blogs']   = $this->blogs_model->getBlogs();
        $this->layout($data);
    }

    function getBlogsByCategory($cat_id)
    {
        $data['content'] = 'blogs/all_blog';
        $data['title']   = 'Blogs';
        $data['blogs']   = $this->blogs_model->getBlogs(null, null, null, $cat_id);
        $this->layout($data);
    }


    function blogDetail($id)
    {
        $data['content']    = 'blogs/blog_detail';
        $data['blogDetail'] = $this->blogs_model->getBlogByID($id);
        $data['title']      = $data['blogDetail']->title;
        $this->layout($data);
    }

    function news()
    {
        $data['title']   = 'News';
        $data['content'] = 'news/all_news';
        $data['news']    = $this->news_model->getNews();
        $this->layout($data);
    }

    function newsDetail($id)
    {
        $data['content']    = 'news/news_detail';
        $data['newsDetail'] = $this->news_model->getNewsByID($id);
        $data['title']      = $data['newsDetail']->title;
        $this->layout($data);
    }

    function events()
    {
        $data['title']   = 'Events';
        $data['content'] = 'events/all_events';
        $data['events']  = $this->event_model->getEvents();
        $this->layout($data);
    }

    function eventDetail($id)
    {
        $data['content']     = 'events/event_detail';
        $data['eventDetail'] = $this->event_model->getEventByID($id);

        $data['title'] = $data['eventDetail']->title;
        $this->layout($data);
    }

    function aboutUs()
    {
        $data['title']   = 'About';
        $data['content'] = 'about/about_us';
        $data['about']   = $this->about_model->getAbout();
        $this->layout($data);
    }

    function becomeInstructor()
    {
        $data['title']   = 'Become Instructor';
        $data['content'] = 'instructor/become_instructor';
        $this->layout($data);
    }

    function contactUs()
    {
        $data['title']   = 'Contact Us';
        $data['content'] = 'contact/contact_us';
        $this->layout($data);
    }

    function gallery()
    {
        $data['title']   = 'Gallery';
        $data['content'] = 'gallery/gallery';
        $this->layout($data);
    }

    function faqs()
    {
        $data['title']   = 'FAQs';
        $data['faqs']    = $this->faqs_model->getFaqs();
        $data['content'] = 'faqs/faqs';
        $this->layout($data);
    }

    function facultyDetail($id = null)
    {
        $data['title']         = 'Profile';
        $data['facultyDetail'] = $this->faculties_model->getFacultyByID($id);
        $data['content']       = 'profile/faculty_detail';
        $this->layout($data);
    }


    function getRegistered()
    {
        $data['content']     = "enquiries/enquiry_form";
        $data['courses']     = $this->courses_model->getCourses();
        $data['departments'] = $this->master_model->getDepartments();
        $this->load->view('enquiries/enquiry_form', $data);


    }

    function searchCourseByName($courseName = '')
    {

        $data = '';
        if (!empty($courseName)) {
            $courses = $this->courses_model->searchCourseByName($courseName);
            foreach ($courses as $item) {
                $data .= '<li><a href="frontend/courseDetail/' . $item->id . '">' . $item->title . '</a></li>';
            }
        }


        echo $data;

    }


    function subscribe()
    {

        $this->db->where('email', getPost('email'));
        $q = $this->db->get('subscriber');

        if ($q->num_rows() > 0) {

            echo json_encode(array('success' => false, 'message' => 'You Have Already Subscribe'));


        } else {


            $data = array(
                'email' => getPost('email')
            );
            $this->db->insert('subscriber', $data);
            if ($this->db->insert_id()) {
                echo json_encode(array('success' => true, 'message' => 'You have Subscribe to our Newsletter'));

            } else {
                echo json_encode(array('success' => false, 'message' => 'Some Error Occurred'));

            }
        }
    }


    function addMessage()
    {
        $data = array(
            'name'    => getPost('name'),
            'email'   => getPost('email'),
            'subject' => getPost('subject'),
            'message' => getPost('message'),
        );


        $this->db->insert('messages', $data);
        if ($this->db->insert_id()) {
            $this->session->set_flashdata('success', 'We will contact you ASAP');
        } else {
            $this->session->set_flashdata('error', 'Please Try Again Later');
        }

        redirect($_SERVER['HTTP_REFERER']);

    }


    function voucher()
    {
        $this->load->view('voucher/voucher');
    }


}
