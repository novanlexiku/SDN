<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengajar extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('pengajar_model');
  }
  function index(){


    $title = array(
      'title' => 'Tabel pengajar' ,
    );
    $x = array (
      'Total_rows' => $this->pengajar_model->get_total(),
    'role'=>    $this->pengajar_model->get_role(),
    'mapel'=>    $this->pengajar_model->get_mapel()
  );
    $this->load->view('cover/header', $title);
    $this->load->view('pengajar/pengajar_view',$x);
  }

  function get_guru_json() { //data data guru by JSON object
    header('Content-Type: application/json');
    echo $this->pengajar_model->get_all_guru();
  }
  function get_mapel1_json() { //data mapel1 by JSON object
    header('Content-Type: application/json');
    echo $this->pengajar_model->get_all_mapel1();
  }
  function get_mapel2_json() { //data mapel2 by JSON object
    header('Content-Type: application/json');
    echo $this->pengajar_model->get_all_mapel2();
  }
  function get_mapel3_json() { //data mapel3 by JSON object
    header('Content-Type: application/json');
    echo $this->pengajar_model->get_all_mapel3();
  }
  function get_mapel4_json() { //data mapel4 by JSON object
    header('Content-Type: application/json');
    echo $this->pengajar_model->get_all_mapel4();
  }
  function get_mapel5_json() { //data mapel5 by JSON object
    header('Content-Type: application/json');
    echo $this->pengajar_model->get_all_mapel5();
  }
  function get_mapel6_json() { //data mapel6 by JSON object
    header('Content-Type: application/json');
    echo $this->pengajar_model->get_all_mapel6();
  }
  function get_mapel7_json() { //data mapel7 by JSON object
    header('Content-Type: application/json');
    echo $this->pengajar_model->get_all_mapel7();
  }
  function get_mapel8_json() { //data mapel8 by JSON object
    header('Content-Type: application/json');
    echo $this->pengajar_model->get_all_mapel8();
  }
  function get_mapel9_json() { //data mapel9 by JSON object
    header('Content-Type: application/json');
    echo $this->pengajar_model->get_all_mapel9();
  }
  function get_mapel10_json() { //data mapel10 by JSON object
    header('Content-Type: application/json');
    echo $this->pengajar_model->get_all_mapel10();
  }
  function get_mapel11_json() { //data mapel11 by JSON object
    header('Content-Type: application/json');
    echo $this->pengajar_model->get_all_mapel11();
  }
  function update(){ //function update data
    $kode=$this->input->post('kode_guru');
    $data=array(
      'guru_nama'     => $this->input->post('nama_guru'),
      'guru_mapel_id'     => $this->input->post('mapel_guru'),
      'guru_role_id' => $this->input->post('role')
    );
    $this->db->where('guru_kode',$kode);
    $this->db->update('guru', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('pengajar');
  }



}
