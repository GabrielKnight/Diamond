<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Main Controller. Global Initializing

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//TODO Application interface language
		//TODO Environment props, cookies
		$this->load->model('modMain');
		
		//Load Template Parser library
		//$this->load->library('parser');
		
	}
       
	public function index()
	{	$params['params'] = $this->modMain->getTemplate();
		$this->load->view('template', $params);
	}
}
