<?php

class Delete extends CI_Controller {

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
    	$this->load->model('The_model');

    }

       public function nim($nim)
       {           

            $this->load->helper('url');

            $data['nim'] = $nim;   
            $this->The_model->delete_entry($nim);    
            $this->load->view('header');
            $this->load->view('deletesuccess', $data);
            $this->load->view('footer');
        }
}
?>