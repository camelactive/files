<?php
require_once ("/var/www/test.com/public_html/modules/classes/connect.php");

class SubmitClass {
  public function showInfo(){
    $name = $_POST['name'];
    $secondName = $_POST['secondName'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    echo "<div class ='showinfo'>";
    echo "name- " . $name;
    echo "<hr>";
    echo " secondName- " . $secondName;
    echo "<hr>";
    echo  " phone- ".$phone;
    echo "<hr>";
    echo " age- " . $age;
    echo "<hr>";
    echo "<a href='/'><button>На главную</button></a>";
    echo "<hr>";
    echo "</div>";
  
  }
};


$submit = new SubmitClass;
$submit->showInfo();
?>
<style>
    .showinfo{
        text-align: center;
        font-size: 40px;
        color: green;
        font-weight: bolder;
    }
</style>