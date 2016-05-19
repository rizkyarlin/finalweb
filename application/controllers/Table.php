<?php

class Table extends CI_Controller {

        public function index()
        {
        	$this->load->model('The_model');

        	$this->load->helper('url');

        	$data['query'] = $this->The_model->selecting_data();

            $this->load->view('Table', $data);
        }
}