<?php
class Files extends controller {
	public function __construct() {
		if(!isset($_SESSION['user_id'])){
			redirect('users/login');
		}
		$this->fileModel = $this->model('File');
		$this->classFileModel = $this->model('ClassFiles');
		$this->userClassModel = $this->model('UserClass');
	}

	public function index() {
		$files = $this->fileModel->getFilesByUserId($_SESSION['user_id']);

		$data = [
			'files' => $files
		];

		$this->view('files/index', $data);
		// $files = $this->fileModel->getFilesByUserId($_SESSION['user_id']);
		// echo json_encode($files);

		//$this->view('files/index');
	}

	public function getFilesByUserId() {
		$files = $this->fileModel->getFilesByUserId($_SESSION['user_id']);
		echo json_encode($files);
	}

	public function getAllFileByClassId($id) {
		$files = $this->fileModel->getAllFileByClassId($id);
		echo json_encode($files);
	}

	public function addFile() {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);


			$allowed_file_extension = array(
				"txt", "xls", "xlsx",
				"ppt", "pptx", "doc",
				"docx", "pdf", "zip",
				"png", "jpg", "jpeg",
				"JPG", "gif"
			);

			$response = array(
				'success' => '',
				'error' => ''
			);


			if (!in_array($file_extension, $allowed_file_extension)) {
				$response['error'] = 'Unkown file extension.';
			}

			if (file_exists(dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $_FILES['file']['name'])) {
				$response['error']	= 'This file is already exist.';
			}

			if ( 0 < $_FILES['file']['error'] ) {
				$response['error'] = 'Error: ' . $_FILES['file']['error'];
			}

			if (($_FILES["file"]["size"] > 21000000)) {
				$response['error'] = "File size must less than 1 MB.";
			}

			if (empty($response['error'])) {

				$file_name = $_FILES["file"]["name"];
				$tmp_name = $_FILES["file"]["tmp_name"];

				$new_file = uniqid() . '.' . $file_extension;
				$upload_path = dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $file_name; // $new_file;

				move_uploaded_file($tmp_name, $upload_path);

				// move_uploaded_file($_FILES['file']['tmp_name'], dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $_FILES['file']['name']);

				// move_uploaded_file($_FILES['file']['tmp_name'], );

				$file = dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $file_name; // $new_file;

				$data = [
					'name' => $file_name, // $new_file,
					'size' => $this->fileSizeUnit($file),
					'user_id' => $_SESSION['user_id']
				];

				if ($this->fileModel->addFile($data)) {
					$response['success'] = "File uploaded successfully.";
				}
			}
			
			echo json_encode($response);
		} else {

		}
	}

	public function addClassFile() {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {

			$file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

			$classes = $_POST['classes'];

			$allowed_file_extension = array(
				"txt", "xls", "xlsx",
				"ppt", "pptx", "doc",
				"docx", "pdf", "zip",
				"png", "jpg", "jpeg", 
				"JPG", "gif"
			);

			$response = array(
				'success' => '',
				'error' => ''
			);


			if (!in_array($file_extension, $allowed_file_extension)) {
				$response['error'] = 'Unkown file extension.';
			}

			if (file_exists(dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $_FILES['file']['name'])) {
				$response['error']	= 'This file is already exist.';
			}

			if ( 0 < $_FILES['file']['error'] ) {
				$response['error'] = 'Error: ' . $_FILES['file']['error'];
			}

			if (($_FILES["file"]["size"] > 21000000)) {
				$response['error'] = "File size must less than 1 MB.";
			}

			if (empty($response['error'])) {

				$file_name = $_FILES["file"]["name"];
				$tmp_name = $_FILES["file"]["tmp_name"];

				// $new_file = uniqid() . '.' . $file_extension;
				$upload_path = dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $file_name;// $new_file;

				move_uploaded_file($tmp_name, $upload_path);

				// move_uploaded_file($_FILES['file']['tmp_name'], dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $_FILES['file']['name']);

				// move_uploaded_file($_FILES['file']['tmp_name'], );

				$file = dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $file_name;// $new_file;

				$data = [
					'name' => $file_name, // $new_file,
					'size' => $this->fileSizeUnit($file),
					'user_id' => $_SESSION['user_id']
				];

				if ($this->fileModel->addFile($data)) {

					$file = $this->fileModel->getLastInsertedFileId($_SESSION['user_id']);

					$classes = json_decode($_POST['classes'], true);

					for ($i=0; $i < count($classes); $i++) { 
						$classLecture = [
							'file_id' => $file->id,
							'class_id' => $classes[$i]['class_id']
						];

						if ($this->classFileModel->addClassLecture($classLecture)) {
				 			$response['success'] = 'Class lecture added successfully.';
						}
					}

				}
			}

			echo json_encode($response);
		} else {

		}
	}

	public function fileSizeUnit($file) {
		$size = filesize($file);
		$units = array('B', 'KB', 'MB');
		$power = $size > 0 ? floor(log($size, 1024)) : 0;
		return number_format($size/pow(1024, $power), 2, '.', '.') . ' ' . $units[$power];
	}

	public function getClassByFiles($id) {
		$classes = $this->fileModel->getClassByFiles($id);
		echo json_encode($classes);
	}

	public function	countAllFilesByUserId() {
		$files = $this->fileModel->countAllFilesByUserId($_SESSION['user_id']);
		echo json_encode($files);
	}

	public function deleteFile() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$files = $this->fileModel->deleteFile($_POST['file_id']);
			unlink(dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $_POST['file_name']);
			// unlink(dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $_FILES['file']['name']);
			echo json_encode($files);
		} else {

		}
	}

	public function validateFile() {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);


			$allowed_file_extension = array(
				"txt", "xls", "xlsx",
				"ppt", "pptx", "doc",
				"docx", "pdf", "zip",
				"png", "jpg", "jpeg",
				"JPG", "gif"
			);

			$response = array(
				'success' => '',
				'error' => ''
			);


			if (!in_array($file_extension, $allowed_file_extension)) {
				$response['error'] = 'Unkown file extension.';
			}

			if (file_exists(dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $_FILES['file']['name'])) {
				$response['error']	= 'This file is already exist.';
			}

			if ( 0 < $_FILES['file']['error'] ) {
				$response['error'] = 'Error: ' . $_FILES['file']['error'];
			}

			if (($_FILES["file"]["size"] > 21000000)) {
				$response['error'] = "File size must less than 1 MB.";
			}

			if (empty($response['error'])) {

				// move_uploaded_file($_FILES['file']['tmp_name'], dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $_FILES['file']['name']);

				// $file = dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $_FILES['file']['name'];

				// $data = [
				// 	'name' => $_FILES["file"]["name"],
				// 	'size' => $this->fileSizeUnit($file),
				// 	'user_id' => $_SESSION['user_id']
				// ];

				// if ($this->fileModel->addFile($data)) {
				$response['success'] = "File uploaded successfully.";
				// }
			}

			echo json_encode($response);
		} else {

		}
	}

	public function addClassLecture() {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$classes = $_POST['classes'];

			if (is_array($classes) || is_object($classes)) {
				foreach ($classes as $class) {
					$classLecture = [
						'file_id' => $_POST['file_id'],
						'class_id' => $class['class_id']
					];

					$this->classFileModel->addClassLecture($classLecture);
					$response['success'] = "Class lecture assign successfully.";
				}
			}

			echo json_encode($response);
		} else {

		}
	}

	public function getAllClassLecture() {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$files = $this->classFileModel->getAllClassLecture($_SESSION['class_id']);
			echo json_encode($files);
		} else {

		}
	}
}

