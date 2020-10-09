<?php

  // Get home url for redirect
  define('HOME', str_replace('index.php', '', $_SERVER['PHP_SELF']));
  // get path
  define('PATH', __DIR__);

  session_start();
  require 'config/constants.php';
  require 'common/functions.php';
  require 'models/Database.php';
  require 'controllers/AuthController.php';
  require 'controllers/HomeController.php';


  //create db connection
  Database::instance();

  // Get action of user from $_GET when user provide url params
  // default is home@index
  $act = isset($_GET['act']) && !empty($_GET['act']) ? $_GET['act'] : 'home@index';


  // split string to array to get controller and method
  // Request: auth@login => ['auth', 'login']
  $act = explode('@', $act);

  // get controller class, if provide "auth" it'll be "AuthControler"
  $controller = ucfirst($act[0]) . 'Controller';

  // get method
  $method = $act[1];
  try {
    /**
     * Dynamic instance classe
     * It's same new ClassName()
     * Hoverer, if "ClassName" is value in a variable we need to implement like below
     */
    // create a ReflectionClass to get info of a class
    $ref = new ReflectionClass($controller);
    // create new instance of a class
    $instance = $ref->newInstance();

    // check method exists in controller class
    if(method_exists($controller, $method)) {
      // dynamic call method with method name is a variable
      $instance->$method();
    } else {
      // throw error if method not found in controller
      throw new Exception("Method $method not found in $controller");
    }

  } catch (ReflectionException $e) {
    die("Controller $controller not found!");

  } catch (Exception $e) {
    die($e->getMessage());
  }
