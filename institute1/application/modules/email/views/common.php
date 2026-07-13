<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="card">
        <div class="body">
            <div id="mail-nav">
                <button onclick="compose()" type="button" class="btn btn-danger waves-effect btn-compose m-b-15">
                    COMPOSE
                </button>
                <ul class="" id="mail-folders">
                    <li class="<?php if ($this->uri->segment(2) == 'inbox') echo ' active ' ?>">
                        <a href="email/inbox" title="Inbox">Inbox
                            (<?php echo $this->email_model->countMessages(1) ?>)
                        </a>
                    </li>
                    <li class="<?php if ($this->uri->segment(2) == 'sent') echo ' active ' ?>">
                        <a href="email/sent" title="Sent">Sent
                            (<?php echo $this->email_model->countMessages(2) ?>)
                        </a>
                    </li>
                    <li class="<?php if ($this->uri->segment(2) == 'subscribers') echo ' active ' ?>">
                        <a href="email/subscribers" title="Subscribers">Subscriber
                            (<?php echo $this->email_model->countSubscribers() ?>)
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script>

    function compose() {
        window.location = 'email/compose';
    }

</script>
