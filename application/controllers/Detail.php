<?php

class Detail extends CI_Controller {

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
            $this->load->model('The_model');

            $this->load->helper('url');

            $data['query'] = $this->The_model->selecting_data();
            $this->load->view('header');
            $this->load->view('detail', $data);
            $this->load->view('footer');
        }
}
?>