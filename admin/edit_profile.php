<?php include('header.php'); ?>

<!-- Content div section -->

<div class="col-md-9">
  <h4 id="conH" style="border-bottom: 3px solid black;
  color: #260681;
  font-size: 20px;
  padding: 30px 2px; margin-left:-10px" >Edit Your Information</h4>

  <form class="form-horizontal" action="" method="" style="width: 80%;">


    <div class="form-group">

      <label class="control-label col-sm-2" for="">Name:</label>
      <div class="col-sm-10">
        <input
          type="text"
          class="form-control"
          id="name"
          name="name"
          value="Ablusur Rahman Dihider"
        />
      </div>
    </div>


    <div class="form-group">

      <label class="control-label col-sm-2" for="">Email:</label>
      <div class="col-sm-10">
        <input
          type="Email"
          class="form-control"
          id="email"
          name="email"
          value="ablusur@united.com.bd" readonly
        />
      </div>
    </div>


    <div class="form-group">

      <label class="control-label col-sm-2" for="">Phone: </label>
      <div class="col-sm-10">
        <input
          type="text"
          class="form-control"
          id="phone"
          name="phone"
          value="01766637097"
        />
      </div>
    </div>


    <div class="form-group">
      
      <label class="control-label col-sm-2" for="">Address: </label>
      <div class="col-sm-10">
        <input
          type="text"
          class="form-control"
          id="address"
          name="address"
          value="Jamalpur, Mymensingh"
        />
      </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-default" value="U P D A T E">
        </div>
    </div>



  </form>
</div>



<?php include('footer.php');?>
