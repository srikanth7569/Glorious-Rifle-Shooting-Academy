<div class="col-sm-12 col-md-12  p-3 kt-portlet">


    <div class="row">


        <div class="col-md-6">
            <div class="dt-buttons btn-group btn-group-sm ">
                <button id="export_print" class="btn btn-outline-secondary buttons-print" tabindex="0"
                        aria-controls="completed_order_table" type="button" title="Print"><span><span
                            class="la la-print"></span></span></button>
                <button id="export_copy" class="btn btn-outline-secondary buttons-copy buttons-html5" tabindex="0"
                        aria-controls="completed_order_table" type="button" title="Copy to clipboard"><span><span
                            class="la la-copy"></span></span></button>
                <button id="export_excel" class="btn btn-outline-secondary buttons-excel buttons-html5" tabindex="0"
                        aria-controls="completed_order_table" type="button" title="Export To excel file"><span><span
                            class="la la-file-excel-o"></span></span></button>
                <button id="export_csv" class="btn btn-outline-secondary buttons-csv buttons-html5" tabindex="0"
                        aria-controls="completed_order_table" type="button" title="Export To CSV file"><span><span
                            class="la la-file-text-o"></span></span></button>
                <button id="export_pdf" class="btn btn-outline-secondary buttons-pdf buttons-html5" tabindex="0"
                        aria-controls="completed_order_table" type="button" title="Export To PDF file"><span><span
                            class="la la-file-pdf-o"></span></span></button>
                <input type="text" class="form-control form-control-sm" id="dtSearchBox" placeholder="Search...">
            </div>


        </div>
        <div class="col-md-6">
            <form action="" class="form-inline pull-right">
                <div class="form-group">
                    <label class="mr-1" for="from_date"><?php echo "Start Date" ?></label>
                    <input type="text" readonly name="from_date" value="<?php echo date('d-m-Y') ?>"
                           class="form-control form-control-sm datepicker mr-2" id="from_date">
                </div>

                <div class="form-group">
                    <label class="mr-2" for="to_date"><?php echo "End Date" ?></label>
                    <input type="text" readonly name="to_date" class="form-control form-control-sm datepicker mr-2"
                           id="to_date"
                           placeholder="<?php echo "To"; ?>" value="<?php echo date('d-m-Y') ?>">
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary"
                        onclick="get_logs_report()"><?php echo "Search" ?></button>

            </form>

        </div>


    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12" id="listreport">
            <?php $this->load->view('logs/logs_tbl') ?>
        </div>
    </div>
</div>

<script>

    function get_logs_report() {

        let from_date=$('#from_date').val();
        let to_date=$('#to_date').val();

        $.ajax({

            url:"logs/get_logs_by_date",
            type:'post',
            data:{
                'from_date':from_date,
                'to_date':to_date
            },
            beforeSend:function(){
              load_loader();
            },
            success:function (data) {
                $('#listreport').html(data);
            },
            complete:function () {
                unblock_page();
            }

        })

    }

</script>

<?php //$this->load->view('ordermanage/modal'); ?>
<?php //$this->load->view('js/completed_order_js'); ?>
