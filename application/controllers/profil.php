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
      'ranking1a' => $this->profil_model->get_ranking1a(),
      'ranking1b' => $this->profil_model->get_ranking1b(),
      'ranking1c' => $this->profil_model->get_ranking1c(),
      'ranking1d' => $this->profil_model->get_ranking1d(),
      'ranking1e' => $this->profil_model->get_ranking1e(),
      'ranking1f' => $this->profil_model->get_ranking1f(),
      'ranking1g' => $this->profil_model->get_ranking1g(),
      'ranking2a' => $this->profil_model->get_ranking2a(),
      'ranking2b' => $this->profil_model->get_ranking2b(),
      'ranking2c' => $this->profil_model->get_ranking2c(),
      'ranking2d' => $this->profil_model->get_ranking2d(),
      'ranking2e' => $this->profil_model->get_ranking2e(),
      'ranking2f' => $this->profil_model->get_ranking2f(),
      'ranking2g' => $this->profil_model->get_ranking2g(),
      'ranking3a' => $this->profil_model->get_ranking3a(),
      'ranking3b' => $this->profil_model->get_ranking3b(),
      'ranking3c' => $this->profil_model->get_ranking3c(),
      'ranking3d' => $this->profil_model->get_ranking3d(),
      'ranking3e' => $this->profil_model->get_ranking3e(),
      'ranking3f' => $this->profil_model->get_ranking3f(),
      'ranking3g' => $this->profil_model->get_ranking3g(),
      'ranking4a' => $this->profil_model->get_ranking4a(),
      'ranking4b' => $this->profil_model->get_ranking4b(),
      'ranking4c' => $this->profil_model->get_ranking4c(),
      'ranking4d' => $this->profil_model->get_ranking4d(),
      'ranking4e' => $this->profil_model->get_ranking4e(),
      'ranking4f' => $this->profil_model->get_ranking4f(),
      'ranking4g' => $this->profil_model->get_ranking4g(),
      'ranking5a' => $this->profil_model->get_ranking5a(),
      'ranking5b' => $this->profil_model->get_ranking5b(),
      'ranking5c' => $this->profil_model->get_ranking5c(),
      'ranking5d' => $this->profil_model->get_ranking5d(),
      'ranking5e' => $this->profil_model->get_ranking5e(),
      'ranking5f' => $this->profil_model->get_ranking5f(),
      'ranking5g' => $this->profil_model->get_ranking5g(),
      'ranking6a' => $this->profil_model->get_ranking6a(),
      'ranking6b' => $this->profil_model->get_ranking6b(),
      'ranking6c' => $this->profil_model->get_ranking6c(),
      'ranking6d' => $this->profil_model->get_ranking6d(),
      'ranking6e' => $this->profil_model->get_ranking6e(),
      'ranking6f' => $this->profil_model->get_ranking6f(),
      'ranking6g' => $this->profil_model->get_ranking6g(),

    
  ); 
    
      $title = array(
      'title' => 'Profil' 
    );
    $this->load->view('cover/header', $title);
    $this->load->view('profil/profil_view',$x);
  }

  

}