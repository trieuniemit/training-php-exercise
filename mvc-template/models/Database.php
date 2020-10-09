<?php

  class Database {
    static $connection;
    protected $conn;

    function __construct()
    {
      $this->conn = self::$connection;
    }

    static function instance() {
      self::$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }

    function fetch($res) {
      return mysqli_fetch_all($res, MYSQLI_ASSOC) ?? [];
    }
  }
