<?php
class ConnectToDatabase {
     public $host ='localhost';
     public $user ='root';
     public $password ='root';
     public $dbname ='first_db';
     
     function __constructor($host,$user,$password,$dbname){
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
        
     }
    // public function connectToDatafirst(){
    //     echo "CONNECT SUCSESS";
    //     $mysql = new mysqli($this->host, $this->user,$this->password, $this->dbname);
    //     //  mysqli_connect($this->host, $this->user,$this->password, $this->dbname);
    //      if ($mysql->connect_errno) exit ('ERROR to DATABASE CONNECT');
    //         }
           
        
};

// $ConnectToDatabaseObj = new ConnectToDatabase;
// $ConnectToDatabaseObj->connectToDatafirst();


