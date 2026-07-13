<?php


class Reports_model extends CI_Model
{

    function getExpenseReport($from_date, $to_date)
    {
        $this->db->select('expense.*');
        $this->db->select('expense_category.name as expenseCategory');
        $this->db->join('expense_category', 'expense_category.id=expense.expense_category', 'left');
        $this->db->where("date between '$from_date' and '$to_date'");
        return $this->db->get('expense')->result();
    }


    function getFeeReport($from_date, $to_date)
    {
        $this->db->select_sum('fee.amount', 'feePaid');
        $this->db->select('fee.sid');
        $this->db->select('student.name,student.mobile,student.student_agreed_fee');
        $this->db->join('student', 'student.id=fee.sid', 'left');
        $this->db->select('batch.title as batchTitle');
        $this->db->join('batch', 'batch.id=student.batchID', 'left');
        $this->db->select('courses.title as courseTitle,courses.fees as courseFee');
        $this->db->join('courses', 'courses.id=student.courseID', 'left');
        $this->db->group_by('fee.sid');
        $this->db->where("fee.date between '$from_date' and '$to_date'");
        $data = $this->db->get('fee')->result();
        return $data;
    }


}
