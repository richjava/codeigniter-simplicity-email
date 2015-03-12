<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Controller {

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
        $this->load->view('pages/home');
    }
}
