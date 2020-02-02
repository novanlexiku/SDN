<?php
class mapel extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('mapel_model');
  }
  function index(){
    $title = array(
      'title' => 'Tabel Mata Pelajaran' ,
    );
    $x=array(
      'mapel' => $this->mapel_model->get_totalmapel()


);
    $this->load->view('cover/header', $title);
    $this->load->view('mapel/mapel_view',$x);
  }

  function get_mapel_json() { //data mapel by JSON object
    header('Content-Type: application/json');
    echo $this->mapel_model->get_all_mapel();
  }
  
  function simpan(){ //function simpan data
    $data=array(
      'mapel_id'     => $this->input->post('mapel_id'),
      'mapel_nama'     => $this->input->post('mapel_nama')

    );
    $this->db->insert('mapel', $data);
    $this->session->set_flashdata('message', 'suksestambah');
    redirect('mapel');
  }




}
