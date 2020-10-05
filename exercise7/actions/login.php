<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? false;
    $password = $_POST['password'] ?? false;

    if($username == 'admin' && $password == '12345') {
      $_SESSION['current_user'] = $username;
      redirect(URL);

    } else {
      $errors = [
        'login' => 'Username or password incorrect'
      ];
    }

  }

  require PATH.'/views/login-view.php';
