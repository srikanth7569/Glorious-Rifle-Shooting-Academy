<div class="row">


    <?php $this->load->view('common') ?>

    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="card">
            <div class="boxs mail_listing">
                <div class="inbox-center table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">
                                <label class="form-check-label">
                                    <input type="checkbox">
                                    <span class="form-check-sign"></span>
                                </label>
                            </th>
                            <th colspan="3">
                                <?php $this->load->view('common_header') ?>
                            </th>


                            <th class="hidden-xs" colspan="2">
                                <div class="pull-right">
                                    <div class="email-btn-group m-l-15">
                                        <a href="javascript:void(0)" class="col-dark-gray waves-effect m-r-20"
                                           title="previous"
                                           data-toggle="tooltip">
                                            <i class="material-icons">navigate_before</i>
                                        </a>
                                        <a href="javascript:void(0)" class="col-dark-gray waves-effect m-r-20"
                                           title="next"
                                           data-toggle="tooltip">
                                            <i class="material-icons">navigate_next</i>
                                        </a>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($subscribers)) {
                            foreach ($subscribers as $item) { ?>

                                <tr class="unread">
                                    <td class="tbl-checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox">
                                            <span class="form-check-sign"></span>
                                        </label>
                                    </td>
                                    <td class="hidden-xs">
                                        <i class="material-icons">star_border</i>
                                    </td>
                                    <td class="hidden-xs"><?php echo $item->email ?></td>
                                </tr>

                            <?php }
                        } ?>


                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="p-15">Showing 1 - <?php echo sizeof($subscribers) ?>
                            of <?php echo sizeof($subscribers) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
