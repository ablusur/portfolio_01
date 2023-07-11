<?php 


include_once '../config/database.php';
include('header.php'); 

$db = new Database();

if($_SERVER['REQUEST_METHOD'] == "POST"){

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$position = $_POST['position'];


$permited = array('jpg', 'jpeg', 'png');

$photo_name = $_FILES['photo']['name'];
$photo_size = $_FILES['photo']['size'];
$photo_temp = $_FILES['photo']['tmp_name'];


$div = explode('.', $photo_name); //image.PNG

$file_extension = strtolower(end($div));


$unique_name = substr(md5(time()), 0, 10). '.' . $file_extension;
$upload_photo = "upload/team/". $unique_name;


if($photo_size > 1048576){
      echo "<script> 
      alert('File must be less then 1MB.')
      </script>";
}elseif(in_array($file_extension, $permited) == false){

      echo "<script> 
      alert('You can upload only jpg, jepg, png, gif format image.')
      </script>";

}else{
  move_uploaded_file($photo_temp, $upload_photo);

  $sql = "insert into employee(name, email, phone, address, position, photo) values ('$name', '$email', '$phone', '$address','$position', '$upload_photo')";

  $result = $db->insert($sql);

  if($result){

    echo "<script>
          alert('Insert Successfully');
          window.location.href = 'manage_employee.php';
          </script>";


  }else{

    echo "<script>
          alert('Insertation Failed!');
          </script>";
        }

    }




}


?>




<!-- Content div section -->

<div class="col-md-9">
  <h4 id="conH" style="border-bottom: 3px solid black;
  color: #260681;
  font-size: 20px;
  padding: 30px 2px; margin-left:-10px" >Add New Employee</h4>

<form class="form-horizontal" action="" method="post" style="width:80%;" enctype="multipart/form-data">


<div class="form-group">
      <label class="control-label col-sm-2" for="">Name: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Admin Name" required />
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="">E-mail: </label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter E-mail Name " required/>
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="">Phone: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Admin Phone" required/>
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="">Address: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Admin Address" />
      </div>
    </div>



    <div class="form-group">
      <label class="control-label col-sm-2" for="">Position: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="position" name="position" placeholder="Enter Employee Position" required/>
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="">Photo: </label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="photo" name="photo" required />
      </div>
    </div>



    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="Add Employee" />
      </div>
    </div>




</form>

</div>










<?php include('footer.php'); ?>
