<?php 


include_once '../config/database.php';
include('header.php'); 

$db = new Database();


if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $o_pass = $_POST['o_pass'];
  $n_pass = $_POST['n_pass'];
  $r_pass = $_POST['r_pass'];


  $query = "SELECT * FROM ADMIN WHERE id = '$id'";
  $result = $db->select($query);


  if($result){
    while($row = $db->mysqli_fetch_assoc($result)){

      if($row['password'] != $o_pass){

        echo "<script> 
        alert('Wrong Password. Please try again');
        </script>";


      }else{

        if($n_pass != $r_pass){

          echo "<script> 
          alert('Type your password correctly');
          </script>";

        }else{
          $sql = "update admin set password = '$n_pass' where id = '$id'";
          $res = $db->update($sql)

          if($res){

              echo "<script>
              alert('Password Changed Successfully');
              </script>";

            header("refresh:0"); 

          }else{
              echo "<script>
              alert('Processed Failed');
              </script>";

          }




        }

      }

    }
  }





}









?>

<div class="col-md-9">
  <h4
    id="conH" style=" border-bottom: 3px solid black; color: #260681; font-size: 20px; padding: 30px 2px; margin-left: -10px;"> Edit Your Password </h4>



  <form class="form-horizontal" action="change_password.php" method="post" style="width: 80%">

    <div class="form-group">

      <label class="control-label col-sm-3" for="">Old Password: </label>
      <div class="col-sm-9">
        <input type="password" class="form-control" id="o_pass" name="o_pass" placeholder="Enter Your Old Password"/>
      </div>
      </div>
      

      <div class="form-group">
      <label class="control-label col-sm-3" for="">New Password: </label>
      <div class="col-sm-9">
        <input type="password" class="form-control" id="n_pass" name="n_pass"
          placeholder="Enter Your New Password" />
      </div>
      </div>


      <div class="form-group">
      <label class="control-label col-sm-3" for="">Confurm Password: </label>
      <div class="col-sm-9">
        <input type="password" class="form-control" id="r_pass" name="r_pass"
          placeholder="Enter Your New Password Again"/>
      </div>
    </div>

    
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <input type="submit" class="btn btn-default" value="U P D A T E" />
      </div>
    </div>

    <?php include('footer.php'); ?>
  </form>
</div>
