<?php
class siswa_model extends CI_Model{

  function get_role(){
    $hsl=$this->db->get('role');
    return $hsl;
  }

  function get_total(){
    $this->db->select('*')
    ->from('Siswa')
    ->where('siswa_role_id',3);
    return $this->db->count_all_results();
  }

  function get_all_siswa() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_username,siswa_password,siswa_agama,siswa_gender,siswa_tgllhr,siswa_tlp,siswa_wali,siswa_alamat,siswa_role_id')
        ->from('siswa')
        ->where('siswa_role_id', 3)
        ->select('role_id,role_nama')
        ->join('role', 'siswa_role_id=role_id')
        ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="View record" class="view_record btn btn-info btn-simple btn-xs" data-kode="$1" data-nama="$2" data-username="$3" data-agama="$4" data-gender="$5" data-tgllhr="$6" data-tlp="$7" data-alamat="$8" data-wali="$9" ><i class="material-icons">visibility</i></a> <a href="javascript:void(0);" rel="tooltip" title="Update Record" class="edit_record btn btn-success btn-simple btn-xs" data-kode="$1" data-nama="$2" data-username="$3" data-password="$10" data-agama="$4" data-gender="$5" data-tgllhr="$6" data-tlp="$7" data-alamat="$8" data-wali="$9"><i class="material-icons">create</i></a>  <a href="javascript:void(0);" rel="tooltip" title="Delete Record" class="hapus_record btn btn-danger btn-simple btn-xs" data-kode="$1"><i class="material-icons">delete</i></a>','siswa_kode,siswa_nama,siswa_username,siswa_agama,siswa_gender,siswa_tgllhr,siswa_tlp,siswa_alamat,siswa_wali,siswa_password');
        return $this->datatables->generate();
  }

}
