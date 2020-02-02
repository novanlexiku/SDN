<?php

class admin extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('admin_model');
  }
  function index(){
    $title = array(
      'title' => 'Tabel Admin' ,
    );
    $x['role']=$this->admin_model->get_role();
    $this->load->view('cover/header', $title);
    $this->load->view('admin/admin_view',$x);
  }

  function get_guru_json() { //data data guru by JSON object
    header('Content-Type: application/json');
    echo $this->admin_model->get_all_guru();
  }

  function simpan(){ //function simpan data
    $data=array(
      'guru_kode'     => $this->input->post('kode_guru'),
      'guru_nama'     => $this->input->post('nama_guru'),
      'guru_username'     => $this->input->post('username_guru'),
      'guru_password'     => sha1($this->input->post('password_guru')),
      'guru_agama'     => $this->input->post('agama_guru'),
      'guru_gender'     => $this->input->post('gender_guru'),
      'guru_tgllhr'     => $this->input->post('tgllhr_guru'),
      'guru_tlp'     => $this->input->post('tlp'),
      'guru_alamat'     => $this->input->post('alamat_guru'),
      'guru_role_id' => '1',
      'guru_kelas_id' => '1',
      'guru_mapel_id' => '1'
    );
    $this->db->insert('guru', $data);
    $this->session->set_flashdata('message', 'suksestambah');
    redirect('admin');
  }

  function update(){ //function update data
    $kode=$this->input->post('kode_guru');
    $data=array(
      'guru_nama'     => $this->input->post('nama_guru'),
      'guru_username'     => $this->input->post('username_guru'),
      'guru_password'     => sha1($this->input->post('password_guru')),
      'guru_agama'     => $this->input->post('agama_guru'),
      'guru_gender'     => $this->input->post('gender_guru'),
      'guru_tgllhr'     => $this->input->post('tgllhr_guru'),
      'guru_tlp'     => $this->input->post('tlp'),
      'guru_alamat'     => $this->input->post('alamat_guru'),
    );
    $this->db->where('guru_kode',$kode);
    $this->db->update('guru', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('admin');
  }

  function delete(){ //function hapus data
    $kode=$this->input->post('kode_guru');
    $this->db->where('guru_kode',$kode);
    $this->db->delete('guru');
    $this->session->set_flashdata('message', 'sukseshapus');
    redirect('admin');
  }
 
}
