<?php


/**
 * @property Master_model master_model
 * @property Batches_model batches_model
 * @property Faculties_model faculties_model
 * @property Courses_model courses_model
 * @property Setting_model setting_model
 */
class Batches extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }
        $this->permission->module('batches')->redirect();

        $this->load->model(array('batches_model',
                                 'faculties/faculties_model',
                                 'master/master_model',
                                 'courses/courses_model',
                                 'setting/setting_model'));
    }

    function index()
    {
        $data['title']   = "Batches";
        $data['content'] = "batches/batch_list";
        $data['batches'] = $this->batches_model->getBatches();
        echo Modules::run('template/layout', $data);
    }

    function addBatch()
    {

        if ($this->input->post()) {

            $id = getPost('id');
            if ($id) {
                //update
                if ($this->batches_model->updateBatch($id)) {
                    $this->session->set_flashdata('success', 'Batch Updated Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            } else {
                //create

                if ($this->batches_model->addBatch()) {
                    $this->session->set_flashdata('success', 'Batch Created Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            }
            redirect('batches/addBatch', 'refresh');


        } else {
            $data['title']   = "Add Batch";
            $data['content'] = "batches/add_batch";
//            $data['faculties'] = $this->faculties_model->getFaculties();
            $data['courses'] = $this->courses_model->getCourses();
            echo Modules::run('template/layout', $data);
        }


    }

    function editBatch($id)
    {
        $data['batchDetail'] = $this->batches_model->getBatchByID($id);
        $data['faculties']   = $this->faculties_model->getFaculties();
        $data['courses']     = $this->courses_model->getCourses();
        $data['title']       = "Edit Batch";
        $data['content']     = "batches/add_batch";
        echo Modules::run('template/layout', $data);
    }

    function deleteBatch($id)
    {
        if ($this->batches_model->deleteBatch($id)) {
            echo true;
        } else {
            echo false;
        }
    }

    function getCourseByID()
    {
        $id            = getPost('courseID');
        $data          = $this->courses_model->getCourseByID($id);
        $duration_type = $data->duration_type;
        $duration      = $data->duration;

        if ($duration_type == 'Days') {

            $end_date = date('Y-m-d', strtotime('+' . $duration . ' day'));

        }
        if ($duration_type == 'Month') {
            $end_date = date('Y-m-d', strtotime('+' . $duration . ' month'));
        }

        $data->end_date = $end_date;
        echo json_encode($data);
    }

    function getFacultiesByCourseID()
    {
        $courseID = getPost('courseID');
        $data     = $this->faculties_model->getFacultiesByCourseID($courseID);

        echo json_encode($data);

    }

    function getBatchEndDate()
    {
        $start_date = strtotime(getPost('startDate'));

        $duration      = getPost('duration');
        $duration_type = getPost('duration_type');

        if ($duration_type == 'Days') {
            $end_date = date('Y-m-d', strtotime('+' . $duration . ' day', $start_date));

        } else {
            $end_date = date('Y-m-d', strtotime('+' . $duration . ' month', $start_date));

        }
        echo json_encode($end_date);

    }

    function batchStatusChange()
    {
        $batch_id = getPost('id');


        $this->db->select('status');
        $this->db->where('id', $batch_id);
        $status = $this->db->get('batch')->row()->status;
        if ($status == 0) {
            $data = array(
                'status' => 1
            );
        } else {
            $data = array(
                'status' => 0
            );
        }
        $this->db->where('id', $batch_id);
        $this->db->update('batch', $data);
        if ($this->db->affected_rows() > 0) {
            echo true;
        } else {
            echo false;
        }


    }

    function batchDetail($id)
    {
        $data['title']   = 'Batch Detail';
        $data['content'] = 'batches/batchDetail';
        $data['detail']  = $this->batches_model->getBatchByID($id);
        echo Modules::run('template/layout', $data);
    }

    function printDetail($batchID)
    {
        $data['detail']=$this->batches_model->getBatchByID($batchID);
        $data['setting'] = $this->setting_model->get_app_setting();
        $this->load->view('print_detail',$data);
    }


}
