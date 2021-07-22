<?php

require './class/Hash.php';

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $password = filter_input(INPUT_POST, 'password');

  if (empty($password)) {
    echo json_encode([
      'status' => false,
      'message' => 'Informe uma senha'
    ]);
  } else {
    echo json_encode([
      'status' => true,
      'password' => $password,
      'hash' => Hash::create($password)
    ]);
  }

}