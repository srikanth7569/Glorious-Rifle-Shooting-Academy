<?php


class Login extends MX_Controller
{


    public function __construct()
    {
        parent::__construct();

    }

    function index()
    {
        echo Modules::run('template/login');
    }
}
