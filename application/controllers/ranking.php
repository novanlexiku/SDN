<?php
class ranking extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('datatables');
    $this->load->model('ranking_model');
  }
  function index(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Tabel ranking' ,
    );
    $x=array(
      'start' => $start,
      'ranking1a' => $this->ranking_model->get_ranking1a(),
      'ranking1b' => $this->ranking_model->get_ranking1b(),
      'ranking1c' => $this->ranking_model->get_ranking1c(),
      'ranking1d' => $this->ranking_model->get_ranking1d(),
      'ranking1e' => $this->ranking_model->get_ranking1e(),
      'ranking1f' => $this->ranking_model->get_ranking1f(),
      'ranking1g' => $this->ranking_model->get_ranking1g(),
      'ranking2a' => $this->ranking_model->get_ranking2a(),
      'ranking2b' => $this->ranking_model->get_ranking2b(),
      'ranking2c' => $this->ranking_model->get_ranking2c(),
      'ranking2d' => $this->ranking_model->get_ranking2d(),
      'ranking2e' => $this->ranking_model->get_ranking2e(),
      'ranking2f' => $this->ranking_model->get_ranking2f(),
      'ranking2g' => $this->ranking_model->get_ranking2g(),
      'ranking3a' => $this->ranking_model->get_ranking3a(),
      'ranking3b' => $this->ranking_model->get_ranking3b(),
      'ranking3c' => $this->ranking_model->get_ranking3c(),
      'ranking3d' => $this->ranking_model->get_ranking3d(),
      'ranking3e' => $this->ranking_model->get_ranking3e(),
      'ranking3f' => $this->ranking_model->get_ranking3f(),
      'ranking3g' => $this->ranking_model->get_ranking3g(),
      'ranking4a' => $this->ranking_model->get_ranking4a(),
      'ranking4b' => $this->ranking_model->get_ranking4b(),
      'ranking4c' => $this->ranking_model->get_ranking4c(),
      'ranking4d' => $this->ranking_model->get_ranking4d(),
      'ranking4e' => $this->ranking_model->get_ranking4e(),
      'ranking4f' => $this->ranking_model->get_ranking4f(),
      'ranking4g' => $this->ranking_model->get_ranking4g(),
      'ranking5a' => $this->ranking_model->get_ranking5a(),
      'ranking5b' => $this->ranking_model->get_ranking5b(),
      'ranking5c' => $this->ranking_model->get_ranking5c(),
      'ranking5d' => $this->ranking_model->get_ranking5d(),
      'ranking5e' => $this->ranking_model->get_ranking5e(),
      'ranking5f' => $this->ranking_model->get_ranking5f(),
      'ranking5g' => $this->ranking_model->get_ranking5g(),
      'ranking6a' => $this->ranking_model->get_ranking6a(),
      'ranking6b' => $this->ranking_model->get_ranking6b(),
      'ranking6c' => $this->ranking_model->get_ranking6c(),
      'ranking6d' => $this->ranking_model->get_ranking6d(),
      'ranking6e' => $this->ranking_model->get_ranking6e(),
      'ranking6f' => $this->ranking_model->get_ranking6f(),
      'ranking6g' => $this->ranking_model->get_ranking6g(),



);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking_view',$x);
  }
  function ranking1a(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 1-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking1a' => $this->ranking_model->get_ranking1a(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking1a_view',$x);
  }
  function ranking1b(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 1-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking1b' => $this->ranking_model->get_ranking1b(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking1b_view',$x);
  }
  function ranking1c(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 1-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking1c' => $this->ranking_model->get_ranking1c(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking1c_view',$x);
  }
  function ranking1d(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 1-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking1d' => $this->ranking_model->get_ranking1d(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking1d_view',$x);
  }
  function ranking1e(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 1-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking1e' => $this->ranking_model->get_ranking1e(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking1e_view',$x);
  }
  function ranking1f(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 1-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking1f' => $this->ranking_model->get_ranking1f(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking1f_view',$x);
  }
  function ranking1g(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 1-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking1g' => $this->ranking_model->get_ranking1g(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking1g_view',$x);
  }
  function ranking2a(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 2-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking2a' => $this->ranking_model->get_ranking2a(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking2a_view',$x);
  }
  function ranking2b(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 2-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking2b' => $this->ranking_model->get_ranking2b(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking2b_view',$x);
  }
  function ranking2c(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 2-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking2c' => $this->ranking_model->get_ranking2c(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking2c_view',$x);
  }
  function ranking2d(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 2-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking2d' => $this->ranking_model->get_ranking2d(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking2d_view',$x);
  }
  function ranking2e(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 2-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking2e' => $this->ranking_model->get_ranking2e(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking2e_view',$x);
  }
  function ranking2f(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 2-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking2f' => $this->ranking_model->get_ranking2f(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking2f_view',$x);
  }
  function ranking2g(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 2-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking2g' => $this->ranking_model->get_ranking2g(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking2g_view',$x);
  }
  function ranking3a(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 3-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking3a' => $this->ranking_model->get_ranking3a(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking3a_view',$x);
  }
  function ranking3b(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 3-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking3b' => $this->ranking_model->get_ranking3b(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking3b_view',$x);
  }
  function ranking3c(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 3-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking3c' => $this->ranking_model->get_ranking3c(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking3c_view',$x);
  }
  function ranking3d(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 3-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking3d' => $this->ranking_model->get_ranking3d(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking3d_view',$x);
  }
  function ranking3e(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 3-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking3e' => $this->ranking_model->get_ranking3e(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking3e_view',$x);
  }
  function ranking3f(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 3-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking3f' => $this->ranking_model->get_ranking3f(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking3f_view',$x);
  }
  function ranking3g(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 3-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking3g' => $this->ranking_model->get_ranking3g(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking3g_view',$x);
  }
  function ranking4a(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 4-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking4a' => $this->ranking_model->get_ranking4a(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking4a_view',$x);
  }
  function ranking4b(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 4-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking4b' => $this->ranking_model->get_ranking4b(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking4b_view',$x);
  }
  function ranking4c(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 4-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking4c' => $this->ranking_model->get_ranking4c(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking4c_view',$x);
  }
  function ranking4d(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 4-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking4d' => $this->ranking_model->get_ranking4d(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking4d_view',$x);
  }
  function ranking4e(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 4-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking4e' => $this->ranking_model->get_ranking4e(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking4e_view',$x);
  }
  function ranking4f(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 4-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking4f' => $this->ranking_model->get_ranking4f(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking4f_view',$x);
  }
  function ranking4g(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 4-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking4g' => $this->ranking_model->get_ranking4g(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking4g_view',$x);
  }
  function ranking5a(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 5-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking5a' => $this->ranking_model->get_ranking5a(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking5a_view',$x);
  }
  function ranking5b(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 5-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking5b' => $this->ranking_model->get_ranking5b(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking5b_view',$x);
  }
  function ranking5c(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 5-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking5c' => $this->ranking_model->get_ranking5c(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking5c_view',$x);
  }
  function ranking5d(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 5-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking5d' => $this->ranking_model->get_ranking5d(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking5d_view',$x);
  }
  function ranking5e(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 5-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking5e' => $this->ranking_model->get_ranking5e(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking5e_view',$x);
  }
  function ranking5f(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 5-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking5f' => $this->ranking_model->get_ranking5f(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking5f_view',$x);
  }
  function ranking5g(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 5-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking5g' => $this->ranking_model->get_ranking5g(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking5g_view',$x);
  }
  function ranking6a(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 6-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking6a' => $this->ranking_model->get_ranking6a(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking6a_view',$x);
  }
  function ranking6b(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 6-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking6b' => $this->ranking_model->get_ranking6b(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking6b_view',$x);
  }
  function ranking6c(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 6-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking6c' => $this->ranking_model->get_ranking6c(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking6c_view',$x);
  }
  function ranking6d(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 6-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking6d' => $this->ranking_model->get_ranking6d(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking6d_view',$x);
  }
  function ranking6e(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 6-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking6e' => $this->ranking_model->get_ranking6e(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking6e_view',$x);
  }
  function ranking6f(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 6-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking6f' => $this->ranking_model->get_ranking6f(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking6f_view',$x);
  }
  function ranking6g(){
    $start = intval($this->input->get('start'));
    $title = array(
      'title' => 'Ranking Kelas 6-A' ,
    );
    $x=array(
      'start' => $start,
      'ranking6g' => $this->ranking_model->get_ranking6g(),
      

);
    $this->load->view('cover/header', $title);
    $this->load->view('ranking/ranking6g_view',$x);
  }

  function get_siswa1a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa1a();
  }
  function get_siswa1b_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa1b();
  }
  function get_siswa1c_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa1c();
  }
  function get_siswa1d_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa1d();
  }
  function get_siswa1e_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa1e();
  }
  function get_siswa1f_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa1f();
  }
  function get_siswa1g_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa1g();
  }
  function get_siswa2a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa2a();
  }
  function get_siswa2b_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa2b();
  }
  function get_siswa2c_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa2c();
  }
  function get_siswa2d_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa2d();
  }
  function get_siswa2e_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa2e();
  }
  function get_siswa2f_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa2f();
  }
  function get_siswa2g_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa2g();
  }
  function get_siswa3a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa3a();
  }
  function get_siswa3b_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa3b();
  }
  function get_siswa3c_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa3c();
  }
  function get_siswa3d_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa3d();
  }
  function get_siswa3e_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa3e();
  }
  function get_siswa3f_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa3f();
  }
  function get_siswa3g_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa3g();
  }
  function get_siswa4a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa4a();
  }
  function get_siswa4b_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa4b();
  }
  function get_siswa4c_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa4c();
  }
  function get_siswa4d_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa4d();
  }
  function get_siswa4e_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa4e();
  }
  function get_siswa4f_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa4f();
  }
  function get_siswa4g_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa4g();
  }
  function get_siswa5a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa5a();
  }
  function get_siswa5b_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa5b();
  }
  function get_siswa5c_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa5c();
  }
  function get_siswa5d_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa5d();
  }
  function get_siswa5e_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa5e();
  }
  function get_siswa5f_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa5f();
  }
  function get_siswa5g_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa5g();
  }
  function get_siswa6a_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa6a();
  }
  function get_siswa6b_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa6b();
  }
  function get_siswa6c_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa6c();
  }
  function get_siswa6d_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa6d();
  }
  function get_siswa6e_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa6e();
  }
  function get_siswa6f_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa6f();
  }
  function get_siswa6g_json() { //data siswa by JSON object
    header('Content-Type: application/json');
    echo $this->ranking_model->get_all_siswa6g();
  }

  function simpan(){ //function simpan data
    $data=array(
      'siswa_kode'     => $this->input->post('siswa_kode'),
      'siswa_nama'     => $this->input->post('siswa_nama')

    );
    $this->db->insert('siswa', $data);
    $this->session->set_flashdata('message', 'suksestambah');
    redirect('ranking');
  }

  function update1(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama1'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia1' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris1' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA1' => $this->input->post('nilai_IPA'),
  'nilai_IPS1' => $this->input->post('nilai_IPS'),
  'nilai_matematika1' => $this->input->post('nilai_matematika'),
  'nilai_PKN1'  => $this->input->post('nilai_PKN'),
  'nilai_TIK1' => $this->input->post('nilai_TIK'),
      
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('ranking');
  }
  function update2(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama2'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia2' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris2' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA2' => $this->input->post('nilai_IPA'),
  'nilai_IPS2' => $this->input->post('nilai_IPS'),
  'nilai_matematika2' => $this->input->post('nilai_matematika'),
  'nilai_PKN2'  => $this->input->post('nilai_PKN'),
  'nilai_TIK2' => $this->input->post('nilai_TIK'),
      
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('ranking');
  }
  function update3(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama3'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia3' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris3' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA3' => $this->input->post('nilai_IPA'),
  'nilai_IPS3' => $this->input->post('nilai_IPS'),
  'nilai_matematika3' => $this->input->post('nilai_matematika'),
  'nilai_PKN3'  => $this->input->post('nilai_PKN'),
  'nilai_TIK3' => $this->input->post('nilai_TIK'),
      
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('ranking');
  }
  function update4(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama4'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia4' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris4' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA4' => $this->input->post('nilai_IPA'),
  'nilai_IPS4' => $this->input->post('nilai_IPS'),
  'nilai_matematika4' => $this->input->post('nilai_matematika'),
  'nilai_PKN4'  => $this->input->post('nilai_PKN'),
  'nilai_TIK4' => $this->input->post('nilai_TIK'),
      
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('ranking');
  }
  function update5(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama5'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia5' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris5' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA5' => $this->input->post('nilai_IPA'),
  'nilai_IPS5' => $this->input->post('nilai_IPS'),
  'nilai_matematika5' => $this->input->post('nilai_matematika'),
  'nilai_PKN5'  => $this->input->post('nilai_PKN'),
  'nilai_TIK5' => $this->input->post('nilai_TIK'),
      
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('ranking');
  }
  function update6(){ //function update data
    $kode=$this->input->post('kode_siswa');
    $data=array(
  'nilai_agama6'  => $this->input->post('nilai_agama') ,
  'nilai_b_indonesia6' => $this->input->post('nilai_b_indonesia') ,
  'nilai_b_inggris6' => $this->input->post('nilai_b_inggris') ,
  'nilai_IPA6' => $this->input->post('nilai_IPA'),
  'nilai_IPS6' => $this->input->post('nilai_IPS'),
  'nilai_matematika6' => $this->input->post('nilai_matematika'),
  'nilai_PKN6'  => $this->input->post('nilai_PKN'),
  'nilai_TIK6' => $this->input->post('nilai_TIK'),
      
    );
    $this->db->where('siswa_kode',$kode);
    $this->db->update('siswa', $data);
    $this->session->set_flashdata('message', 'suksesupdate');
    redirect('ranking');
  }


function delete(){ //function hapus data
    $kode=$this->input->post('siswa_kode');
    $this->db->where('siswa_kode',$kode);
    $this->db->delete('siswa');
    $this->session->set_flashdata('message', 'sukseshapus');
    redirect('ranking');
  }

}
