<?php
require_once ("/var/www/test.com/public_html/modules/classes/connect.php");

// $ConnectToDatabaseObj = new ConnectToDatabase;
// $ConnectToDatabaseObj->connectToDatafirst();

class Deletetable extends ConnectToDatabase {
   public function deletefirst(){
    $tableName = 'testTable3';
    $mysql = new mysqli($this->host, $this->user,$this->password, $this->dbname);
    $sql ="DROP TABLE IF EXISTS $tableName;";
    
   
    $result = mysqli_query($mysql,$sql);
    echo "<br>";
    echo "Congrats your table - " . $tableName . "was deleted now";
}
}
$ConnectToDatabaseTest = new Deletetable;
$ConnectToDatabaseTest->deletefirst();