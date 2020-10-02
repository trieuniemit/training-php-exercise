<?php

  session_start();

  require 'common/constants.php';
  require 'common/functions.php';

  // Get action of user from $_GET when user provide url params
  $act = isset($_GET['act']) && !empty($_GET['act']) ? $_GET['act'] : false;

  // if user not logged in, require to login action
  if (!isLoggedIn()) {
    require "actions/login.php";
    // stop all process bellow
    die();
  }

  // if user provide action, let require the action file from "actions" folders
  if($act) {
    require "actions/$act.php";
  } else {
    // require to actions/home.php if no action to show list and form
    require "actions/home.php";
  }

