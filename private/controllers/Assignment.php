<?php 
class Assignment extends Controller {
	public function __construct() {
		if(!isset($_SESSION['user_id'])){
        	redirect('users/login');
      	}

      	$this->assignmentModel = $this->model('Assignments');
      	$this->classAssignmentModel = $this->model('ClassAssignments');
	}

	public function index() {
		$this->view('assignment/index');
	}

	public function add() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$_POST = filter_input_array(INPUT_POST);

			$data = [
				'user_id' => $_SESSION['user_id'],
				'title' => $_POST['title'],
				'description'  => $_POST['description'],
				'instruction' => $_POST['instruction'],
				'class_id' => $_POST['class_id'],
				'message' => ''
			];

			if (empty($data['title']) && empty($data['instruction'])) {
				$data['message'] = 'Please provide all the required fields.';
			} else {
				if (empty($data['title'])) {
					$data['message'] = 'Please enter title.';
				}

				if (empty($data['instruction'])) {
					$data['message'] = 'Please enter instruction.';
				}
			}


			if (empty($data['message'])) {
				$is_true = $this->assignmentModel->add($data);
				// if($is_true) {

					if (!empty($data['class_id'])) {
						$assignment = $this->assignmentModel->getLastAssignmentId($_SESSION['user_id']);
						$class_id = $data['class_id'];

						$data1 = [
							'class_id' => $class_id,
							'assignment_id' => $assignment->id
						];

						$is_true1 = $this->classAssignmentModel->add($data1);

						// if ($is_true) {

						// }

						echo json_encode($data1);
					}
				// } else {
				// 	echo json_encode($data);
				// }


			} else {
				echo json_encode($data);
			}
			

		} else {
			redirect('admin');
		}
	}

	public function get() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$assignments = $this->assignmentModel->get($_SESSION['user_id']);
			echo json_encode($assignments);
		} else {
			redirect('assignment');
		}
	}

	public function show($id) {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$assignment = $this->assignmentModel->show($id);

		// $data = [
		// 	'admin' => $admin
		// ];

		echo json_encode($admin);


		// $this->view('admin/show', $data);

		} else {
			redirect('admin');
		}
	}

	public function delete($id) {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$assignment = $this->assignmentModel->delete($id);

		} else {
			redirect('admin');
		}
	}
}