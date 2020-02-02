<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Main extends My_Controller {

		protected $access = array('1', '2','3');
		function __construct(){
			parent::__construct();
			$this->load->library('datatables');
			$this->load->model('Main_model');
		}
		public function index()
		{

			$title = array(
				'title' => 'SD Negeri Plempukan' ,
			);
			$x = array (
	      'Total_pegawai' => $this->Main_model->get_totalpegawai(),
				'Total_siswa' => $this->Main_model->get_totalsiswa(),
				'Total_kelas' => $this->Main_model->get_totalkelas(),
				'Total_mapel' => $this->Main_model->get_totalmapel()

	  );
			$this->load->view('cover/header', $title);
			$this->load->view('index',$x);

		}

	}

	/* End of file Main.php */
	/* Location: ./application/controllers/Main.php */
