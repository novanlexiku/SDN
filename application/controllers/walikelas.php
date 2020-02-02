<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class walikelas extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('walikelas_model');
  }
  function index(){


    $title = array(
      'title' => 'Tabel Walikelas' ,
    );
    $x = array (
      'Total_rows' => $this->walikelas_model->get_total(),
    'role'=>    $this->walikelas_model->get_role(),
    'kelas'=>    $this->walikelas_model->get_kelas()
  );
    $this->load->view('cover/header', $title);
    $this->load->view('walikelas/walikelas_view',$x);
  }

  function get_guru_json() { //data data guru by JSON object
    header('Content-Type: application/json');
    echo $this->walikelas_model->get_all_guru();
  }
  function get_kelas7a_json() { //data kelas7a by JSON object
    header('Content-Type: application/json');
    echo $this->walikelas_model->get_all_kelas7a();
  }
  function get_kelas7b_json() { //data kelas7b by JSON object
    header('Content-Type: application/json');
    echo $this->walikelas_model->get_all_kelas7b();
  }
  function get_kelas7c_json() { //data kelas7c by JSON object
    header('Content-Type: application/json');
    echo $this->walikelas_model->get_all_kelas7c();
  }
  function get_kelas8a_json() { //data kelas8a by JSON object
    header('Content-Type: application/json');
    echo $this->walikelas_model->get_all_kelas8a();
  }
  function get_kelas8b_json() { //data kelas8b by JSON object
    header('Content-Type: application/json');
    echo $this->walikelas_model->get_all_kelas8b();
  }
  function get_kelas8c_json() { //data kelas8c by JSON object
    header('Content-Type: application/json');
    echo $this->walikelas_model->get_all_kelas8c();
  }
  function get_kelas9a_json() { //data kelas9a by JSON object
    header('Content-Type: application/json');
    echo $this->walikelas_model->get_all_kelas9a();
  }
  function get_kelas9b_json() { //data kelas9b by JSON object
    header('Content-Type: application/json');
    echo $this->walikelas_model->get_all_kelas9b();
  }
  function get_kelas9c_json() { //data kelas9c by JSON object
    header('Content-Type: application/json');
    echo $this->walikelas_model->get_all_kelas9c();
  }

  function update(){ //function update data
    $kode=$this->input->post('kode_guru');
    $data=array(
      'guru_nama'     => $this->input->post('nama_guru'),
      'guru_kelas_id'     => $this->input->post('kelas_guru'),
      'guru_role_id' => $this->input->post('role')
    );
    $this->db->where('guru_kode',$kode);
    $this->db->update('guru', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('walikelas');
  }



}
