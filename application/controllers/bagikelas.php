<?php
class bagikelas extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('bagikelas_model');
  }
  function index(){


    $title = array(
      'title' => 'Tabel bagikelas' ,
    );
    $x = array (
      'Total_rows' => $this->bagikelas_model->get_total(),
    'role'=>    $this->bagikelas_model->get_role(),
    'kelas'=>    $this->bagikelas_model->get_kelas()
  );
    $this->load->view('cover/header', $title);
    $this->load->view('bagikelas/bagikelas_view',$x);
  }

  function get_siswa_json() { //data data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_siswa();
  }
  function get_kelas7a_json() { //data kelas7a by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas7a();
  }
  function get_kelas7b_json() { //data kelas7b by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas7b();
  }
  function get_kelas7c_json() { //data kelas7c by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas7c();
  }
  function get_kelas8a_json() { //data kelas8a by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas8a();
  }
  function get_kelas8b_json() { //data kelas8b by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas8b();
  }
  function get_kelas8c_json() { //data kelas8c by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas8c();
  }
  function get_kelas9a_json() { //data kelas9a by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas9a();
  }
  function get_kelas9b_json() { //data kelas9b by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas9b();
  }
  function get_kelas9c_json() { //data kelas9c by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas9c();
  }

  function update(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
      'siswa_nama'     => $this->input->post('nama_siswa'),
      'siswa_kelas_id'     => $this->input->post('kelas_siswa'),
      'siswa_role_id' => $this->input->post('role')
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('bagikelas');
  }



}
