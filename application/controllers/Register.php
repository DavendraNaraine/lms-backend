<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
  
  public function index(){
    $this->load->database();
    $this->load->model('registers_model');
    $this->load->view('main/header');
    $this->load->view('main/register');
    $this->load->view('main/footer');
    
    //$this->output->enable_profiler(TRUE);
  }
}
?>