<?php include('header.php'); ?>



<!-- Content div section -->

<div class="col-md-9">
  <h4 id="conH" style="border-bottom: 3px solid black;
  color: #260681;
  font-size: 20px;
  padding: 30px 2px; margin-left:-10px" >Add New Admin</h4>

<form class="form-horizontal" action="" method="" style="width:80%;">

<div class="form-group">
      <label class="control-label col-sm-2" for="">Name: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Admin Name" />
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="">E-mail: </label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter E-mail Name" />
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="">Phone: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Admin Phone" />
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="">Address: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Admin Address" />
      </div>
    </div>



    <div class="form-group">
      <label class="control-label col-sm-2" for="">Password: </label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Sample Password" />
      </div>
    </div>



    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="A D D" />
      </div>
    </div>




</form>

</div>










<?php include('footer.php'); ?>
