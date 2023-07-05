<?php 



include_once '../config/database.php';

include('header.php'); 

$db = new Database();

$query = "select * from admin where id = $id";
$result = $db->select($query);


if($_SERVER['REQUEST_METHOD'] == "POST"){

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  if(empty($name) || empty($phone) || empty($address)){

    echo "<script> 
    alert('Every field must be fullfilled')
    </script>";
  }else{

    $sql = "update admin set name = '$name', phone = '$phone', address = '$address' where id = '$id'";

    $res = $db->update($sql);

    if($res){

    echo "<script> 
    alert('Updated Successfully.')
    </script>";

    header("Refresh:0 ");

    }else

    echo "<script> 
    alert('Updated Failed.')
    </script>";


  }





}





?>

<!-- Content div section -->

<div class="col-md-9">
  <h4 id="conH" style="border-bottom: 3px solid black; color: #260681; font-size: 20px; padding: 30px 2px; margin-left:-10px" >Edit Your Information</h4>


  <?php
  
  if($result){

  while($row = mysqli_fetch_assoc($result)){

  ?>



<form class="form-horizontal" action="edit_profile.php" method="post" style="width: 80%;">


<div class="form-group">
  <label class="control-label col-sm-2" for="">Name:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>"/>
  </div>
</div>


<div class="form-group">
  <label class="control-label col-sm-2" for="">Email:</label>
  <div class="col-sm-10">
    <input type="Email" class="form-control" id="email" name="email" value=" <?php echo $row['email']; ?> " readonly />
  </div>
</div>


<div class="form-group">
  <label class="control-label col-sm-2" for="">Phone: </label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone'];?>"/>
  </div>
</div>


<div class="form-group">    
  <label class="control-label col-sm-2" for="">Address: </label>
  <div class="col-sm-10"> 
    <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address'];?>" />
  </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="U P D A T E">
    </div>
</div>



</form>





<?php

  }
  
  }
   
  
  ?>



 
</div>



<?php include('footer.php');?>
