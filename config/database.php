<?php


include_once 'config.php';




class Database{


public $host = HOST;
public $user = USER;
public $password = PASSWORD;
public $database = DATABASE;

public $error;
public $link;


public function  __construct(){
    $this->dbConnect();

}


//connect function to database
public function dbConnect(){

    $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->database);

    if(!$this->link){

        $this->error = "Database Connection failed!!";

        return false;
    }
}


//insert function
public function insert($sql){

    $result = mysqli_query($this->link, $sql) or die ($this->link->error.__LINE__);

    if($result){

        return $result;

    }else{

        return false;
    }
}


//select function
public function select($sql){

    $result = mysqli_query($this->link, $sql) or die ($this->link->error.__LINE__);

    if(mysqli_num_rows($result) > 0 ){

        return $result;

    }else{

        return false;
    }
}


//update function
public  function update($sql){

    $result = mysqli_query($this->link, $sql) or die ($this->link->error.__LINE__);

    if($result){

        return $result;

    }else{

        return false;
    }
}


//delete function
public  function delete($sql){

    $result = mysqli_query($this->link, $sql) or die ($this->link->error.__LINE__);

    if($result){

        return $result;

    }else{

        return false;
         }
}



}




?>
