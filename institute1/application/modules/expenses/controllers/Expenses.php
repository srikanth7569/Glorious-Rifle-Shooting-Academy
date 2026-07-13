<?php


/**
 * @property Expenses_model expenses_model
 * @property Master_model master_model
 */
class Expenses extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogIn')) {
            redirect('login');
        }
        $this->permission->module('expenses')->redirect();
        $this->load->model(array('expenses_model', 'master/master_model'));
    }

    function index()
    {
        $data['title']    = "Expenses";
        $data['content']  = "expenses/expense_list";
        $data['expenses'] = $this->expenses_model->getExpenses();
        echo Modules::run('template/layout', $data);
    }

    function addExpense()
    {
        if ($this->input->post()) {

            $id = getPost('id');
            if ($id) {
                //update
                if ($this->expenses_model->updateExpense($id)) {
                    $this->session->set_flashdata('success', 'Expense Updated Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }


            } else {
                //create

                if ($this->expenses_model->createExpense()) {
                    $this->session->set_flashdata('success', 'Expense Created Successfully');
                } else {
                    $this->session->set_flashdata('error', 'Some Error Occurred');
                }

            }

            redirect('expenses/addExpense', 'refresh');


        } else {
            $data['title']              = "Add Expense";
            $data['content']            = "expenses/add_expense";
            $data['expense_categories'] = $this->master_model->getExpenseCategories();
            echo Modules::run('template/layout', $data);
        }
    }

    function editExpense($id)
    {
        $data['title']              = "Edit Expense";
        $data['content']            = "expenses/add_expense";
        $data['expense_categories'] = $this->master_model->getExpenseCategories();
        $data['expenseDetail']      = $this->expenses_model->getExpenseByID($id);
        echo Modules::run('template/layout', $data);
    }

    function deleteExpense($id)
    {
        if ($this->expenses_model->deleteExpense($id)) {
            echo true;
        } else {
            echo false;
        }
    }

}
