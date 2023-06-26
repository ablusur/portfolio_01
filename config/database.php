<?php


include_once 'config.php';


$db = new Database;

class Database{


public $host = 'HOST';
public $user = 'USER';
public $password = 'PASSWORD';
public $database = 'DATABASE';

public $error;
public $link;


public function __ construct(){
    $this->dbconnect();

}


//connect function to database
public function dbconnect(){

    $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->database);

    if(!$this->link){
        $this->error= 'Database Connection failed!!';
        return false;
    }
}

//insert function
public  function select($sql){
    $result = mysqli_query($this->link, $sql) or die ($this->link->error.__LINE__);
    if($result){
        return $result;
    }else{
        return false;
    }
}

}












?>
