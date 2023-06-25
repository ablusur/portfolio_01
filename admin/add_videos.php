<?php include('header.php'); ?>

<div class="col-md-9">
  <h4
    id="conH" style="
      border-bottom: 3px solid black;
      color: #260681;
      font-size: 20px;
      padding: 30px 2px;
      margin-left: -10px;"
   > Add New Videos </h4>

  <form class="form-horizontal" action="" method="" style="width: 80%">

    <div class="form-group">

      <label class="control-label col-sm-3" for="">Video Title: </label>
      <div class="col-sm-9">
        <input
          type="text"
          class="form-control"
          id="v_name"
          name="v_name"
          placeholder="Enter Video Title"
        />
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-sm-3" for="">Video Embed code: </label>
      <div class="col-sm-9">
        <input
          type="text"
          class="form-control"
          id="code"
          name="code"
          placeholder="Enter Video Emded Code"
        />
      </div>
      </div>


    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <input type="submit" class="btn btn-default" value="Add Videos" />
      </div>
    </div>

    <?php include('footer.php'); ?>
  </form>
</div>
