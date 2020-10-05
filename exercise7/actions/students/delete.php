<?php

$code = isset($_GET['code']) && $_GET['code'] ? $_GET['code'] : false;
$students = $_SESSION['students'] ?? [];
$index = false;

foreach ($students as $key => $student) {
  if($student['code'] == $code) {
    $index = $key;
    break;
  }
}

if($index !== false) {
  unset($students[$index]);
  $_SESSION['students'] = $students;
  redirect(URL);
}
