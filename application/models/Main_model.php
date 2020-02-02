<?php
class Main_model extends CI_Model{

  function get_totalpegawai(){
    $this->db->select('*')
    ->from('guru');
    return $this->db->count_all_results();
  }

  function get_totalsiswa(){
    $this->db->select('*')
    ->from('siswa');
    return $this->db->count_all_results();
  }
  function get_totalkelas(){
    $this->db->select('*')
    ->from('v_kelas');
    return $this->db->count_all_results();
  }
  function get_totalmapel(){
    $this->db->select('*')
    ->from('v_mapel');
    return $this->db->count_all_results();
  }
}
