<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->helper('url');

        $this->_init();
    }

    /**
     * Initiate the controller.
     */
    private function _init() {
        $this->output->set_template('default');

        //jquery
        $this->load->js('assets/themes/default/js/jquery-1.9.1.min.js');
        $this->load->js('assets/themes/default/js/jquery-ui-1.8.16.custom.min.js');

        //bootstrap
        $this->load->js('assets/themes/default/js/bootstrap-transition.js');
        $this->load->js('assets/themes/default/js/bootstrap-collapse.js');

        //custom
        $this->load->js('assets/themes/default/js/script.js');
    }

    /**
     * Static home page
     */
    public function index() {
        $this->load->view('pages/contact');
    }

    public function send() {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_auth' => true,
            'smtp_user' => 'cruisytaiwan@gmail.com',
            'smtp_pass' => 'xxxx',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
        $this->load->library('email', $config); 
        $this->email->set_newline("\r\n");
        $this->email->from("richjavalabs@gmail.com", "Richard Lovell");
        $this->email->to("richjavalabs@gmail.com");
        $this->email->subject("Test email");
        $this->email->message("This is a test");
        //$path = $this->config->item("server_root");

        if ($this->email->send()) {
            echo "Email sent!";
        } else {
            show_error($this->email->print_debugger());
        }
    }

}
