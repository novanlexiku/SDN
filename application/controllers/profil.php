<?php

class profil extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('profil_model');
  }
  function index(){
       $x = array (
      'guru' => $this->profil_model->get_guru(),
      'siswa' => $this->profil_model->get_siswa(),
      'ranking7a' => $this->profil_model->get_ranking7a(),
      'ranking8a' => $this->profil_model->get_ranking8a(),
      'ranking9a' => $this->profil_model->get_ranking9a(),
    
  ); 
    
      $title = array(
      'title' => 'Profil' 
    );
    $this->load->view('cover/header', $title);
    $this->load->view('profil/profil_view',$x);
  }

  

}