<?php

class Table extends CI_Controller {
	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
    	$this->load->model('The_model');

    }
	
    public function index()
    {
    	$data['query'] = $this->The_model->selecting_data();
    	$this->load->view('header');
        $this->load->view('Table2', $data);
    	$this->load->view('footer');
    }

    public function post()
    {
    	if ($this->input->post()) {
	    	$this->load->library('form_validation');
	        $this->form_validation->set_rules('name','Name','trim|required|min_length[5]');
	        $this->form_validation->set_rules('nim','NIM','trim|required|exact_length[9]');
	        $this->form_validation->set_rules('gender','Gender','required');
	        $this->form_validation->set_rules('place','Place','required');
	        $this->form_validation->set_rules('alamat','Address','required');
	        $this->form_validation->set_rules('date','Date','required');
	        $this->form_validation->set_rules('goldar','Goldar','required');
	        $this->form_validation->set_rules('prodi','Prodi','required');
	        $this->form_validation->set_rules('angkatan','Angkatan','required|exact_length[4]');
	        if($this->form_validation->run() == FALSE)
	    	{
	    		$this->load->view('header');
		        $this->load->view('myform2');
		    	$this->load->view('footer');
	    	}
	    	else
	    	{
	    		$this->The_model->insert_entry();
	    		$this->load->view('header');
	    		$this->load->view('formsuccess');
	    		$this->load->view('footer');
	    	}
	    } 
	    else
	    {
	    	$this->load->view('header');
	        $this->load->view('myform2');
	    	$this->load->view('footer');
	    }           
    }
}