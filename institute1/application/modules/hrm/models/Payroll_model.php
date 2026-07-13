<?php


/**
 * @property Master_model master_model
 * @property Faculties_model faculties_model
 * @property Students_model students_model
 */
class Payroll_model extends CI_Model
{

    function getEmployeesRecord()
    {
        $roleID  = getPost('roleID');
        $monthID = getPost('monthID');
        $year    = getPost('year');

        $employees = $this->faculties_model->getFacultiesByRoleID($roleID);

        foreach ($employees as $employee) {
            $this->db->where('emp_id', $employee->id);
            $this->db->where('month', $monthID);
            $this->db->where('year', $year);
            $employee->salaryData = $this->db->get('salary')->row();

            $employee->month = $monthID;
            $employee->year  = $year;
        }

        return $employees;

    }

    function getEmployeeDetail($empid, $month, $year)
    {

        $this->db->select('faculty.*');
        $this->db->select('designation.title as designation');
        $this->db->join('designation', 'designation.id=faculty.pos_id', 'left');
        $this->db->where('faculty.id', $empid);
        $employee = $this->db->get('faculty')->row();

        $courses = explode(',', $employee->course);

        $this->db->where_in('id', $courses);
        $employee->courses = $this->db->get('courses')->result();

        $this->db->where('faculty', $empid);
        $batches    = $this->db->get('batch')->result();
        $studentArr = array();
        $students   = array();
        foreach ($batches as $batch) {
            $studentArr[] = $this->students_model->getStudentsByBatchID($batch->id);
        }

        foreach ($studentArr as $item) {
            foreach ($item as $student) {
                $this->db->select_sum('amount');
                $this->db->where('sid', $student->id);
                $this->db->like('date', $year . '-' . $month . '-', 'after');
                $student->feeCollected = $this->db->get('fee')->row()->amount;

                $students[] = $student;
            }
        }


        $employee->students = $students;


        $employee->salaryPayable = $this->getEmpSalary($empid, $month, $year);
        return $employee;


    }

    function getEmpSalary($empid, $month, $year)
    {
        $this->db->where('faculty', $empid);
        $batches = $this->db->get('batch')->result();

        $salary = 0;
//        $month  = date('m', strtotime($month));
        foreach ($batches as $batch) {

            $this->db->select_sum('amount');
            $this->db->where('batchID', $batch->id);
            $this->db->like('date', $year . '-' . $month . '-', 'after');
            $fees = $this->db->get('fee')->row()->amount;

            $salary += $fees * ($batch->faculty_agreed_fees / 100);


        }

        return $salary;


    }

    function confirmPay($empid, $month, $year)
    {

        $basic_salary = getPost('basic_salary');
        $net_salary   = getPost('net_salary');

        $data = array(
            'emp_id'     => $empid,
            'month'      => $month,
            'year'       => $year,
            'basic'      => $basic_salary,
            'deduction'  => getPost('deduction'),
            'gross'      => getPost('gross_salary'),
            'tax'        => getPost('tax'),
            'net_salary' => $net_salary,
            'status'     => 1
        );

        $this->db->where('emp_id', $empid);
        $this->db->where('month', $month);
        $this->db->where('year', $year);
        $already_paid = $this->db->get('salary');
        if ($already_paid->num_rows() > 0) {
            return false;
        }


        if ($net_salary > 0) {
            $this->db->insert('salary', $data);
            if ($this->db->insert_id() > 0) {
                return true;
            } else {
                return false;
            }

        }
        return false;


    }

    function getEmployeeByID($empid, $month, $year)
    {

        $this->db->select('salary.*');
        $this->db->select('faculty.*');
        $this->db->join('faculty', 'faculty.id=salary.emp_id', 'left');
        $this->db->where('salary.month', $month);
        $this->db->where('salary.year', $year);
        $this->db->where('salary.emp_id', $empid);
        $data = $this->db->get('salary')->row();

        return $data;
    }

}
