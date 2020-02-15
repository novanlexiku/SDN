<?php
class ranking_model extends CI_Model{

  public $total = 'total_nilai';
  public $order = 'DESC';

  function get_ranking1a(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1a');
      return $hsl;
    }
    
  function get_ranking1b(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1b');
      return $hsl;
    }
    
  function get_ranking1c(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1c');
      return $hsl;
    }
  
  function get_ranking1d(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1d');
      return $hsl;
    }
    
  function get_ranking1e(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1e');
      return $hsl;
    }
    
  function get_ranking1f(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1f');
      return $hsl;
    }
    
  function get_ranking1g(){
    $this->db->order_by($this->total, $this->order);
      $hsl=$this->db->get('v_ranking1g');
      return $hsl;
    }

    function get_ranking2a(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2a');
        return $hsl;
      }
      
    function get_ranking2b(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2b');
        return $hsl;
      }
      
    function get_ranking2c(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2c');
        return $hsl;
      }
    
    function get_ranking2d(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2d');
        return $hsl;
      }
      
    function get_ranking2e(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2e');
        return $hsl;
      }
      
    function get_ranking2f(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2f');
        return $hsl;
      }
      
    function get_ranking2g(){
      $this->db->order_by($this->total, $this->order);
        $hsl=$this->db->get('v_ranking2g');
        return $hsl;
      }

      function get_ranking3a(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3a');
          return $hsl;
        }
        
      function get_ranking3b(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3b');
          return $hsl;
        }
        
      function get_ranking3c(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3c');
          return $hsl;
        }
      
      function get_ranking3d(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3d');
          return $hsl;
        }
        
      function get_ranking3e(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3e');
          return $hsl;
        }
        
      function get_ranking3f(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3f');
          return $hsl;
        }
        
      function get_ranking3g(){
        $this->db->order_by($this->total, $this->order);
          $hsl=$this->db->get('v_ranking3g');
          return $hsl;
        }

        function get_ranking4a(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4a');
            return $hsl;
          }
          
        function get_ranking4b(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4b');
            return $hsl;
          }
          
        function get_ranking4c(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4c');
            return $hsl;
          }
        
        function get_ranking4d(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4d');
            return $hsl;
          }
          
        function get_ranking4e(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4e');
            return $hsl;
          }
          
        function get_ranking4f(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4f');
            return $hsl;
          }
          
        function get_ranking4g(){
          $this->db->order_by($this->total, $this->order);
            $hsl=$this->db->get('v_ranking4g');
            return $hsl;
          }
          function get_ranking5a(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5a');
              return $hsl;
            }
            
          function get_ranking5b(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5b');
              return $hsl;
            }
            
          function get_ranking5c(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5c');
              return $hsl;
            }
          
          function get_ranking5d(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5d');
              return $hsl;
            }
            
          function get_ranking5e(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5e');
              return $hsl;
            }
            
          function get_ranking5f(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5f');
              return $hsl;
            }
            
          function get_ranking5g(){
            $this->db->order_by($this->total, $this->order);
              $hsl=$this->db->get('v_ranking5g');
              return $hsl;
            }
            function get_ranking6a(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6a');
                return $hsl;
              }
              
            function get_ranking6b(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6b');
                return $hsl;
              }
              
            function get_ranking6c(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6c');
                return $hsl;
              }
            
            function get_ranking6d(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6d');
                return $hsl;
              }
              
            function get_ranking6e(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6e');
                return $hsl;
              }
              
            function get_ranking6f(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6f');
                return $hsl;
              }
              
            function get_ranking6g(){
              $this->db->order_by($this->total, $this->order);
                $hsl=$this->db->get('v_ranking6g');
                return $hsl;
              }

              function get_all_siswa1a() {
                $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
                ->from('v_ranking1a');
                 return $this->datatables->generate();
          }
          function get_all_siswa1b() {
                $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
                ->from('v_ranking1b');
                 return $this->datatables->generate();
          }
          function get_all_siswa1c() {
                $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
                ->from('v_ranking1c');
                 return $this->datatables->generate();
          }
          function get_all_siswa1d() {
                $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
                ->from('v_ranking1d');
                 return $this->datatables->generate();
          }
          function get_all_siswa1e() {
                $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
                ->from('v_ranking1e');
                 return $this->datatables->generate();
          }
          function get_all_siswa1f() {
                $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
                ->from('v_ranking1f');
                 return $this->datatables->generate();
          }
          function get_all_siswa1g() {
                $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
                ->from('v_ranking1g');
                 return $this->datatables->generate();
          }
          function get_all_siswa2a() {
            $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
            ->from('v_ranking2a');
             return $this->datatables->generate();
      }
      function get_all_siswa2b() {
            $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
            ->from('v_ranking2b');
             return $this->datatables->generate();
      }
      function get_all_siswa2c() {
            $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
            ->from('v_ranking2c');
             return $this->datatables->generate();
      }
      function get_all_siswa2d() {
            $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
            ->from('v_ranking2d');
             return $this->datatables->generate();
      }
      function get_all_siswa2e() {
            $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
            ->from('v_ranking2e');
             return $this->datatables->generate();
      }
      function get_all_siswa2f() {
            $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
            ->from('v_ranking2f');
             return $this->datatables->generate();
      }
      function get_all_siswa2g() {
            $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
            ->from('v_ranking2g');
             return $this->datatables->generate();
      }
      function get_all_siswa3a() {
        $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
        ->from('v_ranking3a');
         return $this->datatables->generate();
  }
  function get_all_siswa3b() {
        $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
        ->from('v_ranking3b');
         return $this->datatables->generate();
  }
  function get_all_siswa3c() {
        $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
        ->from('v_ranking3c');
         return $this->datatables->generate();
  }
  function get_all_siswa3d() {
        $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
        ->from('v_ranking3d');
         return $this->datatables->generate();
  }
  function get_all_siswa3e() {
        $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
        ->from('v_ranking3e');
         return $this->datatables->generate();
  }
  function get_all_siswa3f() {
        $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
        ->from('v_ranking3f');
         return $this->datatables->generate();
  }
  function get_all_siswa3g() {
        $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
        ->from('v_ranking3g');
         return $this->datatables->generate();
  }
  function get_all_siswa4a() {
    $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
    ->from('v_ranking4a');
     return $this->datatables->generate();
}
function get_all_siswa4b() {
    $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
    ->from('v_ranking4b');
     return $this->datatables->generate();
}
function get_all_siswa4c() {
    $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
    ->from('v_ranking4c');
     return $this->datatables->generate();
}
function get_all_siswa4d() {
    $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
    ->from('v_ranking4d');
     return $this->datatables->generate();
}
function get_all_siswa4e() {
    $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
    ->from('v_ranking4e');
     return $this->datatables->generate();
}
function get_all_siswa4f() {
    $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
    ->from('v_ranking4f');
     return $this->datatables->generate();
}
function get_all_siswa4g() {
    $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
    ->from('v_ranking4g');
     return $this->datatables->generate();
}
function get_all_siswa5a() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking5a');
   return $this->datatables->generate();
}
function get_all_siswa5b() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking5b');
   return $this->datatables->generate();
}
function get_all_siswa5c() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking5c');
   return $this->datatables->generate();
}
function get_all_siswa5d() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking5d');
   return $this->datatables->generate();
}
function get_all_siswa5e() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking5e');
   return $this->datatables->generate();
}
function get_all_siswa5f() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking5f');
   return $this->datatables->generate();
}
function get_all_siswa5g() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking5g');
   return $this->datatables->generate();
}
function get_all_siswa6a() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking6a');
   return $this->datatables->generate();
}
function get_all_siswa6b() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking6b');
   return $this->datatables->generate();
}
function get_all_siswa6c() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking6c');
   return $this->datatables->generate();
}
function get_all_siswa6d() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking6d');
   return $this->datatables->generate();
}
function get_all_siswa6e() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking6e');
   return $this->datatables->generate();
}
function get_all_siswa6f() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking6f');
   return $this->datatables->generate();
}
function get_all_siswa6g() {
  $this->datatables->select('siswa_kode,siswa_nama,total_nilai')
  ->from('v_ranking6g');
   return $this->datatables->generate();
}


}
