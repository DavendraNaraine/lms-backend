<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Titles extends CI_Controller{
  
  public function get_title($title_id){
    $this->load->database();
    $this->load->model('titles_model');
    $data['response'] = $this->titles_model->getTitle($title_id);
    
    $this->load->view('api/api_view', $data);
  } 
  
  public function list_titles(){
    $this->load->database();
    $this->load->model('titles_model');
    $data['response'] = $this->titles_model->listTitles();
    
    $this->load->view('api/api_view', $data);
  }
  
  public function update_title($title_id){
    $this->load->database();
    $this->load->model('titles_model');
    $data['response'] = $this->titles_model->updateTitle($title_id);
    
    $this->load->view('api/api_view', $data);
  }
  
  public function create_title(){
    $this->load->database();
    $this->load->model('titles_model');
    $data['response'] = $this->titles_model->addTitle();
    
    $this->load->view('api/api_view', $data);
  }
}
?>