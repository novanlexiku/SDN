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
   
  function get_ranking1a(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1a');
      $row_cnt = $hsl->num_rows;
      return $hsl;
    } 
    function get_ranking1b(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1b');
      $row_cnt = $hsl->num_rows;
      return $hsl;
    } 
    function get_ranking1c(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1c');
      $row_cnt = $hsl->num_rows;
      return $hsl;
    } 
    function get_ranking1d(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1d');
      $row_cnt = $hsl->num_rows;
      return $hsl;
    } 
    function get_ranking1e(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1e');
      $row_cnt = $hsl->num_rows;
      return $hsl;
    } 
    function get_ranking1f(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1f');
      $row_cnt = $hsl->num_rows;
      return $hsl;
    } 
    function get_ranking1g(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1g');
      $row_cnt = $hsl->num_rows;
      return $hsl;
    } 
    function get_ranking2a(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2a');
        $row_cnt = $hsl->num_rows;
        return $hsl;
      } 
      function get_ranking2b(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2b');
        $row_cnt = $hsl->num_rows;
        return $hsl;
      } 
      function get_ranking2c(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2c');
        $row_cnt = $hsl->num_rows;
        return $hsl;
      } 
      function get_ranking2d(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2d');
        $row_cnt = $hsl->num_rows;
        return $hsl;
      } 
      function get_ranking2e(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2e');
        $row_cnt = $hsl->num_rows;
        return $hsl;
      } 
      function get_ranking2f(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2f');
        $row_cnt = $hsl->num_rows;
        return $hsl;
      } 
      function get_ranking2g(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2g');
        $row_cnt = $hsl->num_rows;
        return $hsl;
      } 
      function get_ranking3a(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3a');
          $row_cnt = $hsl->num_rows;
          return $hsl;
        } 
        function get_ranking3b(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3b');
          $row_cnt = $hsl->num_rows;
          return $hsl;
        } 
        function get_ranking3c(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3c');
          $row_cnt = $hsl->num_rows;
          return $hsl;
        } 
        function get_ranking3d(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3d');
          $row_cnt = $hsl->num_rows;
          return $hsl;
        } 
        function get_ranking3e(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3e');
          $row_cnt = $hsl->num_rows;
          return $hsl;
        } 
        function get_ranking3f(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3f');
          $row_cnt = $hsl->num_rows;
          return $hsl;
        } 
        function get_ranking3g(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3g');
          $row_cnt = $hsl->num_rows;
          return $hsl;
        } 
        function get_ranking4a(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4a');
            $row_cnt = $hsl->num_rows;
            return $hsl;
          } 
          function get_ranking4b(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4b');
            $row_cnt = $hsl->num_rows;
            return $hsl;
          } 
          function get_ranking4c(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4c');
            $row_cnt = $hsl->num_rows;
            return $hsl;
          } 
          function get_ranking4d(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4d');
            $row_cnt = $hsl->num_rows;
            return $hsl;
          } 
          function get_ranking4e(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4e');
            $row_cnt = $hsl->num_rows;
            return $hsl;
          } 
          function get_ranking4f(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4f');
            $row_cnt = $hsl->num_rows;
            return $hsl;
          } 
          function get_ranking4g(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4g');
            $row_cnt = $hsl->num_rows;
            return $hsl;
          } 
          function get_ranking5a(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5a');
              $row_cnt = $hsl->num_rows;
              return $hsl;
            } 
            function get_ranking5b(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5b');
              $row_cnt = $hsl->num_rows;
              return $hsl;
            } 
            function get_ranking5c(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5c');
              $row_cnt = $hsl->num_rows;
              return $hsl;
            } 
            function get_ranking5d(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5d');
              $row_cnt = $hsl->num_rows;
              return $hsl;
            } 
            function get_ranking5e(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5e');
              $row_cnt = $hsl->num_rows;
              return $hsl;
            } 
            function get_ranking5f(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5f');
              $row_cnt = $hsl->num_rows;
              return $hsl;
            } 
            function get_ranking5g(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5g');
              $row_cnt = $hsl->num_rows;
              return $hsl;
            } 
            function get_ranking6a(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6a');
                $row_cnt = $hsl->num_rows;
                return $hsl;
              } 
              function get_ranking6b(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6b');
                $row_cnt = $hsl->num_rows;
                return $hsl;
              } 
              function get_ranking6c(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6c');
                $row_cnt = $hsl->num_rows;
                return $hsl;
              } 
              function get_ranking6d(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6d');
                $row_cnt = $hsl->num_rows;
                return $hsl;
              } 
              function get_ranking6e(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6e');
                $row_cnt = $hsl->num_rows;
                return $hsl;
              } 
              function get_ranking6f(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6f');
                $row_cnt = $hsl->num_rows;
                return $hsl;
              } 
              function get_ranking6g(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6g');
                $row_cnt = $hsl->num_rows;
                return $hsl;
              } 
  
  
              function get_rank_user1a(){

                $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                      ->from('v_ranking1a')	
                      ->order_by($this->total, $this->order);
                      $row_cnt = $hsl3->num_rows;
               
                return $hsl3;}
              function get_rank_user1b(){
            
                $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                      ->from('v_ranking1b')	
                      ->order_by($this->total, $this->order);
                      $row_cnt = $hsl3->num_rows;
               
                return $hsl3;}
              function get_rank_user1c(){
            
                $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                      ->from('v_ranking1c')	
                      ->order_by($this->total, $this->order);
                      $row_cnt = $hsl3->num_rows;
               
                return $hsl3;}
              function get_rank_user1d(){
            
                $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                      ->from('v_ranking1d')	
                      ->order_by($this->total, $this->order);
                      $row_cnt = $hsl3->num_rows;
               
                return $hsl3;}
              function get_rank_user1e(){
            
                $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                      ->from('v_ranking1e')	
                      ->order_by($this->total, $this->order);
                      $row_cnt = $hsl3->num_rows;
               
                return $hsl3;}
              function get_rank_user1f(){
            
                $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                      ->from('v_ranking1f')	
                      ->order_by($this->total, $this->order);
                      $row_cnt = $hsl3->num_rows;
               
                return $hsl3;}
              function get_rank_user1g(){
            
                $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                      ->from('v_ranking1g')	
                      ->order_by($this->total, $this->order);
                      $row_cnt = $hsl3->num_rows;
               
                return $hsl3;}
                function get_rank_user2a(){

                  $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                        ->from('v_ranking2a')	
                        ->order_by($this->total, $this->order);
                        $row_cnt = $hsl3->num_rows;
                 
                  return $hsl3;}
                function get_rank_user2b(){
              
                  $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                        ->from('v_ranking2b')	
                        ->order_by($this->total, $this->order);
                        $row_cnt = $hsl3->num_rows;
                 
                  return $hsl3;}
                function get_rank_user2c(){
              
                  $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                        ->from('v_ranking2c')	
                        ->order_by($this->total, $this->order);
                        $row_cnt = $hsl3->num_rows;
                 
                  return $hsl3;}
                function get_rank_user2d(){
              
                  $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                        ->from('v_ranking2d')	
                        ->order_by($this->total, $this->order);
                        $row_cnt = $hsl3->num_rows;
                 
                  return $hsl3;}
                function get_rank_user2e(){
              
                  $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                        ->from('v_ranking2e')	
                        ->order_by($this->total, $this->order);
                        $row_cnt = $hsl3->num_rows;
                 
                  return $hsl3;}
                function get_rank_user2f(){
              
                  $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                        ->from('v_ranking2f')	
                        ->order_by($this->total, $this->order);
                        $row_cnt = $hsl3->num_rows;
                 
                  return $hsl3;}
                function get_rank_user2g(){
              
                  $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                        ->from('v_ranking2g')	
                        ->order_by($this->total, $this->order);
                        $row_cnt = $hsl3->num_rows;
                 
                  return $hsl3;}
                  function get_rank_user3a(){

                    $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                          ->from('v_ranking3a')	
                          ->order_by($this->total, $this->order);
                          $row_cnt = $hsl3->num_rows;
                   
                    return $hsl3;}
                  function get_rank_user3b(){
                
                    $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                          ->from('v_ranking3b')	
                          ->order_by($this->total, $this->order);
                          $row_cnt = $hsl3->num_rows;
                   
                    return $hsl3;}
                  function get_rank_user3c(){
                
                    $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                          ->from('v_ranking3c')	
                          ->order_by($this->total, $this->order);
                          $row_cnt = $hsl3->num_rows;
                   
                    return $hsl3;}
                  function get_rank_user3d(){
                
                    $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                          ->from('v_ranking3d')	
                          ->order_by($this->total, $this->order);
                          $row_cnt = $hsl3->num_rows;
                   
                    return $hsl3;}
                  function get_rank_user3e(){
                
                    $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                          ->from('v_ranking3e')	
                          ->order_by($this->total, $this->order);
                          $row_cnt = $hsl3->num_rows;
                   
                    return $hsl3;}
                  function get_rank_user3f(){
                
                    $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                          ->from('v_ranking3f')	
                          ->order_by($this->total, $this->order);
                          $row_cnt = $hsl3->num_rows;
                   
                    return $hsl3;}
                  function get_rank_user3g(){
                
                    $hsl3=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                          ->from('v_ranking3g')	
                          ->order_by($this->total, $this->order);
                          $row_cnt = $hsl3->num_rows;
                   
                    return $hsl3;}
                    function get_rank_user4a(){

                      $hsl4=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                            ->from('v_ranking4a')	
                            ->order_by($this->total, $this->order);
                            $row_cnt = $hsl4->num_rows;
                     
                      return $hsl4;}
                    function get_rank_user4b(){
                  
                      $hsl4=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                            ->from('v_ranking4b')	
                            ->order_by($this->total, $this->order);
                            $row_cnt = $hsl4->num_rows;
                     
                      return $hsl4;}
                    function get_rank_user4c(){
                  
                      $hsl4=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                            ->from('v_ranking4c')	
                            ->order_by($this->total, $this->order);
                            $row_cnt = $hsl4->num_rows;
                     
                      return $hsl4;}
                    function get_rank_user4d(){
                  
                      $hsl4=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                            ->from('v_ranking4d')	
                            ->order_by($this->total, $this->order);
                            $row_cnt = $hsl4->num_rows;
                     
                      return $hsl4;}
                    function get_rank_user4e(){
                  
                      $hsl4=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                            ->from('v_ranking4e')	
                            ->order_by($this->total, $this->order);
                            $row_cnt = $hsl4->num_rows;
                     
                      return $hsl4;}
                    function get_rank_user4f(){
                  
                      $hsl4=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                            ->from('v_ranking4f')	
                            ->order_by($this->total, $this->order);
                            $row_cnt = $hsl4->num_rows;
                     
                      return $hsl4;}
                    function get_rank_user4g(){
                  
                      $hsl4=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                            ->from('v_ranking4g')	
                            ->order_by($this->total, $this->order);
                            $row_cnt = $hsl4->num_rows;
                     
                      return $hsl4;}
                      function get_rank_user5a(){

                        $hsl5=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                              ->from('v_ranking5a')	
                              ->order_by($this->total, $this->order);
                              $row_cnt = $hsl5->num_rows;
                       
                        return $hsl5;}
                      function get_rank_user5b(){
                    
                        $hsl5=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                              ->from('v_ranking5b')	
                              ->order_by($this->total, $this->order);
                              $row_cnt = $hsl5->num_rows;
                       
                        return $hsl5;}
                      function get_rank_user5c(){
                    
                        $hsl5=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                              ->from('v_ranking5c')	
                              ->order_by($this->total, $this->order);
                              $row_cnt = $hsl5->num_rows;
                       
                        return $hsl5;}
                      function get_rank_user5d(){
                    
                        $hsl5=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                              ->from('v_ranking5d')	
                              ->order_by($this->total, $this->order);
                              $row_cnt = $hsl5->num_rows;
                       
                        return $hsl5;}
                      function get_rank_user5e(){
                    
                        $hsl5=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                              ->from('v_ranking5e')	
                              ->order_by($this->total, $this->order);
                              $row_cnt = $hsl5->num_rows;
                       
                        return $hsl5;}
                      function get_rank_user5f(){
                    
                        $hsl5=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                              ->from('v_ranking5f')	
                              ->order_by($this->total, $this->order);
                              $row_cnt = $hsl5->num_rows;
                       
                        return $hsl5;}
                      function get_rank_user5g(){
                    
                        $hsl5=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                              ->from('v_ranking5g')	
                              ->order_by($this->total, $this->order);
                              $row_cnt = $hsl5->num_rows;
                       
                        return $hsl5;}
                        function get_rank_user6a(){

                          $hsl6=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                                ->from('v_ranking6a')	
                                ->order_by($this->total, $this->order);
                                $row_cnt = $hsl6->num_rows;
                         
                          return $hsl6;}
                        function get_rank_user6b(){
                      
                          $hsl6=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                                ->from('v_ranking6b')	
                                ->order_by($this->total, $this->order);
                                $row_cnt = $hsl6->num_rows;
                         
                          return $hsl6;}
                        function get_rank_user6c(){
                      
                          $hsl6=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                                ->from('v_ranking6c')	
                                ->order_by($this->total, $this->order);
                                $row_cnt = $hsl6->num_rows;
                         
                          return $hsl6;}
                        function get_rank_user6d(){
                      
                          $hsl6=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                                ->from('v_ranking6d')	
                                ->order_by($this->total, $this->order);
                                $row_cnt = $hsl6->num_rows;
                         
                          return $hsl6;}
                        function get_rank_user6e(){
                      
                          $hsl6=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                                ->from('v_ranking6e')	
                                ->order_by($this->total, $this->order);
                                $row_cnt = $hsl6->num_rows;
                         
                          return $hsl6;}
                        function get_rank_user6f(){
                      
                          $hsl6=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                                ->from('v_ranking6f')	
                                ->order_by($this->total, $this->order);
                                $row_cnt = $hsl6->num_rows;
                         
                          return $hsl6;}
                        function get_rank_user6g(){
                      
                          $hsl6=$this->db->select('siswa_kode,siswa_nama,total_nilai')
                                ->from('v_ranking6g')	
                                ->order_by($this->total, $this->order);
                                $row_cnt = $hsl6->num_rows;
                         
                          return $hsl6;}
}
