<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Expense List</h4>
                <div class="card-header-action">

                    <form class="form-inline">
                        <label class="sr-only" for="from_date">From Date</label>

                        <input type="text" class="form-control mb-2 mr-sm-2 datepicker" id="from_date"
                               placeholder="From Date">

                        <label class="sr-only" for="to_date">To Date</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 datepicker" id="to_date"
                               placeholder="To Date">

                        <button type="button" onclick="getExpenseReport()" class="btn btn-sm btn-primary">Search
                        </button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive" id="expense_tbl">
                    <?php $this->load->view('expense_table') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function deleteExpense(id) {
        $.ajax({
            url: 'expenses/deleteExpense/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'expenses';
                } else {
                    // alert("")
                }

            }
        })

    }

    function getExpenseReport() {
        let from_date = $('#from_date').val();
        let to_date = $('#to_date').val();

        $.ajax({
            url: 'reports/getExpenseReport',
            type: 'post',
            data: {
                from_date: from_date,
                to_date: to_date
            },
            success: function (data) {
                $('#expense_tbl').html(data);
                $('#save-stage').DataTable({
                    "scrollX": true,
                    stateSave: true
                });
            }

        })

    }

    $(document).ready(function () {
        getExpenseReport();
    })


</script>
