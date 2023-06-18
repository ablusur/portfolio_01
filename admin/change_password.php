<?php include('header.php'); ?>

<div class="col-md-9">
  <h4
    id="conH" style="
      border-bottom: 3px solid black;
      color: #260681;
      font-size: 20px;
      padding: 30px 2px;
      margin-left: -10px;"
   > Edit Your Password </h4>

  <form class="form-horizontal" action="" method="" style="width: 80%">

    <div class="form-group">

      <label class="control-label col-sm-3" for="">Old Password: </label>
      <div class="col-sm-9">
        <input
          type="password"
          class="form-control"
          id="o_pass"
          name="o_pass"
          placeholder="Enter Your Old Password"
        />
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-3" for="">New Password: </label>
      <div class="col-sm-9">
        <input
          type="password"
          class="form-control"
          id="n_pass"
          name="n_pass"
          placeholder="Enter Your New Password"
        />
      </div>
      </div>


      <div class="form-group">
      <label class="control-label col-sm-3" for="">Confurm Password: </label>
      <div class="col-sm-9">
        <input
          type="password"
          class="form-control"
          id="r_pass"
          name="r_pass"
          placeholder="Enter Your New Password Again"
        />
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
