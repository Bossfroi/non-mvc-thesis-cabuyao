<?php
Class Errors extends Controller {
	public function index() {
		$this->view('errors/404');
	}

}