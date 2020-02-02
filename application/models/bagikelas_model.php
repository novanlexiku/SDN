<?php
class bagikelas_model extends CI_Model{

  function get_total(){
    $this->db->select('*')
    ->from('siswa');
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

  function get_all_siswa() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_role_id',3)
        ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="Update Record" class="edit_record btn btn-success btn-simple btn-xs" data-kode="$1" data-nama="$2"  data-role="$3" data-kelas="$4"><i class="material-icons">create</i></a>','siswa_kode,siswa_nama,siswa_role_id,role_nama,siswa_kelas_id,kelas_nama');
        return $this->datatables->generate();
  }
  function get_all_kelas7a() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',701);
        return $this->datatables->generate();
  }
  function get_all_kelas7b() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',702);
        return $this->datatables->generate();
  }
  function get_all_kelas7c() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',703);
        return $this->datatables->generate();
  }
  function get_all_kelas7d() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',704);
        return $this->datatables->generate();
  }
  function get_all_kelas7e() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',705);
        return $this->datatables->generate();
  }
  function get_all_kelas7f() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',706);
        return $this->datatables->generate();
  }
  function get_all_kelas7g() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',707);
        return $this->datatables->generate();
  }
  function get_all_kelas7h() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',708);
        return $this->datatables->generate();
  }
  function get_all_kelas7i() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',709);
        return $this->datatables->generate();
  }
  function get_all_kelas8a() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',801);
        return $this->datatables->generate();
  }
  function get_all_kelas8b() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',802);
        return $this->datatables->generate();
  }
  function get_all_kelas8c() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',803);
        return $this->datatables->generate();
  }
  function get_all_kelas8d() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',804);
        return $this->datatables->generate();
  }
  function get_all_kelas8e() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',805);
        return $this->datatables->generate();
  }
  function get_all_kelas8f() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',806);
        return $this->datatables->generate();
  }
  function get_all_kelas8g() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',807);
        return $this->datatables->generate();
  }
  function get_all_kelas8h() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',808);
        return $this->datatables->generate();
  }
  function get_all_kelas8i() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',809);
        return $this->datatables->generate();
  }
  function get_all_kelas9a() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',901);
        return $this->datatables->generate();
  }
  function get_all_kelas9b() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',902);
        return $this->datatables->generate();
  }
  function get_all_kelas9c() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',903);
        return $this->datatables->generate();
  }
  function get_all_kelas9d() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',904);
        return $this->datatables->generate();
  }
  function get_all_kelas9e() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',905);
        return $this->datatables->generate();
  }
  function get_all_kelas9f() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',906);
        return $this->datatables->generate();
  }
  function get_all_kelas9g() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',907);
        return $this->datatables->generate();
  }
  function get_all_kelas9h() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',908);
        return $this->datatables->generate();
  }
  function get_all_kelas9i() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',909);
        return $this->datatables->generate();
  }
}
