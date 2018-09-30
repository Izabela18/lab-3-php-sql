<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  include_once 'db.php';
  include_once 'Acs.php';
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();
  // Instantiate object
  $acs = new Acs($db);

  // Get all results

  $acs->read_acs();
