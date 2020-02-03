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
      'siswa1a' => $this->rombel_model->get_totalsiswa1a(),
      'siswa1b' => $this->rombel_model->get_totalsiswa1b(),
      'siswa1c' => $this->rombel_model->get_totalsiswa1c(),
      'siswa1d' => $this->rombel_model->get_totalsiswa1d(),
      'siswa1e' => $this->rombel_model->get_totalsiswa1e(),
      'siswa1f' => $this->rombel_model->get_totalsiswa1f(),
      'siswa1g' => $this->rombel_model->get_totalsiswa1g(),
      'siswa2a' => $this->rombel_model->get_totalsiswa2a(),
      'siswa2b' => $this->rombel_model->get_totalsiswa2b(),
      'siswa2c' => $this->rombel_model->get_totalsiswa2c(),
      'siswa2d' => $this->rombel_model->get_totalsiswa2d(),
      'siswa2e' => $this->rombel_model->get_totalsiswa2e(),
      'siswa2f' => $this->rombel_model->get_totalsiswa2f(),
      'siswa2g' => $this->rombel_model->get_totalsiswa2g(),
      'siswa3a' => $this->rombel_model->get_totalsiswa3a(),
      'siswa3b' => $this->rombel_model->get_totalsiswa3b(),
      'siswa3c' => $this->rombel_model->get_totalsiswa3c(),
      'siswa3d' => $this->rombel_model->get_totalsiswa3d(),
      'siswa3e' => $this->rombel_model->get_totalsiswa3e(),
      'siswa3f' => $this->rombel_model->get_totalsiswa3f(),
      'siswa3g' => $this->rombel_model->get_totalsiswa3g(),
      'siswa4a' => $this->rombel_model->get_totalsiswa4a(),
      'siswa4b' => $this->rombel_model->get_totalsiswa4b(),
      'siswa4c' => $this->rombel_model->get_totalsiswa4c(),
      'siswa4d' => $this->rombel_model->get_totalsiswa4d(),
      'siswa4e' => $this->rombel_model->get_totalsiswa4e(),
      'siswa4f' => $this->rombel_model->get_totalsiswa4f(),
      'siswa4g' => $this->rombel_model->get_totalsiswa4g(),
      'siswa5a' => $this->rombel_model->get_totalsiswa5a(),
      'siswa5b' => $this->rombel_model->get_totalsiswa5b(),
      'siswa5c' => $this->rombel_model->get_totalsiswa5c(),
      'siswa5d' => $this->rombel_model->get_totalsiswa5d(),
      'siswa5e' => $this->rombel_model->get_totalsiswa5e(),
      'siswa5f' => $this->rombel_model->get_totalsiswa5f(),
      'siswa5g' => $this->rombel_model->get_totalsiswa5g(),
      'siswa6a' => $this->rombel_model->get_totalsiswa6a(),
      'siswa6b' => $this->rombel_model->get_totalsiswa6b(),
      'siswa6c' => $this->rombel_model->get_totalsiswa6c(),
      'siswa6d' => $this->rombel_model->get_totalsiswa6d(),
      'siswa6e' => $this->rombel_model->get_totalsiswa6e(),
      'siswa6f' => $this->rombel_model->get_totalsiswa6f(),
      'siswa6g' => $this->rombel_model->get_totalsiswa6g()


);
    $this->load->view('cover/header', $title);
    $this->load->view('rombel/rombel_view',$x);
  }

 
  function get_siswa1a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa1a();
  }
  function get_siswa1b_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa1b();
  }
  function get_siswa1c_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa1c();
  }
  function get_siswa1d_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa1d();
  }
  function get_siswa1e_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa1e();
  }
  function get_siswa1f_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa1f();
  }
  function get_siswa1g_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa1g();
  }

  function get_siswa2a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa2a();
  }
  function get_siswa2b_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa2b();
  }
  function get_siswa2c_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa2c();
  }
  function get_siswa2d_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa2d();
  }
  function get_siswa2e_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa2e();
  }
  function get_siswa2f_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa2f();
  }
  function get_siswa2g_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa2g();
  }

  function get_siswa3a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa3a();
  }
  function get_siswa3b_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa3b();
  }
  function get_siswa3c_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa3c();
  }
  function get_siswa3d_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa3d();
  }
  function get_siswa3e_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa3e();
  }
  function get_siswa3f_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa3f();
  }
  function get_siswa3g_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa3g();
  }

  function get_siswa4a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa4a();
  }
  function get_siswa4b_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa4b();
  }
  function get_siswa4c_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa4c();
  }
  function get_siswa4d_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa4d();
  }
  function get_siswa4e_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa4e();
  }
  function get_siswa4f_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa4f();
  }
  function get_siswa4g_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa4g();
  }

  function get_siswa5a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa5a();
  }
  function get_siswa5b_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa5b();
  }
  function get_siswa5c_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa5c();
  }
  function get_siswa5d_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa5d();
  }
  function get_siswa5e_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa5e();
  }
  function get_siswa5f_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa5f();
  }
  function get_siswa5g_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa5g();
  }

  function get_siswa6a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa6a();
  }
  function get_siswa6b_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa6b();
  }
  function get_siswa6c_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa6c();
  }
  function get_siswa6d_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa6d();
  }
  function get_siswa6e_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa6e();
  }
  function get_siswa6f_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa6f();
  }
  function get_siswa6g_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->rombel_model->get_all_siswa6g();
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

  function update1(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama1'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia1' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris1' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA1' => $this->input->post('nilai_IPA'),
  'nilai_IPS1' => $this->input->post('nilai_IPS'),
  'nilai_matematika1' => $this->input->post('nilai_matematika'),
  'nilai_PKN1'  => $this->input->post('nilai_PKN'),
  'nilai_TIK1' => $this->input->post('nilai_TIK'),
      
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('rombel');
  }
  function update2(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama2'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia2' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris2' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA2' => $this->input->post('nilai_IPA'),
  'nilai_IPS2' => $this->input->post('nilai_IPS'),
  'nilai_matematika2' => $this->input->post('nilai_matematika'),
  'nilai_PKN2'  => $this->input->post('nilai_PKN'),
  'nilai_TIK2' => $this->input->post('nilai_TIK'),
      
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('rombel');
  }
  function update3(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama3'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia3' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris3' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA3' => $this->input->post('nilai_IPA'),
  'nilai_IPS3' => $this->input->post('nilai_IPS'),
  'nilai_matematika3' => $this->input->post('nilai_matematika'),
  'nilai_PKN3'  => $this->input->post('nilai_PKN'),
  'nilai_TIK3' => $this->input->post('nilai_TIK'),
      
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('rombel');
  }
  function update4(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama4'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia4' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris4' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA4' => $this->input->post('nilai_IPA'),
  'nilai_IPS4' => $this->input->post('nilai_IPS'),
  'nilai_matematika4' => $this->input->post('nilai_matematika'),
  'nilai_PKN4'  => $this->input->post('nilai_PKN'),
  'nilai_TIK4' => $this->input->post('nilai_TIK'),
      
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('rombel');
  }
  function update5(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama5'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia5' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris5' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA5' => $this->input->post('nilai_IPA'),
  'nilai_IPS5' => $this->input->post('nilai_IPS'),
  'nilai_matematika5' => $this->input->post('nilai_matematika'),
  'nilai_PKN5'  => $this->input->post('nilai_PKN'),
  'nilai_TIK5' => $this->input->post('nilai_TIK'),
      
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('rombel');
  }
  function update6(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama6'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia6' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris6' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA6' => $this->input->post('nilai_IPA'),
  'nilai_IPS6' => $this->input->post('nilai_IPS'),
  'nilai_matematika6' => $this->input->post('nilai_matematika'),
  'nilai_PKN6'  => $this->input->post('nilai_PKN'),
  'nilai_TIK6' => $this->input->post('nilai_TIK'),
      
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
