<?php include('header.php'); ?>



<!-- Content div section -->

<div class="col-md-9">
  <h4 id="conH" style="border-bottom: 3px solid black;
  color: #260681;
  font-size: 20px;
  padding: 30px 2px; margin-left:-10px" >Add New Employee</h4>

<form class="form-horizontal" action="" method="" style="width:80%;" enctype="multipart/form_data">


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
