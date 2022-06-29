<?php
require_once ("../connect.php");

// $ConnectToDatabaseObj = new ConnectToDatabase;
// $ConnectToDatabaseObj->connectToDatafirst();
class DeleteFromTable extends ConnectToDatabase {
   public function deletefirst(){
    $id = $_GET['id'];
    $mysql = new mysqli($this->host, $this->user,$this->password, $this->dbname);
    $tableName = 'testTable3';
    $sql ="DELETE FROM `$tableName` WHERE `$tableName`.`id` = $id";
    $result = mysqli_query($mysql,$sql);
     header("Location:/");
    
}
}
 $ConnectToDatabaseTest = new DeleteFromTable;
 $ConnectToDatabaseTest->deletefirst();
?>
