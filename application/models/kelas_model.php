<?php
class kelas_model extends CI_Model{

  //MENGHITUNG TOTAL KELAS SELURUH TINGKAT
  function get_totalkelas(){
    $this->db->select('*')
    ->from('v_kelas');
    return $this->db->count_all_results();
  }
  //MENGHITUNG TOTAL KELAS MASING" TINGKATAN
  function get_totalkelas1(){
    $this->db->select('*')
    ->from('v_kelas1');
    return $this->db->count_all_results();
  }
  function get_totalkelas2(){
    $this->db->select('*')
    ->from('v_kelas2');
    return $this->db->count_all_results();
  }
  function get_totalkelas3(){
    $this->db->select('*')
    ->from('v_kelas3');
    return $this->db->count_all_results();
  }
  function get_totalkelas4(){
    $this->db->select('*')
    ->from('v_kelas4');
    return $this->db->count_all_results();
  }
  function get_totalkelas5(){
    $this->db->select('*')
    ->from('v_kelas5');
    return $this->db->count_all_results();
  }
  function get_totalkelas6(){
    $this->db->select('*')
    ->from('v_kelas6');
    return $this->db->count_all_results();
  }

  //MENDAPATKAN DATA SELURUH KELAS YANG ADA
  function get_all_kelas(){
    $this->datatables->select('kelas_id,kelas_nama')
    ->from('v_kelas');
    return $this->datatables->generate();
  }
  //MENDAPATKAN DATA MASING" KELAS
  function get_all_kelas1(){
    $this->datatables->select('kelas_id,kelas_nama')
    ->from('v_kelas1')
    ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="Delete Record" class="hapus_record btn btn-danger btn-round" data-kode="$1"><i class="material-icons">delete</i></a>','kelas_id');
    return $this->datatables->generate();
  }
  function get_all_kelas2(){
    $this->datatables->select('kelas_id,kelas_nama')
    ->from('v_kelas2')
    ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="Delete Record" class="hapus_record btn btn-danger btn-round" data-kode="$1"><i class="material-icons">delete</i></a>','kelas_id');
    return $this->datatables->generate();
  }
  function get_all_kelas3(){
    $this->datatables->select('kelas_id,kelas_nama')
    ->from('v_kelas3')
    ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="Delete Record" class="hapus_record btn btn-danger btn-round" data-kode="$1"><i class="material-icons">delete</i></a>','kelas_id');
    return $this->datatables->generate();
  }
  function get_all_kelas4(){
    $this->datatables->select('kelas_id,kelas_nama')
    ->from('v_kelas4')
    ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="Delete Record" class="hapus_record btn btn-danger btn-round" data-kode="$1"><i class="material-icons">delete</i></a>','kelas_id');
    return $this->datatables->generate();
  }

  function get_all_kelas5(){
    $this->datatables->select('kelas_id,kelas_nama')
    ->from('v_kelas5')
    ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="Delete Record" class="hapus_record btn btn-danger btn-round" data-kode="$1"><i class="material-icons">delete</i></a>','kelas_id');
    return $this->datatables->generate();
  }

  function get_all_kelas6(){
    $this->datatables->select('kelas_id,kelas_nama')
    ->from('v_kelas6')
    ->add_column('view', '<a href="javascript:void(0);" rel="tooltip" title="Delete Record" class="hapus_record btn btn-danger btn-round" data-kode="$1"><i class="material-icons">delete</i></a>','kelas_id');
    return $this->datatables->generate();
  }



}
