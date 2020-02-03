<?php
class bagikelas_model extends CI_Model{

  function get_total(){
    $this->db->select('*')
    ->from('Siswa')
    ->where('siswa_role_id',3);
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

  //AMBIL DATA bagikelas KELAS 1
  function get_all_kelas1a() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',101);
        return $this->datatables->generate();
  }
  function get_all_kelas1b() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',102);
        return $this->datatables->generate();
  }
  function get_all_kelas1c() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',103);
        return $this->datatables->generate();
  }
  function get_all_kelas1d() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',104);
      return $this->datatables->generate();
}
function get_all_kelas1e() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',105);
      return $this->datatables->generate();
}
function get_all_kelas1f() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',106);
      return $this->datatables->generate();
}
function get_all_kelas1g() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',107);
      return $this->datatables->generate();
}

  //AMBIL DATA bagikelas KELAS 2 
  function get_all_kelas2a() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',201);
        return $this->datatables->generate();
  }
  function get_all_kelas2b() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',202);
        return $this->datatables->generate();
  }
  function get_all_kelas2c() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',203);
        return $this->datatables->generate();
  }
  function get_all_kelas2d() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',204);
      return $this->datatables->generate();
}
function get_all_kelas2e() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',205);
      return $this->datatables->generate();
}
function get_all_kelas2f() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',206);
      return $this->datatables->generate();
}
function get_all_kelas2g() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',207);
      return $this->datatables->generate();
}


  //AMBIL DATA bagikelas KELAS 3
  function get_all_kelas3a() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',301);
        return $this->datatables->generate();
  }
  function get_all_kelas3b() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',302);
        return $this->datatables->generate();
  }
  function get_all_kelas3c() {
        $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
        ->from('v_bagikelas')
        ->where('siswa_kelas_id',303);
        return $this->datatables->generate();
  }
  function get_all_kelas3d() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',304);
      return $this->datatables->generate();
}
function get_all_kelas3e() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',305);
      return $this->datatables->generate();
}
function get_all_kelas3f() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',306);
      return $this->datatables->generate();
}
function get_all_kelas3g() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',307);
      return $this->datatables->generate();
}

//AMBIL DATA bagikelas KELAS 4
function get_all_kelas4a() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',401);
      return $this->datatables->generate();
}
function get_all_kelas4b() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',402);
      return $this->datatables->generate();
}
function get_all_kelas4c() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',403);
      return $this->datatables->generate();
}
function get_all_kelas4d() {
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
    ->from('v_bagikelas')
    ->where('siswa_kelas_id',404);
    return $this->datatables->generate();
}
function get_all_kelas4e() {
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
    ->from('v_bagikelas')
    ->where('siswa_kelas_id',405);
    return $this->datatables->generate();
}
function get_all_kelas4f() {
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
    ->from('v_bagikelas')
    ->where('siswa_kelas_id',406);
    return $this->datatables->generate();
}
function get_all_kelas4g() {
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
    ->from('v_bagikelas')
    ->where('siswa_kelas_id',407);
    return $this->datatables->generate();
}

//AMBIL DATA bagikelas KELAS 5
function get_all_kelas5a() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',501);
      return $this->datatables->generate();
}
function get_all_kelas5b() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',502);
      return $this->datatables->generate();
}
function get_all_kelas5c() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',503);
      return $this->datatables->generate();
}
function get_all_kelas5d() {
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
    ->from('v_bagikelas')
    ->where('siswa_kelas_id',504);
    return $this->datatables->generate();
}
function get_all_kelas5e() {
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
    ->from('v_bagikelas')
    ->where('siswa_kelas_id',505);
    return $this->datatables->generate();
}
function get_all_kelas5f() {
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
    ->from('v_bagikelas')
    ->where('siswa_kelas_id',506);
    return $this->datatables->generate();
}
function get_all_kelas5g() {
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
    ->from('v_bagikelas')
    ->where('siswa_kelas_id',507);
    return $this->datatables->generate();
}

//AMBIL DATA bagikelas KELAS 6
function get_all_kelas6a() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',601);
      return $this->datatables->generate();
}
function get_all_kelas6b() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',602);
      return $this->datatables->generate();
}
function get_all_kelas6c() {
      $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
      ->from('v_bagikelas')
      ->where('siswa_kelas_id',603);
      return $this->datatables->generate();
}
function get_all_kelas6d() {
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
    ->from('v_bagikelas')
    ->where('siswa_kelas_id',604);
    return $this->datatables->generate();
}
function get_all_kelas6e() {
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
    ->from('v_bagikelas')
    ->where('siswa_kelas_id',605);
    return $this->datatables->generate();
}
function get_all_kelas6f() {
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
    ->from('v_bagikelas')
    ->where('siswa_kelas_id',606);
    return $this->datatables->generate();
}
function get_all_kelas6g() {
    $this->datatables->select('siswa_kode,siswa_nama,siswa_kelas_id,siswa_role_id,kelas_nama,role_nama')
    ->from('v_bagikelas')
    ->where('siswa_kelas_id',607);
    return $this->datatables->generate();
}

}
