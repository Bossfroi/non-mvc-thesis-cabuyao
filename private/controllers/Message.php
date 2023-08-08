<?php
class Message extends Controller {
	public function __construct() {
		if(!isset($_SESSION['user_id'])){
        	redirect('users/login');
      	}
		$this->messageModel = $this->model('Messages');
	}

	public function index() {
		$this->view('messages/index');
	}

	public function getAllUser() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$user_type = $_SESSION['user_type_id'];
			if ($user_type == 1) {
				$this->messageModel->getAllUser();
			} else if ($user_type == 2) {
				$users = $this->messageModel->getAllStudents($_SESSION['user_id']);
			} else if ($user_type == 3) {
				$users = $this->messageModel->getAllClassmates($_SESSION['user_id']);
			}

			echo json_encode($users);

		} else {

		}
	}

	public function getUserMessage() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$sender = $_SESSION['user_id'];
			$receiver = $_POST['id'];
			
			$messages = $this->messageModel->getUserMessage($sender, $receiver);

			echo json_encode($messages);

		} else {

		}
	}

	public function getUserInfo() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$user = $this->messageModel->getUserInfo($_POST['id']);

			echo json_encode($user);

		} else {

		}
	}

	public function sendMessage() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$sender = $_SESSION['user_id'];
			$receiver = $_POST['id'];
			$text = $_POST['text'];

			if ($this->messageModel->sendMessage($sender, $receiver, $text)) {
				$txt = [
					'message' => 'okay'
				];
			} else {
				$txt = [
					'message' => 'SAD'
				];
			}

			
			echo json_encode($txt);

		} else {

		}
	}
}