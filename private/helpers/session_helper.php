<?php
session_start();

// Flash message helper
function flash($name = '', $message = '', $class = 'flash'){
  if(!empty($name)){
    //No message, create it
    if(!empty($message) && empty($_SESSION[$name])){
      if(!empty( $_SESSION[$name])){
          unset( $_SESSION[$name]);
      }
      if(!empty( $_SESSION[$name.'_class'])){
          unset( $_SESSION[$name.'_class']);
      }
      $_SESSION[$name] = $message;
      $_SESSION[$name.'_class'] = $class;
    }
    //Message exists, display it
    elseif(!empty($_SESSION[$name]) && empty($message)){
      $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : 'success';
      echo '<p class="txt1 text-center alert '.$class.'" id="msg-flash" role="alert">'.$_SESSION[$name].'</p>';
      
      unset($_SESSION[$name]);
      unset($_SESSION[$name.'_class']);
    }
  }
}