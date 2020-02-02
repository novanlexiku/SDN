<?php
class profil_model extends CI_Model{
  public $total = 'total_nilai';
  public $order = 'DESC';


function __construct()
    {
        parent::__construct();
    }
function get_siswa(){
    $hsl=$this->db->get('siswa');
    return $hsl;
  }
  function get_guru(){
    $hsl2=$this->db->get('guru');
    return $hsl2;
  }
   
   function get_ranking7a(){
  $this->db->order_by($this->total, $this->order);
    $hsl=$this->db->get('v_ranking7a');
    $row_cnt = $hsl->num_rows;
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
function get_rank_user7a(){

    $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
					->from('v_ranking7a')	
					->order_by($this->total, $this->order);
					$row_cnt = $hsl3->num_rows;
   
    return $hsl3;}
}
