<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

    public function index(){
        $this->load->database();
        $this->load->model('users_model');
        $this->load->view('main/header');
        $this->load->view('main/navbar');
        $this->load->view('main/user');
        $this->load->view('main/footer');

        //  $this->output->enable_profiler(TRUE);
    }

    public function viewUser(){
        $this->load->database();
        $this->load->model('users_model');
        $this->load->view('main/header');
        $this->load->view('main/navbar');
        $this->load->view('main/viewuser');
        $this->load->view('main/footer');

        //  $this->output->enable_profiler(TRUE);
    }

    public function viewUserSuccess(){
        $this->load->database();
        $this->load->model('users_model');
        $this->load->view('main/header');
        $this->load->view('main/navbar');
        $this->load->view('responses/success/user_success');
        $this->load->view('main/user');
        $this->load->view('main/footer');

        //$this->output->enable_profiler(TRUE);
    }

    public function viewUserFail(){
        $this->load->database();
        $this->load->model('users_model');
        $this->load->view('main/header');
        $this->load->view('main/navbar');
        $this->load->view('responses/fail/user_fail');
        $this->load->view('main/user');
        $this->load->view('main/footer');

        //$this->output->enable_profiler(TRUE);
    }
}
?>