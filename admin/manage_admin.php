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
   > Manage Admin </h4>

   <div class="Card Shadow">
       <a href="add_admin.php" class="btn btn-info">Add New Admin</a>
       <div class="card-header">
           <div class="row">
               <div class="col-md-6">
                   <h3>All Admin</h3>
               </div>
           </div>
       </div>

        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nmae</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>


                <tr>
                    <td>1</td>
                    <td>Md. Ablusur Rahman Lotus</td>
                    <td>lotusunited10@gmeil.com</td>
                    <td>01766637097</td>
                    <td>Jamalpur, Mymensingh</td>
                    <td><a href="" class="btn btn-danger disabled">Delete</a></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Md. Shakil Islam</td>
                    <td>shakil.islam@united.com.bd</td>
                    <td>01914001951</td>
                    <td>Dewanjonje, Mymensingh</td>
                    <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Md. Abdullah A Faruk</td>
                    <td>faruk@united.com.bd</td>
                    <td>01914001538</td>
                    <td>Gazipur, Dhaka</td>
                    <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
            </table>
        </div>


   </div>


</div>









<?php include('footer.php'); ?>