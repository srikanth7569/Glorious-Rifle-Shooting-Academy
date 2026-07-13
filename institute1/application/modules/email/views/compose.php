<div class="row">

    <?php $this->load->view('common'); ?>

    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="card">
            <div class="boxs mail_listing">
                <div class="inbox-center table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th colspan="1">
                                <div class="inbox-header">
                                    Compose New Message
                                </div>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>


                <div class="row">
                    <div class="col-lg-12">


                        <form action="email/send_email" method="post" class="composeForm">
                            <div class="form-group">
                                <div class="form-line">
                                    <input required type="text" value="<?php if (!empty($detail)) {
                                        echo $detail->email;
                                    } ?>" id="email_address" name="to_email" class="form-control" placeholder="TO">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input required value="<?php if (!empty($detail)) {
                                        echo $detail->subject;
                                    } ?>" type="text" id="subject" name="subject"
                                           class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <textarea name="message" required id="ckeditor">
                            	</textarea>
                            <div class="compose-editor m-t-20">
                                <div id="summernote"></div>
                                <input type="file" class="default" multiple>
                            </div>

                            <div class="mt-3 m-b-20">
                                <button type="submit" class="btn btn-info btn-border-radius waves-effect">Send</button>
                                <button type="button" class="btn btn-danger btn-border-radius waves-effect">Discard</button>
                            </div>

                        </form>


                    </div>
<!--                    <div class="col-lg-12">-->
<!--                        <div class="m-l-25 m-b-20">-->
<!--                            <button type="submit" class="btn btn-info btn-border-radius waves-effect">Send</button>-->
<!--                            <button type="button" class="btn btn-danger btn-border-radius waves-effect">Discard</button>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>



            </div>
        </div>
    </div>
</div>
