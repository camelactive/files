<?php 

echo strtoupper( "this is update page");
echo "<hr>";

$testarr = [
    "name" => "igor",
    "age" => "27",
    "secondname" => "Savenok",
    "email" => "igor@mail.ru",
    "phone" => "+784879754",
    "adress" => "USA 5464 ave"
];
// var_dump($testarr);
foreach ($testarr as $key => $value) {
    echo $key;
    echo "-";
    echo $value; 
    echo "<br>";
}

?>
<style>
    
    body{
        background-color: gray;
        font-size: 40px;
        color: white;
    }
</style>