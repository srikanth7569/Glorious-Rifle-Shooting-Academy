<?php


/**
 * @property Students_model students_model
 * @property Blogs_model blogs_model
 */
class Fee_model extends CI_Model
{

    function getReceiptNo()
    {
        $this->db->select('receiptNoPrefix');
        $receipt_no = $this->db->get('setting')->row()->receiptNoPrefix;

        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $last_id = $this->db->get('fee');
        if ($last_id->num_rows() > 0) {
            $last_id = $last_id->row()->id;
            $last_id = $last_id + 1;
        } else {
            $last_id = 1;
        }
        $receipt_no .= $last_id;
        return $receipt_no;
    }

    function getFeeDetailByStudentID($sid)
    {

        $this->db->select('student.*');
        $this->db->select('batch.title as batchTitle');
        $this->db->join('batch', 'batch.id=student.batchID', 'left');
        $this->db->where('student.id', $sid);

        $data = $this->db->get('student')->row();

        $this->db->where('sid', $sid);
        $this->db->select_sum('amount');
        $paid_fee = round($this->db->get('fee')->row()->amount);

        $data->remainingFee = abs($data->student_agreed_fee - $paid_fee);

        return $data;

    }

    function collectFee()
    {

        $data = array(
            'sid'         => getPost('id'),
            'receiptNo'   => getPost('receiptNo'),
            'date'        => getPost('date'),
            'batchID'     => getPost('batchID'),
            'amount'      => getPost('amount'),
            'description' => getPost('description'),
        );

        $this->db->insert('fee', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;


    }

    function getStudentsDetailByBatchID($batchID)
    {
        $students = $this->students_model->getStudentsByBatchID($batchID);
        foreach ($students as $student) {
            $this->db->select_sum('amount', 'feePaid');
            $this->db->where('batchID', $student->batchID);
            $this->db->where('sid', $student->id);
            $student->feePaid = $this->db->get('fee')->row()->feePaid;
        }

        return $students;
    }


    function getStudentsByName($name)
    {
        $students = $this->students_model->getStudentsByName($name);
        foreach ($students as $student) {
            $this->db->select_sum('amount', 'feePaid');
            $this->db->where('batchID', $student->batchID);
            $this->db->where('sid', $student->id);
            $student->feePaid = $this->db->get('fee')->row()->feePaid;
        }

        return $students;
    }


    function getDetailByStudentID($sid)
    {
        $this->db->select('student.*');
        $this->db->select('batch.title as batchTitle');
        $this->db->select('courses.title as courseTitle');
        $this->db->select('department.title as deptName');
        $this->db->join('department', 'department.id=student.department', 'left');
        $this->db->join('courses', 'courses.id=student.courseID', 'left');
        $this->db->join('batch', 'batch.id=student.batchID', 'left');
        $this->db->where('student.id', $sid);

        $data = $this->db->get('student')->row();

        $faculty = '';
        $this->db->select('faculty');
        $this->db->where('id', $data->batchID);
        $this->db->where('course_id', $data->courseID);
        $faculty = $this->db->get('batch');

        if ($faculty->num_rows() > 0) {
            $faculty = $faculty->row()->faculty;

            $this->db->where('id', $faculty);
            $faculty = $this->db->get('faculty')->row();

            //faculty rating

            $rating = 0;
            $this->db->select('rating');
            $this->db->where('teacher_id', $faculty->id);
            $rating = $this->db->get('teacher_rating');
            if ($rating->num_rows() > 0) {
                $rating = $rating->row()->rating;
            } else {
                $rating = 0;
            }

            //avg rating
            $this->db->select('ROUND(AVG(rating),1) as averageRating');
            $this->db->where('teacher_id', $faculty->id);
            $avg_rating = $this->db->get('teacher_rating');

            if ($avg_rating->num_rows() > 0) {
                $avg_rating = $avg_rating->row()->averageRating;
            } else {
                $avg_rating = 0;
            }

            $faculty->rating     = $rating;
            $faculty->avg_rating = $avg_rating;


        }


        $data->facultyDetail = $faculty;

        $this->db->where('sid', $sid);
        $data->FeeDetail = $this->db->get('fee')->result();


        $data->blogs = $this->blogs_model->getStudentBlogs($sid);

        return $data;

    }
}

