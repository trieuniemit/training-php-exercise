<?php

  define('URL', str_replace('index.php', '', $_SERVER['PHP_SELF']));
  define('PATH', __DIR__);

  session_start();

  require 'common/functions.php';

  // Get action of user from $_GET when user provide url params
  $act = isset($_GET['act']) && !empty($_GET['act']) ? $_GET['act'] : 'home';

  // if user not logged in, require to login action
  if (!isLoggedIn()) {
    require "actions/login.php";
    // stop all process bellow
    die();
  }

  // replace @ to / in action for require correct path.
  // For example: action from request is: students@add, so require path will be students/add
  $act = str_replace('@', '/', $act);

  // if user provide action, let require the action file from "actions" folders
  require "actions/$act.php";

