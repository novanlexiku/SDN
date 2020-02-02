<?php
class walikelas_model extends CI_Model{

  function get_total(){
    $this->db->select('*')
    ->from('Guru')
    ->where('guru_role_id',2);
    return $this->db->count_all_results();
  }

  function get_role(){
    $hsl=$this->db->get('role');
    return $hsl;
  }
  function get_kelas(){
    $hsl2=$this->db->get('kelas');
    return $hsl2;
  }

  function get_all_guru() {
        $this->datatables->select('guru_kode,guru_nama,guru_kelas_id,guru_role_id,kelas_nama,role_nama')
        ->from('v_walikelas')
        ->where('guru_role_id',2)
        ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="Update Record" class="edit_record btn btn-success btn-simple btn-xs" data-kode="$1" data-nama="$2"  data-role="$3" data-kelas="$4"><i class="material-icons">create</i></a>','guru_kode,guru_nama,guru_role_id,role_nama,guru_kelas_id,kelas_nama');
        return $this->datatables->generate();
  }
  function get_all_kelas7a() {
        $this->datatables->select('guru_kode,guru_nama,guru_kelas_id,guru_role_id,kelas_nama,role_nama')
        ->from('v_walikelas')
        ->where('guru_kelas_id',701);
        return $this->datatables->generate();
  }
  function get_all_kelas7b() {
        $this->datatables->select('guru_kode,guru_nama,guru_kelas_id,guru_role_id,kelas_nama,role_nama')
        ->from('v_walikelas')
        ->where('guru_kelas_id',702);
        return $this->datatables->generate();
  }
  function get_all_kelas7c() {
        $this->datatables->select('guru_kode,guru_nama,guru_kelas_id,guru_role_id,kelas_nama,role_nama')
        ->from('v_walikelas')
        ->where('guru_kelas_id',703);
        return $this->datatables->generate();
  }
  function get_all_kelas8a() {
        $this->datatables->select('guru_kode,guru_nama,guru_kelas_id,guru_role_id,kelas_nama,role_nama')
        ->from('v_walikelas')
        ->where('guru_kelas_id',801);
        return $this->datatables->generate();
  }
  function get_all_kelas8b() {
        $this->datatables->select('guru_kode,guru_nama,guru_kelas_id,guru_role_id,kelas_nama,role_nama')
        ->from('v_walikelas')
        ->where('guru_kelas_id',802);
        return $this->datatables->generate();
  }
  function get_all_kelas8c() {
        $this->datatables->select('guru_kode,guru_nama,guru_kelas_id,guru_role_id,kelas_nama,role_nama')
        ->from('v_walikelas')
        ->where('guru_kelas_id',803);
        return $this->datatables->generate();
  }
  function get_all_kelas9a() {
        $this->datatables->select('guru_kode,guru_nama,guru_kelas_id,guru_role_id,kelas_nama,role_nama')
        ->from('v_walikelas')
        ->where('guru_kelas_id',901);
        return $this->datatables->generate();
  }
  function get_all_kelas9b() {
        $this->datatables->select('guru_kode,guru_nama,guru_kelas_id,guru_role_id,kelas_nama,role_nama')
        ->from('v_walikelas')
        ->where('guru_kelas_id',902);
        return $this->datatables->generate();
  }
  function get_all_kelas9c() {
        $this->datatables->select('guru_kode,guru_nama,guru_kelas_id,guru_role_id,kelas_nama,role_nama')
        ->from('v_walikelas')
        ->where('guru_kelas_id',903);
        return $this->datatables->generate();
  }
}
