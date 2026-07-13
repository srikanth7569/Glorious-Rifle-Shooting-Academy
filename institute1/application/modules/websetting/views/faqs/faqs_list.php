<div class="row">
    <div class="col-4">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add FAQ</h5>
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data"
                      class="needs-validation" novalidate="">

                    <input type="hidden" name="id">

                    <div class="form-group">
                        <label>Question?</label>
                        <div class="input-group">
                            <textarea autocomplete="off" required name="question" type="text" class="form-control"
                                      placeholder="Question ?"></textarea>
                            <div class="invalid-feedback">
                                Please fill question
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Answer</label>
                        <div class="input-group">
                            <textarea autocomplete="off" required name="answer" type="text" class="form-control"
                                      placeholder="Answer"></textarea>
                            <div class="invalid-feedback">
                                Please fill question
                            </div>
                        </div>
                    </div>


                    <!-- /.form group -->
                    <div class="text-right">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>

                </form>


            </div>
        </div>


    </div>
    <div class="col-8">


        <div class="card">
            <div class="card-header">
                <h4>FAQs List</h4>
            </div>
            <div class="card-body">
                <div id="accordion">


                    <?php if (!empty($faqs)) {
                        $i = 0;
                        foreach ($faqs as $item) {
                            $i++; ?>

                            <div class="accordion">
                                <div class="accordion-header collapsed" role="button" data-toggle="collapse"
                                     data-target="#panel-body-<?php echo $item->id ?>" aria-expanded="false">
                                    <h4><?php echo $item->question ?></h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-<?php echo $item->id ?>"
                                     data-parent="#accordion"
                                     style="">
                                    <p class="mb-0">
                                        <?php echo $item->answer ?>
                                    </p>
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn sm"
                                                onclick="getFaqByID('<?php echo $item->id ?>')">
                                            <span class="far fa-edit"></span>
                                        </button>
                                        <button class="btn btn-sm"
                                                onclick="deleteFaq('<?php echo $item->id ?>')">
                                            <span class="far fa-trash-alt"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        <?php }
                    } ?>


                </div>
            </div>
        </div>


    </div>
</div>
<script>
    function getFaqByID(id) {

        $.ajax({
            url: 'websetting/faqs/getFaqByID/' + id,
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $("[name='id']").val(obj.id);
                $("[name='question']").val(obj.question);
                $("[name='answer']").val(obj.answer);
            }
        })


    }

    function deleteFaq(id) {
        $.ajax({
            url: 'websetting/faqs/deleteFaq/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'websetting/faqs';
                } else {
                    // alert("")
                }

            }
        })

    }
</script>

