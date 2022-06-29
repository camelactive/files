<?php
require_once ("../connect.php");

// $ConnectToDatabaseObj = new ConnectToDatabase;
// $ConnectToDatabaseObj->connectToDatafirst();

class Createtable extends ConnectToDatabase {
   public function createtablefirst(){
    $tableName = 'testTable3';
    $mysql = new mysqli($this->host, $this->user,$this->password, $this->dbname);
    $sql = "CREATE TABLE IF NOT EXISTS `datafirst`.`$tableName` 
    ( `id` INT(11) NOT NULL AUTO_INCREMENT ,
     `name`VARCHAR(255) NOT NULL ,
     `secondName`VARCHAR(255) NOT NULL ,
      `phone` INT(12) NOT NULL ,
      `age` INT(3) NOT NULL , PRIMARY KEY (`id`))
       ENGINE = InnoDB;";
    $result = mysqli_query($mysql,$sql);
    echo "<br>";
    echo "Congrats your table - " . $tableName . "was created now";
}
}
$ConnectToDatabaseTest = new Createtable;
$ConnectToDatabaseTest->createtablefirst();