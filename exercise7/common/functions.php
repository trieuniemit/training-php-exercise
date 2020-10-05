<?php

  // check logged in
  function isLoggedIn() {
    return isset($_SESSION['current_user']);
  }

  // redirect to other url
  function redirect($url) {
    header('location:' . $url);
  }

  // get a value from key of $_SESSION errors
  function getError($key) {
    $errors = $_SESSION['errors'] ?? [];
    $error = isset($errors[$key]) ? $errors[$key] : false;
    unset($_SESSION['errors'][$key]);
    return $error;
  }

  // get a value from $_SESSION input
  function old($key) {
    $input = $_SESSION['input'] ?? [];
    $old = isset($input[$key]) ? $input[$key] : false;
    unset($_SESSION['input'][$key]);
    return $old;
  }

  // only keep special keys in a array
  function array_only($arr, $keeps = []) {
    return array_filter($arr, function ($key) use ($keeps){
      return in_array($key, $keeps);
    }, ARRAY_FILTER_USE_KEY);
  }
