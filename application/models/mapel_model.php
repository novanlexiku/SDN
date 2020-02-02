<?php
class mapel_model extends CI_Model{

  function get_totalmapel(){
    $this->db->select('*')
    ->from('v_mapel');
    return $this->db->count_all_results();
  }

  function get_all_mapel(){
    $this->datatables->select('mapel_id,mapel_nama')
    ->from('v_mapel');
    return $this->datatables->generate();
  }



}
