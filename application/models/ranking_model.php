<?php
class ranking_model extends CI_Model{

  public $total = 'total_nilai';
  public $order = 'DESC';

 function get_ranking7a(){
  $this->db->order_by($this->total, $this->order);
    $hsl=$this->db->get('v_ranking7a');
    return $hsl;
  } 
  
  function get_ranking8a(){
    $this->db->order_by($this->total, $this->order);
    $hsl=$this->db->get('v_ranking8a');
    return $hsl;
  } 

function get_ranking9a(){
  $this->db->order_by($this->total, $this->order);
    $hsl=$this->db->get('v_ranking9a');
    return $hsl;
  } 

function get_all_siswa7a() {
        $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
        ->from('v_ranking7a');
         return $this->datatables->generate();
  }

  function get_all_siswa8a(){
    $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
    ->from('v_ranking8a');
    return $this->datatables->generate();
  }

  function get_all_siswa9a(){
   $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
    ->from('v_ranking9a');
    return $this->datatables->generate();
  }


}
