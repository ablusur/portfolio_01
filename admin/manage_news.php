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
   > Manage News </h4>

   <div class="Card Shadow">
     
       <div class="card-header">
           <div class="row">
               <div class="col-md-6">
                   <h3>All News</h3>
               </div>
           </div>
       </div>

        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>News ID</th>
                    <th>News Title</th>
                    <th>News Image</th>
                    <th>Posted On</th>
                    <th>Action</th>
                </tr>


                <tr>
                    <td>1</td>
                    <td>SRK on his Bollywood journey</td>
                    <td> <img src="../images/skhan.jpg" alt="" style="width:100px; height:80px;"> </td>
                    <td>20 June, 2023</td>

                <td>    
                    <a href="#magicDv" class="fancybox btn btn-info">View</a>
                    <a href="edit_news.php" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
                </tr>


                <tr>
                    <td>3</td>
                    <td>SRK on his Bollywood journey</td>
                    <td> <img src="../images/skhan.jpg" alt="" style="width:100px; height:80px;"> </td>
                    <td>20 June, 2023</td>

                <td>    
                    <a href="" class="btn btn-info">View</a>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
                </tr>


                <tr>
                    <td>5</td>
                    <td>SRK on his Bollywood journey</td>
                    <td> <img src="../images/skhan.jpg" alt="" style="width:100px; height:80px;"> </td>
                    <td>20 June, 2023</td>

                <td>    
                    <a href="" class="btn btn-info">View</a>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
                </tr>



            <div id="magicDv" style="display:none">
                <h3>SRK on his Bollywood journey</h3>
                <h5>20 June, 2023</h5>
                <img src="../images/skhan.jpg" alt="" style="width:300px;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit adipisci esse ut consectetur expedita voluptate ipsam rem veniam ex iure. 
                    Quaerat quasi perferendis earum libero eveniet, esse nihil in magni tempore dolorum laborum at autem cum fugiat, similique quas 
                    accusantium aperiam repellat incidunt rerum debitis quia! Voluptate corporis accusamus numquam.
                </p>
            </div>

            </table>
        </div>


   </div>


</div>









<?php include('footer.php'); ?>