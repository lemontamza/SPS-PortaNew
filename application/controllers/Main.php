<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('main/header');
    $this->load->view('main/index');
    $this->load->view('main/footer');
  }
  function viewgpa() {
    $this->load->view('main/header');
    $this->load->view('main/viewgpa');
    $this->load->view('main/footer');
  }

}
