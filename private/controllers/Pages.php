<?php
class Pages extends Controller {

  public function __construct() {
  }

  public function index() {
    if(isset($_SESSION['user_id'])){
      redirect('classrooms');
    }

    redirect('users');
      $this->view('pages/index');
  }

  public function about() {
    if ($_SESSION['user_type_id'] == 1) {
      $this->view('pages/about_admin');
    } else if ($_SESSION['user_type_id'] == 2) {
      $this->view('pages/about_professor');
    } else if ($_SESSION['user_type_id'] == 3) {
      $this->view('pages/about_student');
    }

  }

  public function help() {
    $this->view('pages/help');
  }

}