<?php
class kelas extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('kelas_model');
  }
  function index(){
    $title = array(
      'title' => 'Tabel Kelas' ,
    );
    $x=array(
      'kelas' => $this->kelas_model->get_totalkelas(),
      'kelas1' => $this->kelas_model->get_totalkelas1(),
      'kelas2' => $this->kelas_model->get_totalkelas2(),
      'kelas3' => $this->kelas_model->get_totalkelas3(),
      'kelas4' => $this->kelas_model->get_totalkelas4(),
      'kelas5' => $this->kelas_model->get_totalkelas5(),
      'kelas6' => $this->kelas_model->get_totalkelas6()

);
    $this->load->view('cover/header', $title);
    $this->load->view('kelas/kelas_view',$x);
  }

  //MEMANGGIL SELURUH DATA KELAS DARI MODEL
  function get_kelas_json() { //data kelas by JSON object
    header('Content-Type: application/json');
    echo $this->kelas_model->get_all_kelas();
  }
  function get_kelas1_json() { //data kelas by JSON object
    header('Content-Type: application/json');
    echo $this->kelas_model->get_all_kelas1();
  }
  function get_kelas2_json() { //data kelas by JSON object
    header('Content-Type: application/json');
    echo $this->kelas_model->get_all_kelas2();
  }
  function get_kelas3_json() { //data kelas by JSON object
    header('Content-Type: application/json');
    echo $this->kelas_model->get_all_kelas3();
  }
  function get_kelas4_json() { //data kelas by JSON object
    header('Content-Type: application/json');
    echo $this->kelas_model->get_all_kelas4();
  }
  function get_kelas5_json() { //data kelas by JSON object
    header('Content-Type: application/json');
    echo $this->kelas_model->get_all_kelas5();
  }
  function get_kelas6_json() { //data kelas by JSON object
    header('Content-Type: application/json');
    echo $this->kelas_model->get_all_kelas6();
  }
  function simpan(){ //function simpan data
    $data=array(
      'kelas_id'     => $this->input->post('kelas_id'),
      'kelas_nama'     => $this->input->post('kelas_nama')

    );
    $this->db->insert('kelas', $data);
    $this->session->set_flashdata('message', 'suksestambah');
    redirect('kelas');
  }


function delete(){ //function hapus data
    $kode=$this->input->post('kelas_id');
    $this->db->where('kelas_id',$kode);
    $this->db->delete('kelas');
    $this->session->set_flashdata('message', 'sukseshapus');
    redirect('kelas');
  }

}
