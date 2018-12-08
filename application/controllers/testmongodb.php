<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testmongodb extends CI_Controller {
	public function __construct()
	{
	   parent::__construct();
	    $this->load->model('testmongodb_model');
	    //helpers
	   $this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('testmongodb/mongodb_view');
	}

	public function insert_record()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data = $this->input->post();
		if(!empty($data))
		  {
			  print_r($data);
			  $this->testmongodb_model->insert_article($data);
		  }
		  $this->load->view('testmongodb/insert_article');	
	}


}
?>