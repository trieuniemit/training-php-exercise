<?php

  require PATH . '/models/StudentModel.php';

  class HomeController
  {

    private $model;

    public function __construct()
    {
      $this->model = new StudentModel();
    }

    function index() {
      $students = $this->model->getAll();
      require PATH . '/views/home.php';
    }
  }
