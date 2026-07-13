<div class="card">
    <div class="card-header">
        <h4>Collect Fee Form</h4>
    </div>
    <div class="card-body">
        <div class="form-inline">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <select onchange="getBatches()" style="width: 100%" name="courseID" class="form-control select2"
                                id="courseID">
                            <option value="">Select Course</option>
                            <?php if (!empty($courses)) {
                                foreach ($courses as $item) { ?>
                                    <option value="<?php echo $item->id ?>"><?php echo $item->title ?></option>
                                <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select onchange="getStudents()" style="width: 100%" name="batchID" class="form-control select2"
                                id="batchID">
                            <option value="">Select Batch</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input style="width: 100%;" type="text" class="form-control mb-2 mr-sm-2"
                               id="sname" onkeyup="getStudentsByName(event)"
                               placeholder="Search student by name">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="student_list"></div>


<script>
    function getBatches() {
        let courseID = $('#courseID').val();
        $.ajax({
            url: 'fee/getBatches/' + courseID,
            success: function (data) {
                // console.log(data);
                let res = "<option value=''>Select Batch</option>";
                let obj = jQuery.parseJSON(data);
                obj.forEach(x => {
                    res += "<option value='" + x.id + "'>" + x.title + "</option>"
                });
                $('#batchID').select2('destroy');
                $('#batchID').html(res);
                $('#batchID').select2();


            }
        })

    }

    function getStudents() {
        let batchID = $('#batchID').val();

        $.ajax({
            url: 'fee/getStudentsByBatchID/' + batchID,
            success: function (data) {
                $('#student_list').html(data);
            }
        })

    }

    function getStudentsByName(e) {

        if (e.which == 13) {
            e.preventDefault();
            let name = $('#sname').val();
            $.ajax({
                url: 'fee/getStudentsByName/' + name,
                success: function (data) {
                    $('#student_list').html(data);
                }

            });
        }

    }

    function printInvoice(id) {


        $(document).ready(function () {
            setTimeout(function () {
                let month = $('#monthID').val();
                let year = $('#year').val();
                window.open(
                    'fee/printInvoice/' + id,
                    '_blank'
                );
            }, 2000);
        });
    }


</script>

<?php

if ($this->session->flashdata('printInvoice')) {
    $sid = $this->session->flashdata('printInvoice');
//    echo "<script>alert($sid)</script>";
    echo "<script>printInvoice($sid)</script>";
}
?>
