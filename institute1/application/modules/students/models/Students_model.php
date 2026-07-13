<?php


class Students_model extends CI_Model
{

    function addStudent()
    {


        $regNo = $this->getStudentRegNo(getPost('courseID'), getPost('batchID'));

        $reg_type = getPost('regType');

        if ($reg_type == 1) {
            $enquiry = getPost('enquiry');
            $temp    = array(
                'status' => 1
            );
            $this->db->where('id', $enquiry);
            $this->db->update('enquiry', $temp);


        }


        $data = array(
            'regType'            => getPost('regType'),
            'regNo'              => $regNo,
            'name'               => getPost('name'),
            'cnic'               => getPost('cnic'),
            'mobile'             => getPost('mobile'),
            'father_name'        => getPost('father_name'),
            'gender'             => getPost('gender'),
            'email'              => getPost('email'),
            'dob'                => getPost('dob'),
            'address'            => getPost('address'),
            'courseID'           => getPost('courseID'),
            'batchID'            => getPost('batchID'),
            'student_agreed_fee' => getPost('student_agreed_fee'),
            'department'         => getPost('department'),
            'semester'           => getPost('semester'),
        );


        $this->db->where('cnic', getPost('cnic'));
        $this->db->where('email', getPost('email'));
        $student = $this->db->get('student');

        if ($student->num_rows() > 0) {
            return false;
        } else {
            $this->db->insert('student', $data);
            if ($this->db->insert_id()) {

                $login_data = array(
                    'type'      => 2,
                    'firstname' => getPost('name'),
                    'email'     => getPost('cnic'),
                    'password'  => md5(getPost('cnic')),
                );
                $this->db->insert('user', $login_data);


                return true;
            }
        }
        return false;
    }

    function updateStudent($id)
    {


        $data = array(
            'regType'            => getPost('regType'),
            'name'               => getPost('name'),
            'cnic'               => getPost('cnic'),
            'mobile'             => getPost('mobile'),
            'father_name'        => getPost('father_name'),
            'gender'             => getPost('gender'),
            'email'              => getPost('email'),
            'dob'                => getPost('dob'),
            'address'            => getPost('address'),
            'courseID'           => getPost('courseID'),
            'batchID'            => getPost('batchID'),
            'student_agreed_fee' => getPost('student_agreed_fee'),
            'department'         => getPost('department'),
            'semester'           => getPost('semester'),
        );

        $this->db->where('id', $id);
        $this->db->update('student', $data);
        if ($this->db->affected_rows() > 0) {

            $login_data = array(
                'type'      => 2,
                'firstname' => getPost('name'),
                'email'     => getPost('cnic'),
                'password'  => md5(getPost('cnic')),
            );
            $this->db->where('email', getPost('cnic'));
            $this->db->update('user', $login_data);

            return true;
        }
        return false;
    }

    function getStudents()
    {
        $this->db->select('student.*');
        $this->db->select('courses.title as courseTitle');
        $this->db->select('batch.title as batchTitle');
        $this->db->select('department.title as deptTitle');
        $this->db->join('courses', 'courses.id=student.courseID', 'left');
        $this->db->join('department', 'department.id=student.department', 'left');
        $this->db->join('batch', 'batch.id=student.batchID', 'left');
        return $this->db->get('student')->result();
    }

    function getStudentByID($id)
    {
        $this->db->select('student.*');
        $this->db->select('batch.title as batchTitle');
        $this->db->select('courses.title as courseTitle');
        $this->db->select('department.title as deptName');

        $this->db->join('department', 'department.id=student.department', 'left');
        $this->db->join('courses', 'courses.id=student.courseID', 'left');
        $this->db->join('batch', 'batch.id=student.batchID', 'left');
        $this->db->where('student.id', $id);
        return $this->db->get('student')->row();
    }

    function getStudentsByBatchID($batchID)
    {
        $this->db->select('student.*');
        $this->db->select('courses.title as courseTitle,courses.fees as courseFee');
        $this->db->select('batch.title as batchTitle');
        $this->db->join('courses', 'courses.id=student.courseID', 'left');
        $this->db->join('batch', 'batch.id=student.batchID', 'left');
        $this->db->where('student.batchID', $batchID);
        return $this->db->get('student')->result();
    }

    function getStudentsByName($name)
    {
        $this->db->select('student.*');
        $this->db->select('courses.title as courseTitle,courses.fees as courseFee');
        $this->db->select('batch.title as batchTitle');
        $this->db->join('courses', 'courses.id=student.courseID', 'left');
        $this->db->join('batch', 'batch.id=student.batchID', 'left');
        $this->db->like('student.name', $name);
        return $this->db->get('student')->result();
    }

    function deleteStudent($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('student');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getStudentRegNo($courseID, $batchID)
    {

        $this->db->select('courseCode');
        $this->db->where('id', $courseID);
        $courseCode = $this->db->get('courses')->row()->courseCode;


        $this->db->select('id');
        $this->db->where('courseID', $courseID);
        $this->db->where('batchID', $batchID);
        $this->db->limit(1);
        $this->db->order_by('id', 'DESC');
        $sid = $this->db->get('student');
        if ($sid->num_rows() > 0) {
            $sid = $sid->row()->id;
            $sid = $sid + 1;
        } else {
            $sid = 1;
        }

        $prefix = $this->db->get('setting')->row()->regNoPrefix;


        $regNo = $prefix . '-' . $courseCode . $batchID . '-' . date('y') . '-' . $sid;

        return $regNo;

    }

}
