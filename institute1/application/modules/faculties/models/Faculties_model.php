<?php


/**
 * @property Fileupload fileupload
 */
class Faculties_model extends CI_Model
{

    function addFaculty()
    {


        //logo upload
        $image = $this->fileupload->do_upload(
            'assets/data/images/',
            'img'
        );

        $this->fileupload->do_resize($image, 500, 500);


        $data = array(
            'pos_id'        => getPost('pos_id'),
            'name'          => getPost('name'),
            'father_name'   => getPost('father_name'),
            'email'         => getPost('email'),
            'mobile'        => getPost('mobile'),
            'gender'        => getPost('gender'),
            'dob'           => getPost('dob'),
            'img'           => $image,
            'address'       => getPost('address'),
            'course'        => implode(',', getPost('course')),
            'qualification' => getPost('qualification'),
            'experience'    => getPost('experience'),
            'doj'           => getPost('doj'),
            'fb'            => getPost('fb'),
            'twitter'       => getPost('twitter'),
            'instagram'     => getPost('instagram'),
        );


        $this->db->where('email', getPost('email'));
        $faculty = $this->db->get('faculty');

        if ($faculty->num_rows() > 0) {
            return false;
        } else {
            $this->db->insert('faculty', $data);
            if ($this->db->insert_id()) {

                $login_data = array(
                    'type'      => 1,
                    'firstname' => getPost('name'),
                    'email'     => getPost('email'),
                    'password'  => getPost('password'),
                    'image'     => $image,
                );
                $this->db->insert('user', $login_data);

                return true;
            }
        }
        return false;
    }


    function updateFaculty($id)
    {


        //logo upload
        $image = $this->fileupload->do_upload(
            'assets/data/images/',
            'img'
        );

        $this->fileupload->do_resize($image, 500, 500);


        $data = array(
            'pos_id'        => getPost('pos_id'),
            'name'          => getPost('name'),
            'father_name'   => getPost('father_name'),
            'email'         => getPost('email'),
            'mobile'        => getPost('mobile'),
            'gender'        => getPost('gender'),
            'dob'           => getPost('dob'),
            'img'           => $image ? $image : getPost('old_image'),
            'address'       => getPost('address'),
            'course'        => implode(',', getPost('course')),
            'qualification' => getPost('qualification'),
            'experience'    => getPost('experience'),
            'doj'           => getPost('doj'),
            'fb'            => getPost('fb'),
            'twitter'       => getPost('twitter'),
            'instagram'     => getPost('instagram'),
        );


        $this->db->where('id', $id);
        $this->db->update('faculty', $data);
        if ($this->db->affected_rows() > 0) {


            $login_data = array(
                'firstname' => getPost('name'),
                'password'  => getPost('password'),
                'image'     => $image,
            );
            $this->db->where('email', getPost('email'));
            $this->db->update('user', $login_data);

            return true;
        }
        return false;
    }

    function getFaculties()
    {
        $faculties = $this->db->get('faculty')->result();
        foreach ($faculties as $faculty) {
            $courses         = explode(',', $faculty->course);
            $faculty_courses = array();
            foreach ($courses as $course) {
                $this->db->select('title');
                $this->db->where('id', $course);
                $temp_f_courses = $this->db->get('courses');
                if ($temp_f_courses->num_rows() > 0) {
                    $faculty_courses[] = $temp_f_courses->row()->title;
                }
            }
            $faculty->facultyCourses = $faculty_courses;


            //faculty rating

            $rating = 0;
            $this->db->select('rating');
            $this->db->where('teacher_id', $faculty->id);
            $rating = $this->db->get('teacher_rating');
            if ($rating->num_rows() > 0) {
                $rating = $rating->result();
            }


            //avg rating
            $this->db->select('ROUND(AVG(rating),1) as averageRating');
            $this->db->where('teacher_id', $faculty->id);
            $avg_rating = $this->db->get('teacher_rating');

            if ($avg_rating->num_rows() > 0) {
                $avg_rating = $avg_rating->row()->averageRating;
            }

            $faculty->ratings    = $rating;
            $faculty->avg_rating = $avg_rating;


        }
        return $faculties;
    }

    function getFacultyByID($id)
    {
        $this->db->where('id', $id);
        $data    = $this->db->get('faculty')->row();
        $courses = explode(',', $data->course);

        $f_courses = array();

        $students = array();
        foreach ($courses as $cours) {


            $this->db->select('student.*');
            $this->db->select('courses.title as courseTitle');
            $this->db->select('batch.title as batchTitle');
            $this->db->join('courses', 'courses.id=student.courseID', 'left');
            $this->db->join('batch', 'batch.id=student.batchID', 'left');


            $this->db->where('student.courseID', $cours);
            $temp_students = $this->db->get('student')->result();
            foreach ($temp_students as $student) {
                $students[] = $student;
            }


            $this->db->where('id', $cours);
            $temp_course = $this->db->get('courses');
            if ($temp_course->num_rows() > 0) {
                $temp_course = $temp_course->row();
            }

            $this->db->where('courseID', $cours);
            $temp_course->totalStudent = $this->db->count_all_results('student');
            $f_courses[]               = $temp_course;

        }

        $data->courses = (object)$f_courses;

        $data->students = $students;

        $this->db->select('batch.*');
        $this->db->select('courses.title as courseTitle');
        $this->db->join('courses', 'courses.id=batch.course_id', 'left');
        $this->db->select('faculty.name as facultyName');
        $this->db->join('faculty', 'faculty.id=batch.faculty', 'left');


        $this->db->where('faculty', $data->id);
        $batches = $this->db->get('batch')->result();


        foreach ($batches as $batch) {
            $this->db->where('batchID', $batch->id);
            $batch->totalStudents = $this->db->count_all_results('student');
        }


        $data->batches = $batches;

        return $data;
    }

    function deleteFaculty($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('faculty');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getFacultiesByRoleID($roleID)
    {
        $this->db->select('faculty.*');
        $this->db->select('designation.title as designation');
        $this->db->join('designation', 'designation.id=faculty.pos_id', 'left');
        return $this->db->where('pos_id', $roleID)->get('faculty')->result();

    }

    function getFacultiesByCourseID($courseID)
    {
        $faculties = $this->db->get('faculty')->result();

        $data = array();
        foreach ($faculties as $faculty) {
            $courses = explode(',', $faculty->course);
            foreach ($courses as $cours) {
                if ($cours == $courseID) {
                    $data[] = $faculty;
                }
            }
        }
        return $data;
    }
}
