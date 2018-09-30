<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  include_once 'db.php';
  include_once 'Ready_meal.php';
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();
  // Instantiate object
  $ready = new Ready($db);
  // Get ID
  $ready->name= isset($_GET['name']) ? $_GET['name'] : die();

  // Get one record
  $ready->read_single_ready();

  // Make JSON
  print_r(json_encode($ready));
