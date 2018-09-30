<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
header('Content-Type: application/json');
include_once 'db.php';

  class Acs {
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
    // define functions for read all and single entries
    public function read_acs() {

      // Create query
      //$query = 'SELECT * FROM accessories ORDER BY Name';

      $query = 'SELECT accessories.ID, accessories.Name, accessories.Price FROM accessories
      UNION
      SELECT ready_meal.ID, ready_meal.Name, ready_meal.Price FROM ready_meal';


      // Prepare statement
      $stmt = $this->conn->prepare($query);


      // Execute query
      $stmt->execute();
      //return $stmt;

      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      $json = json_encode($result);
      echo $json;

    }



    // Get Single Entry
    public function read_single_acs() {
          // Create query
          $query = 'SELECT *
                                    FROM accessories
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
