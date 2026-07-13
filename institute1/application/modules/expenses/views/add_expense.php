<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Expense Form</h4>
                <div class="card-header-action">
                    <a href="expenses" class="btn active">Expense List</a>
                </div>
            </div>
            <div class="card-body">
                <form action="expenses/addExpense" method="post" class="needs-validation" novalidate="">
                    <input type="hidden" name="id" value="<?php if (!empty($expenseDetail)) {
                        echo $expenseDetail->id;
                    } ?>">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Expense Date</label>
                                <input required name="date" value="<?php if (!empty($expenseDetail)) {
                                    echo $expenseDetail->date;
                                } ?>" type="text" class="form-control datepicker">
                            </div>
                            <div class="invalid-feedback">
                                Please fill expense date
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Expense Title</label>
                                <input required type="text" value="<?php if (!empty($expenseDetail)) {
                                    echo $expenseDetail->title;
                                } ?>" name="title" class="form-control" placeholder="Expense Title">
                                <div class="invalid-feedback">
                                    Please fill expense title
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Expense Category</label>
                                <select required name="expense_category" class="form-control select2">
                                    <option value="">Select Expense Category</option>
                                    <?php if (!empty($expense_categories)) {
                                        foreach ($expense_categories as $item) { ?>
                                            <option <?php if (!empty($expenseDetail)) {
                                                if ($expenseDetail->expense_category == $item->id) echo ' selected ';
                                            } ?> value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
                                        <?php }
                                    } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select expense category
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Amount</label>
                                <input required name="amount" value="<?php if (!empty($expenseDetail)) {
                                    echo $expenseDetail->amount;
                                } ?>" type="number" class="form-control" placeholder="Amount">
                                <div class="invalid-feedback">
                                    Please fill in amount
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"
                                  placeholder="Description"><?php if (!empty($expenseDetail)) {
                                echo $expenseDetail->description;
                            } ?></textarea>
                    </div>
                    <div class="">
                        <button class="btn  btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
