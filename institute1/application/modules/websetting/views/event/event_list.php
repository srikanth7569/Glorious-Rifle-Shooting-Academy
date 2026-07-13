<style>
    .show-read-more .more-text{
        display: none;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Event List</h4>
                <div class="card-header-action">
                    <a href="websetting/event/addEvent" class="btn active">Add Event</a>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($events)) {
                            $i = 0;
                            foreach ($events as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $item->title ?></td>
                                    <td>
                                        <div class="limit3">
                                            <?php echo $item->description ?>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <a href="websetting/event/editEvent/<?php echo $item->id ?>"
                                               class="btn btn sm">
                                                <span class="far fa-edit"></span>
                                            </a>
                                            <button class="btn btn-sm"
                                                    onclick="onChangeStatus('<?php echo $item->id ?>')">
                                                <span class=" <?php echo $item->status == 1 ? 'far fa-thumbs-up' : 'far fa-thumbs-down' ?> "></span>
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
</div>
<script>
    function getEventByID(id) {

        $.ajax({
            url: 'websetting/event/getEventByID/' + id,
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $("[name='id']").val(obj.id);
                $("[name='title']").val(obj.title);
                // $("[name='description']").val(obj.description);
                $("[name='date']").val(obj.date);
                $("[name='start_time']").val(obj.start_time);
                $("[name='end_time']").val(obj.end_time);
                $("[name='location']").val(obj.location);
                $("[name='total_slots']").val(obj.total_slots);
                $("[name='cost']").val(obj.cost);
                $("[name='old_image']").val(obj.img);
                $("[name='image']").attr('required', false);

                CKEDITOR.instances.ckeditor.setData(obj.description);


            }
        });


    }

    function onChangeStatus(id) {

        $.ajax({
            url: 'websetting/slider/sliderStatusChange',
            type: 'post',
            data: {
                id: id
            },
            success: function (data) {
                if (data) {
                    window.location = 'websetting/slider';
                } else {
                    show_toaster('Some Error Occurred', false);
                }

            }
        })

    }
</script>


<script>
    $(document).ready(function(){
        var maxLength = 300;
        $(".show-read-more").each(function(){
            var myStr = $(this).text();
            if($.trim(myStr).length > maxLength){
                var newStr = myStr.substring(0, maxLength);
                var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
                $(this).empty().html(newStr);
                $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
                $(this).append('<span class="more-text">' + removedStr + '</span>');
            }
        });
        $(".read-more").click(function(){
            $(this).siblings(".more-text").contents().unwrap();
            $(this).remove();
        });
    });
</script>

