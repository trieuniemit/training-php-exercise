<?php

  $students = isset($_SESSION['students']) && is_array($_SESSION['students'])
    ? $_SESSION['students'] : [];

  require PATH.'/views/home-view.php';
