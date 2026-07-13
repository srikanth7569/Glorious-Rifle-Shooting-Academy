<?php


class Batches_model extends CI_Model
{

    function addBatch()
    {


        $data = array(
            'title'               => getPost('title'),
            'course_id'           => getPost('course_id'),
            'batch_time'          => getPost('batch_time'),
            'start_date'          => getPost('start_date'),
            'end_date'            => getPost('end_date'),
            'faculty'             => getPost('faculty'),
            'faculty_agreed_fees' => getPost('faculty_agreed_fees'),
            'description'         => getPost('description'),
        );

        $this->db->where('title', getPost('title'));
        $batch = $this->db->get('batch');

        if ($batch->num_rows() > 0) {
            return false;
        } else {
            $this->db->insert('batch', $data);
            if ($this->db->insert_id()) {
                return true;
            }
        }

        return false;
    }

    function updateBatch($id)
    {


        $data = array(
            'title'               => getPost('title'),
            'course_id'           => getPost('course_id'),
            'batch_time'          => getPost('batch_time'),
            'start_date'          => getPost('start_date'),
            'end_date'            => getPost('end_date'),
            'faculty'             => getPost('faculty'),
            'faculty_agreed_fees' => getPost('faculty_agreed_fees'),
            'description'         => getPost('description'),
        );

        $this->db->where('id', $id);
        $this->db->update('batch', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getBatches()
    {
        $this->db->select('batch.*');
        $this->db->select('courses.title as courseTitle');
        $this->db->join('courses', 'courses.id=batch.course_id', 'left');
        $this->db->select('faculty.name as facultyName');
        $this->db->join('faculty', 'faculty.id=batch.faculty', 'left');
        return $this->db->get('batch')->result();
    }

    function getBatchByID($id)
    {
        $this->db->select('batch.*');

        $this->db->select('courses.title as courseTitle,courses.fees as courseFee');
        $this->db->select('faculty.*');
        $this->db->join('faculty', 'faculty.id=batch.faculty', 'left');
        $this->db->join('courses', 'courses.id=batch.course_id', 'left');

        $this->db->where('batch.id', $id);
        $data = $this->db->get('batch')->row();

        $faculty_id = $data->faculty;

        $this->db->select('student.*');
        $this->db->select('courses.title as courseTitle,courses.fees as courseFee');
        $this->db->select('batch.title as batchTitle');
        $this->db->select('department.title as deptTitle');
        $this->db->join('courses', 'courses.id=student.courseID', 'left');
        $this->db->join('department', 'department.id=student.department', 'left');
        $this->db->join('batch', 'batch.id=student.batchID', 'left');
        $this->db->where('student.batchID', $id);
        $students = $this->db->get('student')->result();

        foreach ($students as $student) {
            $this->db->select_sum('amount', 'feePaid');
            $this->db->where('sid', $student->id);
            $student->feePaid = $this->db->get('fee')->row()->feePaid;
        }


        $data->students = $students;

        $data->barChart = $this->getBarChartData($id, $faculty_id);


        return $data;
    }

    function getBatchesByCourseID($courseID)
    {
        $this->db->where('course_id', $courseID);
        return $this->db->get('batch')->result();
    }

    function deleteBatch($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('batch');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getBarChartData($batch_id, $faculty_id)
    {
        $data = array();
        $year = date('Y');
        for ($i = 1; $i <= 12; $i++) {
            if ($i < 10) {
                $j = '0' . $i;
            } else {
                $j = $i;
            }
            $this->db->select_sum('amount');
            $this->db->where('batchID', $batch_id);
            $this->db->like('date', $year . '-' . $j . '-', 'after');
            $fee_paid = round($this->db->get('fee')->row()->amount);


            $this->db->select('net_salary');
            $this->db->where('emp_id', $faculty_id);
            $this->db->where('year', $year);
            $this->db->where('month', $j);
            $salary_paid = $this->db->get('salary');
            if ($salary_paid->num_rows() > 0) {
                $salary_paid = round($salary_paid->row()->net_salary);
            } else {
                $salary_paid = 0;
            }
            $temp = array(
                'feePaid'    => $fee_paid,
                'salaryPaid' => $salary_paid
            );

            $data[] = $temp;

        }
        return $data;
    }

    function getUpcomingBatch()
    {
        $date = date('Y-m-d');
        $this->db->select('batch.*');
        $this->db->select('courses.title as courseTitle');
        $this->db->select('courses.id as courseID');
        $this->db->join('courses', 'courses.id=batch.course_id', 'left');
        $this->db->limit(1);
        $this->db->where('batch.start_date >=', $date);
        $data = $this->db->get('batch')->row();
        return $data;
    }
}
