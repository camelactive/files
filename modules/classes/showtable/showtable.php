<?php
require_once ("/var/www/test.com/public_html/modules/classes/connect.php");


// $ConnectToDatabaseObj = new ConnectToDatabase;
// $ConnectToDatabaseObj->connectToDatafirst();

class Showtable extends ConnectToDatabase {
   public function showtablefirst(){
    $tableName = 'testTable3';
    $mysql = new mysqli($this->host, $this->user,$this->password, $this->dbname);
    $sql = "SELECT * FROM $tableName";
    $result = mysqli_query($mysql,$sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // for ($i=0; $i <count($result); $i++) {
    //     $id = $result[$i]['id'];
    //     echo "<div class = 'table'>";
    //     echo "<div class ='id'>" . $result[$i]['id']. "</div>";
    //     echo "<div class ='name'>" . $result[$i]['name']. "</div>";
    //     echo "<div class ='secondName'>" . $result[$i]['secondName']. "</div>";
    //     echo "<div class ='phone'>" . $result[$i]['phone']. "</div>";
    //     echo "<div class ='age'>" . $result[$i]['age']. "</div>";
    //     echo "<a href='modules/classes/tables/update.php?id=$id' class ='update'><div>update</div></a>";
    //     echo "<a href='modules/classes/tables/delete.php?id=$id' class ='delete'><div>delete</div></a>";
    //     echo "</div>";
    //     echo "<hr>";
    // };
    echo "<div class = 'table'>";
    echo "<div class ='id'>ID</div>";
    echo "<div class ='name'>NAME</div>";
    echo "<div class ='secondName'>Second Name</div>";
    echo "<div class ='phone'>Phone</div>";
    echo "<div class ='age'>Age</div>";
    echo "<div class ='phone'>Update</div>";
    echo "<div class ='age'>Delete</div>";

    echo "</div>";
    foreach ($result as $key => $value) {
       echo "<hr>";
       $id = $value['id'];
       echo "<div class = 'table'>";
       echo "<div class ='id'>" . $value['id']. "</div>";
       echo "<div class ='name'>" . $value['name']. "</div>";
       echo "<div class ='secondName'>" . $value['secondName']. "</div>";
       echo "<div class ='phone'>" . $value['phone']. "</div>";
       echo "<div class ='age'>" . $value['age']. "</div>";
       echo "<a href='modules/classes/tables/update.php?id=$id' class ='update'><div>update</div></a>";
       echo "<a href='modules/classes/tables/delete.php?id=$id' class ='delete'><div>delete</div></a>";
       echo "</div>";
       echo "<hr>";
    }
}
}
$ConnectToDatabaseTest = new Showtable;
$ConnectToDatabaseTest->showtablefirst();
?>
<style>
   .table{
    display: flex;
    background-color: gray;
    font-size: 26px;
    color: white;
 
   } 
   .delete{
    cursor: pointer;
    color: red;
   }
   .update{
    color: greenyellow;
   }
   .id{
    color: yellow;
  
   }
   .id,.name,.secondName,.phone,.age,.update,.delete,.create{
    width:14%;
    border-right: 3px solid black;
    padding-left: 10px;
    box-shadow: 3px 3px 3px black;
   }
</style>