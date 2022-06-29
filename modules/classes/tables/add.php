<?php
require_once ("../connect.php");

// $ConnectToDatabaseObj = new ConnectToDatabase;
// $ConnectToDatabaseObj->connectToDatafirst();

class AddtoDatabase extends ConnectToDatabase {
   public function addfirst(){
    $name = $_POST['name'];
    $secondName = $_POST['secondName'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $tableName = 'testTable3';
    $mysql = new mysqli($this->host, $this->user,$this->password, $this->dbname);
    
    $sql ="INSERT INTO `$tableName` (`id`, `name`, `secondName`, `phone`, `age`)
    VALUES (NULL, '$name ', '$secondName', '$phone', '$age');";
    $result = mysqli_query($mysql,$sql);
    header("Location:/");
    
}
}
$ConnectToDatabaseTest = new AddtoDatabase;
$ConnectToDatabaseTest->addfirst();