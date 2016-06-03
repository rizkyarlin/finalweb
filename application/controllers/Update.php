<?php

class Update extends CI_Controller {
	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
    	$this->load->model('The_model');

    }
	

    public function nim($nim){
        $data['query'] = $this->The_model->getDetail($nim);
        $data['kondisi'] = "normal";
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name','Name','trim|required|min_length[5]');
            $this->form_validation->set_rules('nim','NIM','trim|required|exact_length[9]');
            $this->form_validation->set_rules('gender','Gender','required');
            $this->form_validation->set_rules('place','Place','required');
            $this->form_validation->set_rules('date','Date','required');
            $this->form_validation->set_rules('goldar','Goldar','required');
            $this->form_validation->set_rules('prodi','Prodi','required');
            $this->form_validation->set_rules('angkatan','Angkatan','required|exact_length[4]');
            if($this->form_validation->run() == FALSE)
            {
                $data['kondisi'] = "error validasi";
                $this->load->view('header');
                $this->load->view('update', $data);
                $this->load->view('footer');
            }
            else
            {   
                $this->The_model->update_entry($nim);             
                $this->load->view('header');
                $this->load->view('updatesuccess');
                $this->load->view('footer');
            }
        } 
        else
        {   
            $data['kondisi'] = "normal";         
            $this->load->view('header');
            $this->load->view('update', $data);
            $this->load->view('footer');
        }   
    }        
}
        