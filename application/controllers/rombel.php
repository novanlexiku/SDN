<?php
class rombel extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('rombel_model');
  }
  function index(){
    $title = array(
      'title' => 'Tabel Rombel' ,
    );
    $x=array(
      'siswa7a' => $this->rombel_model->get_totalsiswa7a(),
      'siswa8a' => $this->rombel_model->get_totalsiswa8a(),
      'siswa9a' => $this->rombel_model->get_totalsiswa9a()

);
    $this->load->view('cover/header', $title);
    $this->load->view('rombel/rombel_view',$x);
  }

 
  function get_siswa7a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa7a();
  }
  function get_siswa8a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa8a();
  }
  function get_siswa9a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa9a();
  }
  function simpan(){ //function simpan data
    $data=array(
      'siswa_kode'     => $this->input->post('siswa_kode'),
      'siswa_nama'     => $this->input->post('siswa_nama')

    );
    $this->db->insert('siswa', $data);
    $this->session->set_flashdata('message', 'suksestambah');
    redirect('rombel');
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
    redirect('rombel');
  }


function delete(){ //function hapus data
    $kode=$this->input->post('siswa_kode');
    $this->db->where('siswa_kode',$kode);
    $this->db->delete('siswa');
    $this->session->set_flashdata('message', 'sukseshapus');
    redirect('rombel');
  }

}
