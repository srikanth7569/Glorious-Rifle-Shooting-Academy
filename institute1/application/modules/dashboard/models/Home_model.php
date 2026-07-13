<?php


class Home_model extends CI_Model
{
    function getDashboard()
    {
        $data      = array();
        $from_date = date('Y-m-01');
        $to_date   = date('Y-m-t');

        //get monthly fee collection
        $this->db->select_sum('amount');
        $this->db->where("date between '$from_date' and '$to_date'");
        $data['monthlyFeeCollection'] = round($this->db->get('fee')->row()->amount);

        //last month fee collection
        $from_date1 = date('Y-m-01', strtotime('-1 month'));
        $to_date1   = date('Y-m-t', strtotime('-1 month'));
        $this->db->select_sum('amount');
        $this->db->where("date between '$from_date1' and '$to_date1'");
        $data['lastMonthFeeCollection'] = round($this->db->get('fee')->row()->amount);


        //get monthly expenses
        $this->db->select_sum('amount');
        $this->db->where("date between '$from_date' and '$to_date'");
        $data['monthlyExpenses'] = round($this->db->get('expense')->row()->amount);


        //last month expenses
        $this->db->select_sum('amount');
        $this->db->where("date between '$from_date1' and '$to_date1'");
        $data['lasMonthExpenses'] = round($this->db->get('expense')->row()->amount);


        //get total no of batches

        $data['batches'] = $this->db->count_all_results('batch');

        //get total no of students
        $data['students'] = $this->db->count_all('student');

        //last month student enroll

        $this->db->where("DATE_FORMAT(created_at,'%Y-%m-%d') between '$from_date1' and '$to_date1'");
        $data['lastMonthStudentEnroll'] = $this->db->count_all_results('student');


        //get total no of faculties
        $data['faculties'] = $this->db->count_all('faculty');

        //get total no of enquiries
        $data['enquiries'] = $this->db->count_all('enquiry');

        $data['revenue_chart'] = $this->getRevenueGraphData();

        $data['bar_chart'] = $this->getBarChart();


        $data['earning_report'] = $this->getEarningReport();

        $data['batchEarning'] = $this->getBatchEarning();

        return $data;
    }

    function getRevenueGraphData()
    {

        $data = array();

        $from_date = date('Y-m-01', strtotime('-5 month'));
        for ($i = 1; $i <= 6; $i++) {
            $from = $from_date;
            $to   = date('Y-m-t', strtotime($from));

            $this->db->select_sum('amount');
            $this->db->where("date between '$from' and '$to'");
            $expenses = round($this->db->get('expense')->row()->amount);

            $this->db->select_sum('amount');
            $this->db->where("date between '$from' and '$to'");
            $income = round($this->db->get('fee')->row()->amount);

            $temp   = (object)array(
                'month'   => date('F', strtotime($from)),
                'expense' => $expenses,
                'income'  => $income
            );
            $data[] = $temp;


            $from_date = date('Y-m-01', strtotime('+1 month', strtotime($from_date)));
        }
        return $data;

    }

    function getBarChart()
    {

        $current_month = date('m');
        $current_year  = date('Y');

        $fees = array();

        $expenses = array();

        for ($i = 1; $i <= 31; $i++) {

            if ($i < 10) {
                $j = '0' . $i;
            } else {
                $j = $i;
            }

            $this->db->select_sum('amount', 'feeCollected');
            $this->db->where('date', $current_year . '-' . $current_month . '-' . $j);
            $fees[$j] = round($this->db->get('fee')->row()->feeCollected);


            $this->db->select_sum('amount', 'totalExpense');
            $this->db->where('date', $current_year . '-' . $current_month . '-' . $j);
            $expenses[$j] = round($this->db->get('expense')->row()->totalExpense);

        }

        $data = new stdClass();

        $data->fees     = $fees;
        $data->expenses = $expenses;
        return $data;


    }

    function getEarningReport()
    {


        $start_date = date('Y-01-01');
        $end_date   = date('Y-m-d');

        $data = new stdClass();

        $this->db->select_sum('amount', 'earnings');
        $this->db->where("date between '$start_date' and '$end_date'");
        $data->totalEarnings = $this->db->get('fee')->row()->earnings;


        $start_date = date('Y-m-01');
        $end_date   = date('Y-m-t');

        $this->db->select_sum('amount', 'earnings');
        $this->db->where("date between '$start_date' and '$end_date'");
        $data->thisMonth = $this->db->get('fee')->row()->earnings;


        $start_date = date('Y-m-01', strtotime('-1 month'));
        $end_date   = date('Y-m-t', strtotime('-1 month'));

        $this->db->select_sum('amount', 'earnings');
        $this->db->where("date between '$start_date' and '$end_date'");
        $data->lastMonth = $this->db->get('fee')->row()->earnings;


        return $data;

    }

    function getBatchEarning()
    {


        $this->db->select_sum('fee.amount', 'totalCollectedFees');
        $this->db->select('fee.batchID');
        $this->db->select('batch.title,batch.start_date,batch.end_date');

        $this->db->select('courses.title as courseTitle');

        $this->db->join('batch', 'batch.id=fee.batchID', 'left');

        $this->db->join('courses', 'courses.id=fee.batchID', 'left');

        $this->db->group_by('fee.batchID');
        $data = $this->db->get('fee')->result();

        foreach ($data as $item) {

            $this->db->select('count(*) as totalStudents');
            $this->db->select_sum('student_agreed_fee', 'totalPayableFees');
            $this->db->where('batchID', $item->batchID);
            $temp                   = $this->db->get('student')->row();
            $item->totalStudents    = $temp->totalStudents;
            $item->totalPayableFees = $temp->totalPayableFees;
        }


        return $data;


    }


}
