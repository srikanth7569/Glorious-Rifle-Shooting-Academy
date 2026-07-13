<?php


class Template extends MX_Controller
{


    function layout($data = null)
    {
        $this->load->view('layout', $data);
    }

    function web($data = null)
    {
        $this->load->view('web', $data);
    }

    function login($data = null)
    {
        $this->load->view('login1', $data);
    }

    function register($data = null)
    {
        $this->load->view('register', $data);
    }

}
