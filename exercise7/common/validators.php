<?php

  function is_email($str) {
    return preg_match( '/[^0-9]/', $str);
  }

  function is_length_in($str, $min, $max) {
    $length = strlen($str);
    return $length >= $min && $length <= $max;
  }
