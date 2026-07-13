<?php


class Expenses_model extends CI_Model
{

    function createExpense()
    {
        $data = array(
            'date'             => getPost('date'),
            'title'            => getPost('title'),
            'expense_category' => getPost('expense_category'),
            'amount'           => getPost('amount'),
            'description'      => getPost('description'),

        );
        $this->db->insert('expense', $data);
        if ($this->db->insert_id()) {
            return true;
        }
        return false;
    }

    function updateExpense($id)
    {
        $data = array(
            'date'             => getPost('date'),
            'title'            => getPost('title'),
            'expense_category' => getPost('expense_category'),
            'amount'           => getPost('amount'),
            'description'      => getPost('description'),

        );
        $this->db->where('id', $id);
        $this->db->update('expense', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }

    function getExpenses()
    {
        $this->db->select('expense.*');
        $this->db->select('expense_category.name as expenseCategory');
        $this->db->join('expense_category', 'expense_category.id=expense.expense_category', 'left');
        return $this->db->get('expense')->result();
    }

    function getExpenseByID($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('expense')->row();
    }

    function deleteExpense($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('expense');
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        return false;
    }
}
