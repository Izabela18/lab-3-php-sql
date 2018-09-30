<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
header('Content-Type: application/json');
include_once 'db.php';

  class Ready {
    // DB connection
    private $conn;
    // Post Properties
    public $id;
    public $name;
    public $price;


    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }



    // Get Single Entry
    public function read_single_ready() {
          // Create query
          $query = 'SELECT *
                                    FROM ready_meal
                                    WHERE
                                      name = ?';
          // Prepare statement
          $stmt = $this->conn->prepare($query);
          // Bind ID
          $stmt->bindParam(1, $this->name);

          // Execute query
          $stmt->execute();
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          // Set properties
          $this->id = $row['ID'];
          $this->name = $row['Name'];
          $this->price = $row['Price'];


    }
  }
