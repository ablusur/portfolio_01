<?php include('header.php'); ?>






<!-- Content div section -->

<div class="col-md-9">
  <h4
    id="conH" style="
      border-bottom: 3px solid black;
      color: #260681;
      font-size: 20px;
      padding: 30px 2px;
      margin-left: -10px;"
   > Edit News </h4>


  <form class="form-horizontal" action="" method="" style="width: 80%" enctype="multipart/form_data">

    <div class="form-group">
      <label class="col-sm-4" for="">News Title: </label>
    </div>

    <div class="form-group">
      <div class="col-sm-12">
        <input type="text" class="form-control" id="newsT" name="newsT" value="SRK on his Bollywood journey"/>

         </div>

      </div>
     
      
      <div class="form-group">
      <label class="col-sm-4" for="">News Discription: </label>
    </div>

    <div class="form-group">
      <div class="col-sm-12">
       <textarea class="form-control" name="newsD" id="newsD" cols="30" rows="10" >SRK on his Bollywood journeySRK on his Bollywood journeySRK on his Bollywood journeySRK on his Bollywood journeySRK on his Bollywood journey</textarea>
        <script>
          
          CKEDITOR.replace('newsD');

        </script>
         </div>

      </div>


      <div class="form-group">
      <label class="col-sm-4" for="">News Image: </label>
    </div>

    <div class="form-group">
      <div class="col-sm-12">
        <input type="file" class="form-control" id="newsI" name="newsI"/>

         </div>

      </div>


        <div>
            <img src="../images/skhan.jpg" alt="" style="width:150px;">
        </div>
        <br>


    <div class="form-group">
      <div class="col-sm-offset-0 col-sm-12">
        <input type="submit" class="btn btn-default" value="Update News" />
      </div>
    </div>






    <?php include('footer.php'); ?>





  </form>
</div>
