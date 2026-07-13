<?php


/**
 * @property Fileupload fileupload
 */
class Courses_model extends CI_Model
{

    function addCourse()
    {

        $image = $this->fileupload->do_upload(
            'web_assets/images/',
            'image');

        $this->fileupload->do_resize($image, 400, 300);


        $cc_chapter        = getPost('cc_chapter');
        $cc_chapter_detail = getPost('cc_chapter_detail');


        $data = array(
            'title'             => getPost('title'),
            'courseCode'        => getPost('courseCode'),
            'category_id'       => getPost('category_id'),
            'duration'          => getPost('duration'),
            'duration_type'     => getPost('duration_type'),
            'fees'              => getPost('fees'),
            'description'       => getPost('description'),
            'learning_outcomes' => getPost('learning_outcomes'),
            'image'             => $image,
            'status'            => getPost('status'),
            'no_of_lec'         => getPost('no_of_lec'),
            'no_of_quizz'       => getPost('no_of_quizz'),
            'skill_level'       => getPost('skill_level'),
            'language'          => getPost('language'),
            'assessments'       => getPost('assessments'),
            'cc_chapter'        => implode(',', $cc_chapter),
            'cc_chapter_detail' => implode(',', $cc_chapter_detail),
        );

        $this->db->where('title', getPost('title'));
        $course = $this->db->get('courses');
        if ($course->num_rows() > 0) {
            return false;
        } else {
            $this->db->insert('courses', $data);
            if ($this->db->insert_id()) {
                return true;
            }
        }


        return false;
    }

    function updateCourse($id)
    {
        $image = $this->fileupload->do_upload(
            'web_assets/images/',
            'image');

        if (!empty($image))
            $this->fileupload->do_resize($image, 400, 300);


        $cc_chapter        = getPost('cc_chapter');
        $cc_chapter_detail = getPost('cc_chapter_detail');


        $data = array(
            'title'             => getPost('title'),
            'courseCode'        => getPost('courseCode'),
            'category_id'       => getPost('category_id'),
            'duration'          => getPost('duration'),
            'duration_type'     => getPost('duration_type'),
            'fees'              => getPost('fees'),
            'description'       => getPost('description'),
            'learning_outcomes' => getPost('learning_outcomes'),
            'image'             => $image ? $image : getPost('old_image'),
            'status'            => getPost('status'),
            'no_of_lec'         => getPost('no_of_lec'),
            'no_of_quizz'       => getPost('no_of_quizz'),
            'skill_level'       => getPost('skill_level'),
            'language'          => getPost('language'),
            'assessments'       => getPost('assessments'),
            'cc_chapter'        => implode(',', $cc_chapter),
            'cc_chapter_detail' => implode(',', $cc_chapter_detail),
        );


        $this->db->where('id', $id);
        $this->db->update('courses', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;

    }

    function getCourses()
    {
        $this->db->select('courses.*');
        $this->db->select('course_category.name as categoryName');
        $this->db->join('course_category', 'courses.category_id=course_category.id', 'left');
        $this->db->where('courses.status', 1);
        return $this->db->get('courses')->result();
    }

    function getAllCourses($skill_level = null, $category_id = null, $cc_array = null, $instructor = null, $type = null)
    {
        $this->db->select('courses.*');
        $this->db->select('course_category.name as categoryName');
        $this->db->join('course_category', 'courses.category_id=course_category.id', 'left');


        if ($skill_level) {
            $this->db->where('skill_level', $skill_level);
        }
        if ($category_id) {
            $this->db->where('course_category.id', $category_id);
        }

        if ($type != null) {
            if ($type == 1) {
                //free
                $this->db->where('courses.fees', 0);
            }
            if ($type == 2) {
                //paid
                $this->db->where('courses.fees >', 0);
            }
        }
        if ($cc_array) {
            $this->db->where_in('course_category.id', $cc_array);
        }

        $courses = $this->db->get('courses')->result();


        foreach ($courses as $cours) {
            $this->db->where('courseID', $cours->id);
            $cours->totalStudent = $this->db->count_all_results('student');


            $course_faculties = array();


            if ($instructor) {
                $this->db->where_in('id', $instructor);
            }
            $faculties = $this->db->get('faculty')->result();

            $total_faculty = 0;
            foreach ($faculties as $faculty) {
                $f_courses = explode(',', $faculty->course);
                foreach ($f_courses as $val) {
                    if ($val == $cours->id) {
                        $total_faculty++;
                        $course_faculties[] = $faculty;
                    }
                }
            }

            $cours->courseFaculties = $course_faculties;

            $cours->totalFaculty = $total_faculty;


            $this->db->where('course_id', $cours->id);
            $cours->totalBatch = $this->db->count_all_results('batch');
        }
        return $courses;

    }


    function getFilterCourses($cc_array = null, $instructor = null, $type = null)
    {
        $this->db->select('courses.*');
        $this->db->select('course_category.name as categoryName');
        $this->db->join('course_category', 'courses.category_id=course_category.id', 'left');


        if ($type != null) {
            if ($type == 1) {
                //free
                $this->db->where('courses.fees', 0);
            }
            if ($type == 2) {
                //paid
                $this->db->where('courses.fees >', 0);
            }
        }
        if ($cc_array) {
            $this->db->where_in('course_category.id', $cc_array);
        }

        $courses = $this->db->get('courses')->result();


        if ($instructor) {
            $temp_courses = array();


            foreach ($courses as $cours) {

                $this->db->where_in('id', $instructor);
                $faculties = $this->db->get('faculty')->result();
                foreach ($faculties as $faculty) {
                    $f_courses = explode(',', $faculty->course);
                    foreach ($f_courses as $val) {
                        if ($val == $cours->id) {
                            $temp_courses[] = $cours;
                        }
                    }
                }


            }


            $courses = $temp_courses;

        }


        foreach ($courses as $cours) {
            $this->db->where('courseID', $cours->id);
            $cours->totalStudent = $this->db->count_all_results('student');


            $course_faculties = array();


//            if ($instructor) {
//                $this->db->where_in('id', $instructor);
//            }
            $faculties = $this->db->get('faculty')->result();

            $total_faculty = 0;
            foreach ($faculties as $faculty) {
                $f_courses = explode(',', $faculty->course);
                foreach ($f_courses as $val) {
                    if ($val == $cours->id) {
                        $total_faculty++;
                        $course_faculties[] = $faculty;
                    }
                }
            }

            $cours->courseFaculties = $course_faculties;

            $cours->totalFaculty = $total_faculty;


            $this->db->where('course_id', $cours->id);
            $cours->totalBatch = $this->db->count_all_results('batch');
        }


        return $courses;

    }

    function getCourseByID($id)
    {
        $this->db->select('courses.*');
        $this->db->select('course_category.name as courseCategoryTitle,course_category.id as categoryID');
        $this->db->join('course_category', 'courses.category_id=course_category.id', 'left');
        $this->db->where('courses.id', $id);
        $data = $this->db->get('courses')->row();


        $this->db->where('courseID', $id);
        $data->totalStudent = $this->db->count_all_results('student');


        $faculties = $this->db->get('faculty')->result();

        $total_faculty = 0;

        $course_faculties = array();

        foreach ($faculties as $faculty) {
            $f_courses = explode(',', $faculty->course);
            foreach ($f_courses as $val) {
                if ($val == $id) {
                    $total_faculty++;
                    $course_faculties[] = $faculty;
                }
            }
        }


        $data->totalFaculty = $total_faculty;

        $data->courseFaculties = $course_faculties;

        $this->db->where('course_id', $id);
        $data->totalBatch = $this->db->count_all_results('batch');


        $data->courseRating = $this->getRatingByCourseID($id);


        return $data;

    }

    function deleteCourse($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('courses');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getRatingByCourseID($course_id)
    {
        //avg rating
        $avg_rating = 0;
        $this->db->select('ROUND(AVG(rating),1) as averageRating');
        $this->db->where('course_id', $course_id);
        $avg_rating = $this->db->get('teacher_rating');

        if ($avg_rating->num_rows() > 0) {
            $avg_rating = $avg_rating->row()->averageRating;
        }

        //all ratings

        $this->db->select('teacher_rating.*');
        $this->db->select('user.firstname,user.image');
        $this->db->join('user', 'user.id=teacher_rating.user_id', 'left');
        $this->db->where('teacher_rating.course_id', $course_id);
        $rating = $this->db->get('teacher_rating');
        if ($rating->num_rows() > 0) {
            $rating = $rating->result();
        } else {
            $rating = array();
        }

        $data            = (object)array();
        $data->avgRating = $avg_rating;
        $data->ratings   = $rating;


        return $data;


    }

    function searchCourseByName($courseName)
    {
        $this->db->select('id,title');
        $this->db->like('title', $courseName, 'both');
        return $this->db->get('courses')->result();
    }


}
