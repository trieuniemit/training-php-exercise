<?php

  class Database {
    static $conn;

    static function instance() {
      self::$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }

    function fetch($res) {
      return mysqli_fetch_all($res, MYSQLI_ASSOC) ?? [];
    }
  }
