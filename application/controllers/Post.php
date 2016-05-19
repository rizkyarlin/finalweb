<?php

class Post extends CI_Controller {

        public function index()
        {
                $this->load->model('The_model');

                $this->The_model->insert_entry();

                $this->load->helper('url');

                $this->load->view('formsuccess');
        }
}
?>