<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Fee Form</h4>
            </div>
            <div class="card-body">
                <form action="fee/collectFee" method="post" class="needs-validation" novalidate="">
                    <input type="hidden" name="id" value="<?php if (!empty($feeDetail)) {
                        echo $feeDetail->id;
                    } ?>">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Receipt No.</label>
                                <input readonly required type="text" value="<?php if (!empty($receiptNo)) {
                                    echo $receiptNo;
                                } ?>" name="receiptNo" class="form-control" placeholder="Receipt No.">
                                <div class="invalid-feedback">
                                    Please fill expense title
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fee Date</label>
                                <input required name="date" value="<?php if (!empty($expenseDetail)) {
                                    echo $expenseDetail->date;
                                } ?>" type="text" class="form-control datepicker">
                            </div>
                            <div class="invalid-feedback">
                                Please fill expense date
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Batch</label>
                                <select required name="batchID" class="form-control select2">
                                    <option value="<?php echo $feeDetail->batchID ?>"><?php echo $feeDetail->batchTitle ?></option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select expense category
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="due_fee" value="<?php if (!empty($feeDetail)) {
                            echo $feeDetail->remainingFee;
                        } ?>">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Amount</label>
                                <input onkeyup="checkFee()" required id="amount" name="amount"
                                       value="<?php if (!empty($feeDetail)) {
                                           echo $feeDetail->remainingFee;
                                       } ?>" type="number" class="form-control" placeholder="Amount">
                                <div class="invalid-feedback">
                                    Please fill in amount
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Remarks</label>
                        <textarea name="description" class="form-control"
                                  placeholder="Remarks"><?php if (!empty($expenseDetail)) {
                                echo $expenseDetail->description;
                            } ?></textarea>
                    </div>
                    <div class="">
                        <button id="btn_submit" class="btn  btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function checkFee() {
        let due_fee = $('#due_fee').val();
        let amount = $('#amount').val();

        if (parseFloat(amount) > parseFloat(due_fee)) {
            $('#btn_submit').prop('disabled', true);
        } else {
            $('#btn_submit').prop('disabled', false);
        }
    }
</script>
