<?php
class ranking extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('ranking_model');
  }
  function index(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Tabel ranking' ,
    );
    $x=array(
      'start' => $start,
      'ranking7a' => $this->ranking_model->get_ranking7a(),
      'ranking8a' => $this->ranking_model->get_ranking8a(),
      'ranking9a' => $this->ranking_model->get_ranking9a()

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking_view',$x);
  }
function ranking7a(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 7-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking7a' => $this->ranking_model->get_ranking7a(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking7a_view',$x);
  }
  function ranking7b(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 7-B' ,
    );
    $x=array(
      'start' => $start,
      'ranking7b' => $this->ranking_model->get_ranking7b(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking7b_view',$x);
  }
  function ranking7c(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 7-C' ,
    );
    $x=array(
      'start' => $start,
      'ranking7c' => $this->ranking_model->get_ranking7c(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking7c_view',$x);
  }
  function ranking8a(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 8-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking8a' => $this->ranking_model->get_ranking8a(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking8a_view',$x);
  }
  function ranking8b(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 8-B' ,
    );
    $x=array(
      'start' => $start,
      'ranking8b' => $this->ranking_model->get_ranking8b(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking8b_view',$x);
  }
  function ranking8c(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 8-c' ,
    );
    $x=array(
      'start' => $start,
      'ranking8c' => $this->ranking_model->get_ranking8c(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking8c_view',$x);
  }
  function ranking9a(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 9-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking9a' => $this->ranking_model->get_ranking9a(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking9a_view',$x);
  }
  function ranking9b(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 9-B' ,
    );
    $x=array(
      'start' => $start,
      'ranking9b' => $this->ranking_model->get_ranking9b(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking9b_view',$x);
  }
  function ranking9c(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 9-C' ,
    );
    $x=array(
      'start' => $start,
      'ranking9c' => $this->ranking_model->get_ranking9c(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking9c_view',$x);
  }
 
  function get_siswa7a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa7a();
  }
  function get_siswa8a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa8a();
  }
  function get_siswa9a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa9a();
  }
  function simpan(){ //function simpan data
    $data=array(
      'siswa_kode'     => $this->input->post('siswa_kode'),
      'siswa_nama'     => $this->input->post('siswa_nama')

    );
    $this->db->insert('siswa', $data);
    $this->session->set_flashdata('message', 'suksestambah');
    redirect('ranking');
  }

function update(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama7'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia7' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris7' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA7' => $this->input->post('nilai_IPA'),
  'nilai_IPS7' => $this->input->post('nilai_IPS'),
  'nilai_matematika7' => $this->input->post('nilai_matematika'),
  'nilai_PKN7'  => $this->input->post('nilai_PKN'),
  'nilai_TIK7' => $this->input->post('nilai_TIK'),
      
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('ranking');
  }


function delete(){ //function hapus data
    $kode=$this->input->post('siswa_kode');
    $this->db->where('siswa_kode',$kode);
    $this->db->delete('siswa');
    $this->session->set_flashdata('message', 'sukseshapus');
    redirect('ranking');
  }

}
