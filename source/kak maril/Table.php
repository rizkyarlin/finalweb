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
	        $this->form_validation->set_rules('provinsi_tempatlahir','Born Place Province','required');
	        $this->form_validation->set_rules('kota_tempatlahir','Born Place City','required');
	        $this->form_validation->set_rules('place','Born Place','required');
	        $this->form_validation->set_rules('date','Born Date','required');
	        $this->form_validation->set_rules('goldar','Blood Type','required');
	        $this->form_validation->set_rules('prodi','Prodi','required');
	        $this->form_validation->set_rules('angkatan','Angkatan','required|exact_length[4]');

	        $this->form_validation->set_rules('periode','Periode','required');
			$this->form_validation->set_rules('notest','Test Number','required');
			$this->form_validation->set_rules('jalur','Way','required');
			$this->form_validation->set_rules('tgl_daftar','Registration Date','required');
			$this->form_validation->set_rules('gel_pendaftaran','Registration Wave','required');
			$this->form_validation->set_rules('status_masuk','Entrance State','required');
			
			$this->form_validation->set_rules('agama','Religion','required');
			$this->form_validation->set_rules('status_nikah','Wedding Status','required');
			$this->form_validation->set_rules('kewarganegaraan','kewarganegaraan','required');
			$this->form_validation->set_rules('status_rumah','status_rumah','required');
			$this->form_validation->set_rules('provinsi_tempattinggal','Province','required');
			$this->form_validation->set_rules('kota_tempattinggal','Kota','required');
	        $this->form_validation->set_rules('alamat','Address','required');
	        $this->form_validation->set_rules('kelurahan','Kelurahan','required');
	        $this->form_validation->set_rules('kecamatan','Kecamatan','required');
	        $this->form_validation->set_rules('kode_pos','Kode Pos','required');
	        $this->form_validation->set_rules('negara','Negara','required');
	        $this->form_validation->set_rules('no_telepon','No Telepon','required');
	        $this->form_validation->set_rules('email','Email','required');

	        $this->form_validation->set_rules('hubungan_biaya','Hubungan Biaya','required');
	        $this->form_validation->set_rules('sumber_dana','Sumber Dana','required');
	        $this->form_validation->set_rules('sumber_dana_beasiswa','Sumber Dana Beasiswa','required');
	        $this->form_validation->set_rules('jumlah_saudara','Jumlah Saudara','required');
	        $this->form_validation->set_rules('status_bekerja','Status Bekerja','required');
	        $this->form_validation->set_rules('no_asuransi','Nomor Asuransi','required');
	        $this->form_validation->set_rules('mengenal_kampus','Mengenal Kampus','required');



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