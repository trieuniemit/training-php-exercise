<?php

  require PATH .'/common/validators.php';

  if($_SERVER['REQUEST_METHOD'] != 'POST') {
    redirect('');
    die();
  }

  $newStudents = array_only($_POST, ['code', 'full_name', 'year_of_birth', 'phone_number', 'address']);

  $errors = [];

  // do validate
  if(!is_length_in($newStudents['code'], 5, 11)) {
    $errors['code'] = 'Invalid code field.';
  }

  if(!is_numeric($newStudents['phone_number'])) {
    $errors['phone_number'] = 'Please enter a phone number';
  }

  if(!is_numeric($newStudents['year_of_birth'])) {
    $errors['year_of_birth'] = 'Invalid year of birth field. Please enter a number.';
  }

  if(!is_length_in($newStudents['full_name'], 2, 30)) {
    $errors['full_name'] = 'Invalid full name field!';
  }

  if(!is_length_in($newStudents['address'], 5, 120)) {
    $errors['address'] = 'Invalid address field.';
  }

  $students = $_SESSION['students'] ?? [];

  foreach ($students as $key => $student) {
    if($student['code'] == $newStudents['code']) {
      $errors['code'] = 'Student code already exists.';
      break;
    }
  }

  // if no error, add new student to $_SESSION
  if(empty($errors)) {
    $_SESSION['students'][] = $newStudents;
  } else {
    // provide errors to show in form
    $_SESSION['errors'] = $errors;
    // provide old input to form
    $_SESSION['input'] = $newStudents;
  }

  redirect(URL);

