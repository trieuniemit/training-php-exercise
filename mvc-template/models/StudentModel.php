<?php

  class StudentModel extends Database {

    function getAll() {
      $res = mysqli_query(parent::$conn, 'SELECT * FROM students');
      if($res) {
        return $this->fetch($res);
      }
      return [];
    }

  }
