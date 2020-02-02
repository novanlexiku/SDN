<?php
class pengajar_model extends CI_Model{

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
  function get_mapel(){
    $hsl2=$this->db->get('mapel');
    return $hsl2;
  }

  function get_all_guru() {
        $this->datatables->select('guru_kode,guru_nama,guru_mapel_id,guru_role_id,mapel_nama,role_nama')
        ->from('v_pengajar')
        ->where('guru_role_id',2)
        ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="Update Record" class="edit_record btn btn-success btn-simple btn-xs" data-kode="$1" data-nama="$2"  data-role="$3" data-mapel="$4"><i class="material-icons">create</i></a>','guru_kode,guru_nama,guru_role_id,role_nama,guru_mapel_id,mapel_nama');
        return $this->datatables->generate();
  }
  function get_all_mapel1() {
        $this->datatables->select('guru_kode,guru_nama,guru_mapel_id,guru_role_id,mapel_nama,role_nama')
        ->from('v_pengajar')
        ->where('guru_mapel_id',2);
        return $this->datatables->generate();
  }
  function get_all_mapel2() {
        $this->datatables->select('guru_kode,guru_nama,guru_mapel_id,guru_role_id,mapel_nama,role_nama')
        ->from('v_pengajar')
        ->where('guru_mapel_id',3);
        return $this->datatables->generate();
  }
  function get_all_mapel3() {
        $this->datatables->select('guru_kode,guru_nama,guru_mapel_id,guru_role_id,mapel_nama,role_nama')
        ->from('v_pengajar')
        ->where('guru_mapel_id',4);
        return $this->datatables->generate();
  }
  function get_all_mapel4() {
        $this->datatables->select('guru_kode,guru_nama,guru_mapel_id,guru_role_id,mapel_nama,role_nama')
        ->from('v_pengajar')
        ->where('guru_mapel_id',5);
        return $this->datatables->generate();
  }
  function get_all_mapel5() {
        $this->datatables->select('guru_kode,guru_nama,guru_mapel_id,guru_role_id,mapel_nama,role_nama')
        ->from('v_pengajar')
        ->where('guru_mapel_id',6);
        return $this->datatables->generate();
  }
  function get_all_mapel6() {
        $this->datatables->select('guru_kode,guru_nama,guru_mapel_id,guru_role_id,mapel_nama,role_nama')
        ->from('v_pengajar')
        ->where('guru_mapel_id',7);
        return $this->datatables->generate();
  }
  function get_all_mapel7() {
        $this->datatables->select('guru_kode,guru_nama,guru_mapel_id,guru_role_id,mapel_nama,role_nama')
        ->from('v_pengajar')
        ->where('guru_mapel_id',8);
        return $this->datatables->generate();
  }
  function get_all_mapel8() {
        $this->datatables->select('guru_kode,guru_nama,guru_mapel_id,guru_role_id,mapel_nama,role_nama')
        ->from('v_pengajar')
        ->where('guru_mapel_id',9);
        return $this->datatables->generate();
  }
  function get_all_mapel9() {
        $this->datatables->select('guru_kode,guru_nama,guru_mapel_id,guru_role_id,mapel_nama,role_nama')
        ->from('v_pengajar')
        ->where('guru_mapel_id',10);
        return $this->datatables->generate();
  }
  function get_all_mapel10() {
        $this->datatables->select('guru_kode,guru_nama,guru_mapel_id,guru_role_id,mapel_nama,role_nama')
        ->from('v_pengajar')
        ->where('guru_mapel_id',11);
        return $this->datatables->generate();
  }
  function get_all_mapel11() {
        $this->datatables->select('guru_kode,guru_nama,guru_mapel_id,guru_role_id,mapel_nama,role_nama')
        ->from('v_pengajar')
        ->where('guru_mapel_id',12);
        return $this->datatables->generate();
  }
}
