<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validations extends CI_Controller {

    public $pageData = array();

    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form","url"));
        $this->load->library('form_validation');
    }

    public function index(){
        
        if($this->input->post()){
         $this->validation_rules();
            if ($this->form_validation->run() == FALSE){
                $this->pageData["from_status"] = "Form successfully validated";
            }
        }
        $this->pageData["title"] = "CI form validations";
        $this->load->view("form_validation",$this->pageData);
    }

    /**
     * set from validation rules
     *
     * @method validation_rules
     */
    private function validation_rules(){
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('day', 'Day', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('privacy', 'Terms and conditions', 'required');
    }
} 
