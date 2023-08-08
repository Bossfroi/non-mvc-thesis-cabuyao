<?php
class Users extends Controller {
  public function __construct() {
    $this->userModel = $this->model('User');
    $this->userLogModel = $this->model('UserLog');
  }

  public function register() {
    if($this->isLoggedIn()) {
      redirect('pages/about');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'username' => trim($_POST['username']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'username_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      if(empty($data['username'])) {
        $data['username_err'] = 'Please enter your username';
      } else {
        // if username is not already existing in the database
        // it will return a messsage error that a username is
        // in valid. It means that the user is not part of the university.
        if($this->userModel->findUserByUsername($data['username'])) {
          $data['username_err'] = 'Username is invalid.';
        } else {

          if ($this->userModel->checkUserStatus($data['username'], 0)) {
            $data['username_err'] = 'Username is already registered.';
          }
        }
      }

      if(empty($data['password'])) {
        $data['password_err'] = 'Please enter a password.';     
      } elseif(strlen($data['password']) < 6){
        $data['password_err'] = 'Password must have atleast 6 characters.';
      }

      if(empty($data['confirm_password'])) {
        $data['confirm_password_err'] = 'Please enter confirm password.';     
      } else {
        if($data['password'] != $data['confirm_password']) {
          $data['confirm_password_err'] = 'Password do not match.';
        }
      }

      if(empty($data['username_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        // $user = $this->userModel->register($data);

        if($this->userModel->register($data)) {
          flash('register_success', 'You are now registered and can log in');
          redirect('users/login');
        } else {
          die('Something went wrong');
        }

      } else {
        $this->view('users/register', $data);
      }
    } else {

      $data = [
        'username' => '',
        'password' => '',
        'confirm_password' => '',
        'username_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
      ];

      $this->view('users/register', $data);
    }
  }

  public function login() {
    if($this->isLoggedIn()) {
      redirect('pages/about'); // try lang
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [       
        'username' => trim($_POST['username']),
        'password' => trim($_POST['password']),        
        'username_err' => '',
        'password_err' => '',       
      ];

      if(empty($data['username'])) {
        $data['username_err'] = 'Please enter username.';
      } else {
        if($this->userModel->checkUserStatus($data['username'], 1)) {
          $data['username_err'] = 'This username is not registered.';
        }
        if ($this->userModel->findUserByUsername($data['username'])) {
          $data['username_err'] = 'This username is invalid.';
        }
      }

      if(empty($data['password'])){
        $data['password_err'] = 'Please enter password.';
      }

      if(empty($data['username_err']) && empty($data['password_err'])) {

        $loggedInUser = $this->userModel->login($data['username'], $data['password']);

        if($loggedInUser) {
          $this->createUserSession($loggedInUser);

          $this->userLogModel->login($_SESSION['user_id']);

          redirect('pages/about');
        } else {
          $data['password_err'] = 'Password incorrect.';
          $this->view('users/login', $data);
        }

      } else {
        $this->view('users/login', $data);
      }

    } else {

      $data = [
        'username' => '',
        'password' => '',
        'username_err' => '',
        'password_err' => '',
      ];

      $this->view('users/login', $data);
    }
  }

  public function index() {
    if(!$this->isLoggedIn()){
        redirect('users/login');
    } else {
      if ($_SESSION['user_type_id'] == 1) {
        $this->view('users/index');
      } else {
        redirect('pages/about');
      }
    }
  }

  public function add() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'user_id' => trim($_POST['user_id']),
        'lastname'  => trim($_POST['lastname']),
        'firstname' => trim($_POST['firstname']),
        'middlename' => trim($_POST['middlename']),
        'address' => trim($_POST['address']),
        'contact_no' => trim($_POST['contact_no']),
        'email' => trim($_POST['email']),
        'user_type_id' => trim($_POST['user_type_id']),
        'profile' => 'default_user_profile.png',
        'user_id_err' => '',
        'lastname_err'  => '',
        'firstname_err' => '',
        // 'middlename_err' => '',
        'address_err' => '',
        'contact_no_err' => '',
        'email_err' => '',
        'user_type_id_err' => '',
        'success_message' => ''
      ];

      if(empty($data['user_id'])) {
        $data['user_id_err'] = 'Please enter user ID.';
      } else { 
        if (!$this->userModel->findUserByUsername($data['user_id'])) {
          $data['user_id_err'] = 'This user ID is already existed .';
        }
      }

      if (empty($data['firstname'])) {
        $data['firstname_err'] = 'Please enter user first name.';
      }

      if (empty($data['lastname'])) {
        $data['lastname_err'] = 'Please enter user last name.';
      }

      if (empty($data['user_type_id'])) {
        $data['user_type_id_err'] = 'Please choose user type.';
      }

      if (empty($data['contact_no'])) {
        $data['contact_no_err'] = 'Please enter user contact number.';
      }

      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter user email.';
      }

       if (empty($data['address'])) {
        $data['address_err'] = 'Please enter user address.';
      }

      if (empty($data['user_id_err']) && empty($data['lastname_err']) && empty($data['firstname_err']) && empty($data['address_err']) && empty($data['contact_no_err']) && empty($data['user_type_id_err']) && empty($data['email_err'])) {
        $password = ['PnCadmin123', 'PnCprof123', 'PnCstud123'];
        $data['password'] = password_hash($password[$data['user_type_id'] - 1], PASSWORD_DEFAULT);
        if($this->userModel->addUser($data)) {
            $data = [
              'success_message' => 'Successfully add new user'
            ];

            echo json_encode($data);
        } else {
          echo json_encode($data);
        }
      } else {
        echo json_encode($data);
        
      }
      
      // echo $data;
    } else {

    }
  }

  public function fetchAll($userTypeId) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $users = $this->userModel->getAllUserByUserType($userTypeId);
      echo json_encode($users); 
    } else {
      redirect('pages/about');
    }
  }

  public function getAllUser() {
    $users = $this->userModel->getAllUser();
    echo json_encode($users); 
  }

  public function getUserByUserId() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $user = $this->userModel->getUserByUserId($_POST['id']);
      echo json_encode($user); 
    } else {
      redirect('pages/about');
    }
  }

  public function edit() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // $data = array(
      //   'id' => $_POST['id'],
      //   'user_id' => $_POST['user_id'],
      //   'lastname'  => $_POST['lastname'],
      //   'firstname' => $_POST['firstname'],
      //   'middlename' => $_POST['middlename'],
      //   'address' => $_POST['address'],
      //   'contact_no' => $_POST['contact_no'],
      //   'user_type_id' => $_POST['user_type_id']
      // );


      // if (!empty($data['user_id']) && !empty($data['lastname']) && !empty($data['firstname']) && !empty($data['middlename']) && !empty($data['address']) && !empty($data['contact_no']) && !empty($data['user_type_id'])) {

      //   if($this->userModel->updateUser($data)) {

      //   } else {
      //     echo json_encode($data);
      //   }

      // } else {
      //   echo json_encode($data);
        
      // }

      $data = [
        'id' => $_POST['id'],
        'user_id' => trim($_POST['user_id']),
        'lastname'  => trim($_POST['lastname']),
        'firstname' => trim($_POST['firstname']),
        'middlename' => trim($_POST['middlename']),
        'address' => trim($_POST['address']),
        'contact_no' => trim($_POST['contact_no']),
        'email' => trim($_POST['email']),
        'user_type_id' => trim($_POST['user_type_id']),
        // 'profile' => 'default_user_profile.png',
        'user_id_err' => '',
        'lastname_err'  => '',
        'firstname_err' => '',
        // 'middlename_err' => '',
        'address_err' => '',
        'contact_no_err' => '',
        'email_err' => '',
        'user_type_id_err' => '',
        'success_message' => ''
      ];

      if(empty($data['user_id'])) {
        $data['user_id_err'] = 'Please enter user ID.';
      }
      // else { 
      //   if (!$this->userModel->findUserByUsername($data['user_id'])) {
      //     $data['user_id_err'] = 'This user ID is already existed .';
      //   }
      // }

      if (empty($data['firstname'])) {
        $data['firstname_err'] = 'Please enter user first name.';
      }

      if (empty($data['lastname'])) {
        $data['lastname_err'] = 'Please enter user last name.';
      }

      if (empty($data['user_type_id'])) {
        $data['user_type_id_err'] = 'Please choose user type.';
      }

      if (empty($data['contact_no'])) {
        $data['contact_no_err'] = 'Please enter user contact number.';
      }

      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter user email.';
      }

       if (empty($data['address'])) {
        $data['address_err'] = 'Please enter user address.';
      }

      if (empty($data['user_id_err']) && empty($data['lastname_err']) && empty($data['firstname_err']) && empty($data['address_err']) && empty($data['contact_no_err']) && empty($data['user_type_id_err']) && empty($data['email_err'])) {
        $password = ['PnCadmin123', 'PnCprof123', 'PnCstud123'];
        $data['password'] = password_hash($password[$data['user_type_id'] - 1], PASSWORD_DEFAULT);
        if($this->userModel->updateUser($data)) {
            $data = [
              'success_message' => 'Successfully updated user\'s information'
            ];
            
            echo json_encode($data);
        } else {
          echo json_encode($data);
        }
      } else {
        echo json_encode($data);
        
      }

      
      // echo $data;
    } else {

    }
  }

  public function delete($id) {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($this->userModel->deleteUser($id)){
          
        } else {
          die('Something went wrong');
        }
      } else {
      }
  }

  public function createUserSession($user) {
    $_SESSION['user_id'] = $user->user_id;
    $_SESSION['profile'] = $user->profile;
    $_SESSION['username'] = $user->username; 
    $_SESSION['firstname'] = $user->firstname;
    $_SESSION['lastname'] = $user->lastname;
    $_SESSION['user_type'] = $user->user_type;
    $_SESSION['user_type_id'] = $user->user_type_id;
    //redirect('classrooms');
  }

  public function logout() {
    $this->userLogModel->logout($_SESSION['user_id']);

    unset($_SESSION['user_id']);
    unset($_SESSION['profile']);
    unset($_SESSION['username']);
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['user_type']);
    unset($_SESSION['user_type_id']);
    session_destroy();
    redirect('users/login');
  }

  public function isLoggedIn() {
    if(isset($_SESSION['user_id'])) {
      return true;
    } else {
      return false;
    }
  }

  public function checkUserType($user) {
    $type = $user->user_type_id;
    switch ($type) {
      case 1:
        redirect('administrators');
        break;
      case 2:
        redirect('professors');
        break;
      case 3:
        redirect('students');
        break;
      default:
        redirect('users/login');
        break;
    }
  }

  public function profile() {
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $user = $this->userModel->getUserByUserId($_SESSION['user_id']);
      $data = [
        'user' => $user
      ];
      $this->view('users/profile', $data);
    // } else {

    // }
  }

  public function getYearCreated() {
    $total = $this->userModel->getYearCreated($_SESSION['user_id']);
    echo json_encode($total);
  }

  public function countRegisteredUser() {
    $total = $this->userModel->countRegisteredUser($_SESSION['user_id']);
    echo json_encode($total);
  }

  public function countUnregisteredUser() {
    $total = $this->userModel->countUnregisteredUser($_SESSION['user_id']);
    echo json_encode($total);
  }

  public function countUserDeletedLogically() {
    $total = $this->userModel->countUserDeletedLogically($_SESSION['user_id']);
    echo json_encode($total);
  }

  public function countAllActiveUsers() {
    $total = $this->userModel->countAllActiveUsers($_SESSION['user_id']);
    echo json_encode($total);
  }

  public function countAllProfessors() {
    $total = $this->userModel->countAllProfessors($_SESSION['user_id']);
    echo json_encode($total);
  }

  public function countAllStudents() {
    $total = $this->userModel->countAllStudents($_SESSION['user_id']);
    echo json_encode($total);
  }
  public function countAllUsers() {
    $total = $this->userModel->countAllUsers($_SESSION['user_id']);
    echo json_encode($total);
  }

  public function updateUserProfile() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
      $allowed_file_extension = array(
        "txt", "xls", "xlsx",
        "ppt", "pptx", "doc",
        "docx", "pdf", "zip",
        "png", "jpg", "jpeg", "gif"
      );

      $response = array(
        'success' => '',
        'error' => ''
      );


      if (!in_array($file_extension, $allowed_file_extension)) {
        $response['error'] = 'Unkown file extension.';
      }

      if (file_exists(dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $_FILES['file']['name'])) {
        $response['error']  = 'This file is already exist.';
      }

      if ( 0 < $_FILES['file']['error'] ) {
        $response['error'] = 'Error: ' . $_FILES['file']['error'];
      }

      if (($_FILES["file"]["size"] > 21000000)) {
        $response['error'] = "File size must less than 1 MB.";
      }

      if (empty($response['error'])) {

        move_uploaded_file($_FILES['file']['tmp_name'], dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $_FILES['file']['name']);

        $file = dirname(dirname(dirname(__FILE__))) . '/public/uploads/' . $_FILES['file']['name'];

        $data = [
          'name' => $_FILES["file"]["name"],
          'user_id' => $_SESSION['user_id']
        ];

        if ($this->userModel->updateUserProfile($data['name'], $data['user_id'])) {
          unset($_SESSION['profile']);
          $_SESSION['profile'] = $data['name'];
          $response['success'] = "File uploaded successfully.";
        }
      }
      
      echo json_encode($response);
    } else {
      $this->profile();
    }
  }
}
