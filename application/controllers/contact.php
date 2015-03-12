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
	$this->load->helper('form');
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
     * Display Contact page.
     */
    public function index() {
	$this->load->helper('form');
	//populate from post
	$comment = $this->input->post('name');
	$description = $this->input->post('comment');

	// validation
	$this->load->library('form_validation');
	$this->form_validation->set_rules(array(
	    array(
		'field' => 'name',
		'label' => 'Name',
		'rules' => 'required',
	    ),
	    array(
		'field' => 'comment',
		'label' => 'Comment',
		'rules' => 'required',
	    ),
	));

	$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
	//if doesn't validate
	if (!$this->form_validation->run()) {
	    $this->load->view('pages/contact');
	} else {//if validates
	    if ($this->_send_email()) {
		$this->session->set_flashdata('success', 'Thank you for contacting us. We will be in touch shortly.');
		redirect("/site", 'refresh');
	    } else {
		show_error($this->email->print_debugger());
	    }
	}
    }

    /*
     * Send the email.
     */
    private function _send_email() {
	$admin_email = "richjavalabs@gmail.com";
	$config = Array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.googlemail.com',
	    'smtp_port' => 465,
	    'smtp_auth' => true,
	    'smtp_user' => $admin_email,
	    'smtp_pass' => 'xxxx',
	    'mailtype' => 'html',
	    'charset' => 'iso-8859-1'
	);
	$this->load->library('email', $config);
	$this->email->set_newline("\r\n");
	$this->email->from($this->input->post('email'), $this->input->post('name'));
	$this->email->to($admin_email);
	$this->email->subject("Inquiry ".date('Y-m-d H:i:s'));
	$this->email->message($this->input->post('comment'));
	
	//send email
	if ($this->email->send()) {
	    return true;
	} else {
	    //development only, change if used in production
	    show_error($this->email->print_debugger());
	}
    }

}
