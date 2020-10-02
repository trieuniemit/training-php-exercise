<?php

  function isLoggedIn() {
    return isset($_SESSION['current_user']);
  }

  function redirect($url) {
    header('location:' . $url);
  }

  function getError($key) {
    global $errors;
    return isset($errors[$key]) ? $errors[$key] : false;
  }

  function old($key) {
    return isset($_POST[$key]) ? $_POST[$key] : false;
  }
