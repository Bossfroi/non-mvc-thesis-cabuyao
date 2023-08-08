<?php
class Rubrics extends Controller {
	public function __construct() {
		if(!isset($_SESSION['user_id'])){
        	redirect('users/login');
      	}
	}

	public function index() {
		$this->view('rubrics/index');
	}

	public function createRubrics() {
  		$this->view('rubrics/createRubrics');
  	}


	// public function users() {
	// 	$this->view('admins/users');
	// }
}