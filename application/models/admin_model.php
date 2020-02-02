<?php
class admin_model extends CI_Model{

  function get_role(){
    $hsl=$this->db->get('role');
    return $hsl;
  }
  function get_all_guru() {
        $this->datatables->select('guru_kode,guru_nama,guru_username,guru_password,guru_agama,guru_gender,guru_tgllhr,guru_tlp,guru_alamat,guru_role_id')
        ->from('guru')
        ->where('guru_role_id', 1)
        ->select('role_id,role_nama')
        ->join('role', 'guru_role_id=role_id')
        ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="View record" class="view_record btn btn-info btn-round" data-kode="$1" data-nama="$2" data-username="$3" data-password="$4" data-agama="$5" data-gender="$6" data-tgllhr="$7" data-tlp="$8" data-alamat="$9" ><i class="material-icons">visibility</i></a> <a href="javascript:void(0);" rel="tooltip" title="Update Record" class="edit_record btn btn-success btn-round" data-kode="$1" data-nama="$2" data-username="$3" data-password="$4" data-agama="$5" data-gender="$6" data-tgllhr="$7" data-tlp="$8" data-alamat="$9" data-role="$10"><i class="material-icons">create</i></a>  <a href="javascript:void(0);" rel="tooltip" title="Delete Record" class="hapus_record btn btn-danger btn-round" data-kode="$1"><i class="material-icons">delete</i></a>','guru_kode,guru_nama,guru_username,guru_password,guru_agama,guru_gender,guru_tgllhr,guru_tlp,guru_alamat,guru_role_id,role_nama');
        return $this->datatables->generate();
  }

}


