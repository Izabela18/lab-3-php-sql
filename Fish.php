<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
header('Content-Type: application/json');
include_once 'db.php';

  class Fish {
    // DB connection
    private $conn;
    // Post Properties
    public $id;
    public $name;
    public $weight;
    public $catch;

    //public $sort = "";

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }
    // define functions for read all and single entries
    public function read_fisk() {

//This below did not work for  me and was defined as some sql error with ORDER BY. I tried "$query = 'SELECT * FROM fisk WHERE ' . $sort;" to be able to ?sort by column name

       /*if (isset($_GET['sort'])) {

        $sort = "ORDER BY " . $_GET['sort'];

      }*/

      // Create query
      $query = 'SELECT * FROM fisk ORDER BY Name';

      //Below I tried to test join 2 tables without  common column but found no effective solution

      //$query = 'SELECT fisk.ID, fisk.Name, fisk.Weight, fisk.Catch_area, accessories.ID, accessories.Name, accessories.Price FROM fisk STRAIGHT_JOIN accessories ON fisk.ID=accessories.ID';

      /*$query = 'SELECT fisk.ID, fisk.Name, fisk.Weight, fisk.Catch_area FROM fisk
      UNION
      SELECT accessories.ID, accessories.Name, accessories.Price FROM accessories';*/

      //$query = "SELECT fisk.ID, accessories.ID FROM fisk
      //CROSS JOIN accessories WHERE fisk.ID = 'new' ";


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
    public function read_single_fisk() {
          // Create query
          $query = 'SELECT *
                                    FROM fisk
                                    WHERE
                                      id = ?';
          // Prepare statement
          $stmt = $this->conn->prepare($query);
          // Bind ID
          $stmt->bindParam(1, $this->id);

          // Execute query
          $stmt->execute();
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          // Set properties
          $this->id = $row['ID'];
          $this->name = $row['Name'];
          $this->weight = $row['Weight'];
          $this->catch = $row['Catch_area'];

    }
  }
