<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class landing extends My_Controller {

		function __construct(){
			parent::__construct();
			$this->load->library('datatables');
			$this->load->model('landing_model');
		}
		public function index()
		{

			$title = array(
				'title' => 'SD Negeri Plempukan' ,
			);

			$this->load->view('landing/landing',$title);

		}

	}
