<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bagikelas extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('bagikelas_model');
  }
  function index(){


    $title = array(
      'title' => 'Tabel Bagikelas' ,
    );
    $x = array (
      'Total_rows' => $this->bagikelas_model->get_total(),
    'role'=>    $this->bagikelas_model->get_role(),
    'kelas'=>    $this->bagikelas_model->get_kelas()
  );
    $this->load->view('cover/header', $title);
    $this->load->view('bagikelas/bagikelas_view',$x);
  }

  function get_siswa_json() { //data data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_siswa();
  }
  //AMBIL DATA WALIKELAS 1 DARI MODEL
  function get_kelas1a_json() { //data kelas1a by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas1a();
  }
  function get_kelas1b_json() { //data kelas1b by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas1b();
  }
  function get_kelas1c_json() { //data kelas1c by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas1c();
  }
  function get_kelas1d_json() { //data kelas1a by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas1d();
  }
  function get_kelas1e_json() { //data kelas1b by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas1e();
  }
  function get_kelas1f_json() { //data kelas1c by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas1f();
  }
  function get_kelas1g_json() { //data kelas1c by JSON object
    header('Content-Type: application/json');
    echo $this->bagikelas_model->get_all_kelas1g();
  }

//AMBIL DATA WALIKELAS 2 DARI MODEL
function get_kelas2a_json() { //data kelas1a by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas2a();
}
function get_kelas2b_json() { //data kelas1b by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas2b();
}
function get_kelas2c_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas2c();
}
function get_kelas2d_json() { //data kelas1a by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas2d();
}
function get_kelas2e_json() { //data kelas1b by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas2e();
}
function get_kelas2f_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas2f();
}
function get_kelas2g_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas2g();
}

//AMBIL DATA WALIKELAS 3 DARI MODEL
function get_kelas3a_json() { //data kelas1a by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas3a();
}
function get_kelas3b_json() { //data kelas1b by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas3b();
}
function get_kelas3c_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas3c();
}
function get_kelas3d_json() { //data kelas1a by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas3d();
}
function get_kelas3e_json() { //data kelas1b by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas3e();
}
function get_kelas3f_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas3f();
}
function get_kelas3g_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas3g();
}

//AMBIL DATA WALIKELAS 4 DARI MODEL
function get_kelas4a_json() { //data kelas1a by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas4a();
}
function get_kelas4b_json() { //data kelas1b by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas4b();
}
function get_kelas4c_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas4c();
}
function get_kelas4d_json() { //data kelas1a by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas4d();
}
function get_kelas4e_json() { //data kelas1b by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas4e();
}
function get_kelas4f_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas4f();
}
function get_kelas4g_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas4g();
}

//AMBIL DATA WALIKELAS 5 DARI MODEL
function get_kelas5a_json() { //data kelas1a by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas5a();
}
function get_kelas5b_json() { //data kelas1b by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas5b();
}
function get_kelas5c_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas5c();
}
function get_kelas5d_json() { //data kelas1a by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas5d();
}
function get_kelas5e_json() { //data kelas1b by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas5e();
}
function get_kelas5f_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas5f();
}
function get_kelas5g_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas5g();
}

//AMBIL DATA WALIKELAS 6 DARI MODEL
function get_kelas6a_json() { //data kelas1a by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas6a();
}
function get_kelas6b_json() { //data kelas1b by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas6b();
}
function get_kelas6c_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas6c();
}
function get_kelas6d_json() { //data kelas1a by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas6d();
}
function get_kelas6e_json() { //data kelas1b by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas6e();
}
function get_kelas6f_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas6f();
}
function get_kelas6g_json() { //data kelas1c by JSON object
  header('Content-Type: application/json');
  echo $this->bagikelas_model->get_all_kelas6g();
}

  function update(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
      'siswa_nama'     => $this->input->post('nama_siswa'),
      'siswa_kelas_id'     => $this->input->post('kelas_siswa'),
      'siswa_role_id' => $this->input->post('role')
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('bagikelas');
  }



}
