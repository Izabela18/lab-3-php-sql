<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  include_once 'db.php';
  include_once 'Fish.php';
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();
  // Instantiate object
  $fisk = new Fish($db);
  // Get ID
  $fisk->id = isset($_GET['id']) ? $_GET['id'] : die();

  // Get one record
  $fisk->read_single_fisk();
  // Make JSON
  print_r(json_encode($fisk));
