<?php
class siswa extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('siswa_model');
  }
  function index(){
    $title = array(
      'title' => 'Tabel siswa' ,
    );
    $x = array (
      'Total_rows' => $this->siswa_model->get_total(),
    'role'=>    $this->siswa_model->get_role()
  );
    
    $this->load->view('cover/header', $title);
    $this->load->view('siswa/siswa_view',$x);
  }

  function get_siswa_json() { //data data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->siswa_model->get_all_siswa();
  }

  function simpan(){ //function simpan data
    $data=array(
      'siswa_kode'     => $this->input->post('kode_siswa'),
      'siswa_nama'     => $this->input->post('nama_siswa'),
      'siswa_username'     => $this->input->post('username_siswa'),
      'siswa_password'     => sha1($this->input->post('password_siswa')),
      'siswa_agama'     => $this->input->post('agama_siswa'),
      'siswa_gender'     => $this->input->post('gender_siswa'),
      'siswa_tgllhr'     => $this->input->post('tgllhr_siswa'),
      'siswa_tlp'     => $this->input->post('tlp'),
      'siswa_alamat'     => $this->input->post('alamat_siswa'),
      'siswa_wali'     => $this->input->post('wali_siswa'),
      'siswa_role_id' => '3',
      'siswa_kelas_id' => '1',
      'siswa_mapel_id' => '1'

    );
    $this->db->insert('siswa', $data);
    $this->session->set_flashdata('message', 'suksestambah');
    redirect('siswa');
  }

  function update(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
      'siswa_nama'     => $this->input->post('nama_siswa'),
      'siswa_username'     => $this->input->post('username_siswa'),
      'siswa_password'     => sha1($this->input->post('password_siswa')),
      'siswa_agama'     => $this->input->post('agama_siswa'),
      'siswa_gender'     => $this->input->post('gender_siswa'),
      'siswa_tgllhr'     => $this->input->post('tgllhr_siswa'),
      'siswa_tlp'     => $this->input->post('tlp'),
      'siswa_alamat'     => $this->input->post('alamat_siswa'),
      'siswa_wali'     => $this->input->post('wali_siswa'),
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('siswa');
  }

  function delete(){ //function hapus data
    $kode=$this->input->post('kode_siswa');
    $this->db->where('siswa_kode',$kode);
    $this->db->delete('siswa');
    $this->session->set_flashdata('message', 'sukseshapus');
    redirect('siswa');
  }

}
