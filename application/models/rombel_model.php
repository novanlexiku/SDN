<?php
class rombel_model extends CI_Model{

  
  function get_totalsiswa7a(){
    $this->db->select('*')
    ->from('v_siswa7a');
    return $this->db->count_all_results();
  }

  function get_totalsiswa8a(){
    $this->db->select('*')
    ->from('v_siswa8a');
    return $this->db->count_all_results();
  }
  function get_totalsiswa9a(){
    $this->db->select('*')
    ->from('v_siswa9a');
    return $this->db->count_all_results();
  }
  
  


function get_all_siswa7a() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,nilai_agama7,nilai_b_indonesia7,nilai_b_inggris7,nilai_b_sasak7,nilai_IPA7,nilai_IPS7,nilai_matematika7,nilai_penjaskes7,nilai_PKN7,nilai_seni_budaya7,nilai_TIK7')
        ->from('v_siswa7a')
        ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="View record" class="view_record btn btn-info btn-simple btn-xs" data-kode="$1" data-agama="$2" data-indo="$3" data-ing="$4" data-ipa="$5" data-ips="$6" data-mtk="$7" data-pkn="$8" data-tik="$9" ><i class="material-icons">visibility</i></a> 
          <a href="javascript:void(0);" rel="tooltip" title="Update Record" class="edit_record btn btn-success btn-simple btn-xs" data-kode="$1" data-agama="$2" data-indo="$3" data-ing="$4" data-ipa="$5" data-ips="$6" data-mtk="$7" data-pkn="$8" data-tik="$9" ><i class="material-icons">create</i></a> ','siswa_kode,nilai_agama7,nilai_b_indonesia7,nilai_b_inggris7,nilai_IPA7,nilai_IPS7,nilai_matematika7,nilai_PKN7,nilai_TIK7');
        return $this->datatables->generate();
  }

  function get_all_siswa8a(){
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,nilai_agama8,nilai_b_indonesia8,nilai_b_inggris8,nilai_b_sasak8,nilai_IPA8,nilai_IPS8,nilai_matematika8,nilai_penjaskes8,nilai_PKN8,nilai_seni_budaya8,nilai_TIK8')
    ->from('v_siswa8a')
    ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="View record" class="view_record btn btn-info btn-simple btn-xs" data-kode="$1" data-agama="$2" data-indo="$3" data-ing="$4" data-ipa="$5" data-ips="$6" data-mtk="$7" data-pkn="$8" data-tik="$9" ><i class="material-icons">visibility</i></a> 
          <a href="javascript:void(0);" rel="tooltip" title="Update Record" class="edit_record btn btn-success btn-simple btn-xs" data-kode="$1" data-agama="$2" data-indo="$3" data-ing="$4" data-ipa="$5" data-ips="$6" data-mtk="$7" data-pkn="$8" data-tik="$9" ><i class="material-icons">create</i></a> ','siswa_kode,nilai_agama8,nilai_b_indonesia8,nilai_b_inggris8,nilai_IPA8,nilai_IPS8,nilai_matematika8,nilai_PKN8,nilai_TIK8');
    return $this->datatables->generate();
  }

  function get_all_siswa9a(){
   $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,nilai_agama9,nilai_b_indonesia9,nilai_b_inggris9,nilai_b_sasak9,nilai_IPA9,nilai_IPS9,nilai_matematika9,nilai_penjaskes9,nilai_PKN9,nilai_seni_budaya9,nilai_TIK9')
    ->from('v_siswa9a')
    ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="View record" class="view_record btn btn-info btn-simple btn-xs" data-kode="$1" data-agama="$2" data-indo="$3" data-ing="$4" data-ipa="$5" data-ips="$6" data-mtk="$7" data-pkn="$8" data-tik="$9" ><i class="material-icons">visibility</i></a> 
          <a href="javascript:void(0);" rel="tooltip" title="Update Record" class="edit_record btn btn-success btn-simple btn-xs" data-kode="$1" data-agama="$2" data-indo="$3" data-ing="$4" data-ipa="$5" data-ips="$6" data-mtk="$7" data-pkn="$8" data-tik="$9" ><i class="material-icons">create</i></a> ','siswa_kode,nilai_agama9,nilai_b_indonesia9,nilai_b_inggris9,nilai_IPA9,nilai_IPS9,nilai_matematika9,nilai_PKN9,nilai_TIK9');
    return $this->datatables->generate();
  }


}
