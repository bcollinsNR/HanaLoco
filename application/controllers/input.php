<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Input extends CI_Controller {
	public function __construct()
    {
    	parent::__construct();
    	$this->load->database();
   	}
	public function index()
	{
		$this->load->view('input');
	}
	public function post()
	{
		$this->load->view('thanks');
		$this->load->helper('form');  
		$this->load->helper('html');  	
		$this->load->model('google_maps_model');
		if($this->input->post('post'))
		{
			$this->google_maps_model->post();
			
		}	
		$data = $this->google_maps_model->post();
	}
}