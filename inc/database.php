<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.09.16
 * Time: 13:13
 */
class database {
  private $dbName = NULL, $dbHost = NULL, $dbPass = NULL, $dbUser = NULL;
  private static $instance = NULL;

  private function __construct($dbDetails = array()) {

    // Please note that this is Private Constructor

    $this->dbName = $dbDetails['db_name'];
    $this->dbHost = $dbDetails['db_host'];
    $this->dbUser = $dbDetails['db_user'];
    $this->dbPass = $dbDetails['db_pass'];

    // Your Code here to connect to database //
    $this->dbh = new PDO('mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName, $this->dbUser, $this->dbPass);
  }

  public static function connect($dbDetails = array()) {

    // Check if instance is already exists
    if (self::$instance == NULL) {
      self::$instance = new database($dbDetails);
    }

    return self::$instance;

  }

  private function __clone() {
    // Stopping Clonning of Object
  }

  private function __wakeup() {
    // Stopping unserialize of object
  }
}

//$db1 = database::connect($dbDetails);
//var_dump($db1);
// Output

//object(database)[1]
//  private 'dbName' => string 'designpatterns' (length=14)
//  private 'dbHost' => string 'localhost' (length=9)
//  private 'dbPass' => string 'mysqldba' (length=8)
//  private 'dbUser' => string 'root' (length=4)
//  public 'dbh' => object(PDO)[2]