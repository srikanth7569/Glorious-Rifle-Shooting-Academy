<div class="row">
    <div class="col-md-4">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Currency</h5>
            </div>
            <div class="card-body">

                <form action="setting/currency" method="post" enctype="multipart/form-data">


                    <input type="hidden" name="id">

                    <div class="form-group">
                        <label for="fee_type">Name</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="name" type="text" class="form-control"
                                   placeholder="Enter Currency Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fee_type">Code</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="code" type="text" class="form-control"
                                   placeholder="Enter Code">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fee_type">Symbol</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="symbol" type="text" class="form-control"
                                   placeholder="Enter Symbol">
                        </div>
                    </div>


                    <div class="text-right">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="card-title">Currency List</div>
            </div>
            <div class="card-body">
                <table id="save_stage" class="table table-sm table-borderless">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Symbol</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    if (!empty($currencyList)) {
                        foreach ($currencyList as $item) {
                            $i++; ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $item->name ?></td>
                                <td><?php echo $item->code ?></td>
                                <td><?php echo $item->symbol ?></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn sm" onclick="getCurrencyByID('<?php echo $item->id ?>')">
                                            <span class="fa fa-edit"></span>
                                        </button>
                                        <button class="btn btn-sm" onclick="deleteCurrency('<?php echo $item->id ?>')">
                                            <span class="fa fa-trash"></span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php }
                    } ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
<script>
    function getCurrencyByID(id) {

        $.ajax({
            url: 'setting/getCurrencyByID/' + id,
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $("[name='name']").val(obj.name);
                $("[name='code']").val(obj.code);
                $("[name='symbol']").val(obj.symbol);
                $("[name='id']").val(obj.id);
            }
        })


    }

    function deleteCurrency(id) {

        $.ajax({
            url: 'setting/deleteCurrency/' + id,
            success: function (data) {
                window.location = 'setting/currency';
            }
        })
    }
</script>
