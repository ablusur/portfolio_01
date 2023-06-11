<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <title>Document</title>

    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css">

  <style>
    #contactDiv {
      margin: 20px;
      margin-top:-20px;
      padding: 20px;
      background-image: url(../images/bllueimages.jpg);
      background-position: right;
      background-size: cover;
    }
  </style>

  </head>



  <body id="myPage">
    <!-- logo section first  -->
    <div class="container text-center">
      <p></p>
      <img src="images/logo-full-final.png" alt="logo" width="300px" />
      <h5>Boost your skill and build the world.</h5>
    </div>

    <!-- navbar section second -->
    <nav class="navbar navbar-inverse navbar-sticky-top">
      <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" href="../index.php"> <b>eShikhon.com</b></a>

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>


          </button>

        </div>

        <div class="collapse navbar-collapse" id="myNavbar">

          <ul class="nav navbar-nav">
              
                <li><a href="news.php">News</a></li>
                <li><a href="videos.php">Video</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropMenu" role="button" data-toggle="dropdown" aria-expanded="false" style="" href="#new">Course Details</a>
              <ul class="dropdown-menu" aria-labelledby="dropMenu;">
                <li><a class="dropdown-item" href="#new">Web Development</a></li>
                <li><a class="dropdown-item" href="#new">Java Script</a></li>
                <li><a class="dropdown-item" href="#new">Graphics Design</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a class="glyphicon glyphicon-log-in" href="#"> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- contact us form division -->

    <div class="container-fluid" id="contactDiv">

    <div class="container">
      <div class="row text text-center">
        <h4>C O N T A C T &nbsp; &nbsp; U S  </h4>
      </div>

      <div class="row text text-center">
        <p>Contact with us ,if you have any suggestion or any king of query.</p>
      </div>

      <form class="form-horizontal" method="" action="">

        <div class="form-group">      
          <label class="control-label col-sm-2">Name</label>
          <div class="col-sm-10">
          <input type="text" name="name" class="form-control" placeholder="Enter your name ">
          </div>
        </div>


        <div class="form-group">      
          <label class="control-label col-sm-2">Email</label>
          <div class="col-sm-10">
          <input type="email" name="email" class="form-control" placeholder="Enter your email ">
          </div>
        </div>


        <div class="form-group">      
          <label class="control-label col-sm-2">Website</label>
          <div class="col-sm-10">
          <input type="text" name="website" class="form-control" placeholder="Enter your website link ">
          </div>
        </div>


        <div class="form-group">      
          <label class="control-label col-sm-2">Messages</label>
          <div class="col-sm-10">
          <textarea name="message" class="form-control" id="" cols="30" rows="10" placeholder="Enter your suggestion or query"></textarea>
          </div>
        </div>


        <div class="form-group">      
          <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" name="submit" value="S U B M I T">
          </div>
        </div>
      </form>

    </div>
    </div>

    



    <!-- footer section -->

    <footer
      class="container-fluid p-3 mb-2 bg-success text-white"
      id="myFooter"
    >
      <div class="row">
        <div class="col-sm-4 text-center">
          <h4>Address</h4>
          <p>
            <b> <span class="glyphicon glyphicon-cd"></span> eShikhon.com</b>
            <br />
            &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
              class="glyphicon glyphicon-map-marker"
            ></span>
            Office: Holding No-03, 10 No. Ward, Hat-
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chandra,Jamalpur
            Sadar.<br />
            Jamalpur-2020.
            <br />
            <span class="glyphicon glyphicon-phone-alt"></span>
            Phone:+8801766637097
          </p>
        </div>

        <div class="col-sm-8">
          <br />
          <div>
            <img src="images/logo-full-final.png" alt="" width="30%" />
            <br /><br />
          </div>

          <form action="#" class="form-horizontal">
            <div class="form-group">
              <div class="col-sm-10">
                <input
                  type="email"
                  class="form-control"
                  id="em"
                  name="email"
                  placeholder="Enter Your Email: "
                />
              </div>
              <div class="col-sm-2">
                <button type="Submit" class="btn btn-default">
                  Subscribe <span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </footer>

    <!-- Copyright footer section -->

    <div class="container-fluid">
      <div class="row bg-success text-white">
        <div class="col-sm-12 text-center">
          <a href="#myPage"
            ><span class="glyphicon glyphicon-chevron-up"></span
          ></a>
        </div>

        <div class="row">
          <div class="col-sm-12 text-center my-3">
            <a href="#"><i style="font-size: 25px; color: #3b5998;padding: 5px;" class="fa-brands fa-facebook"></i></a>
            <a href="#"><i style="font-size: 25px; color: #55acee; padding: 5px;" class="fa-brands fa-twitter"></i></a>
            <a href="#"><i style="font-size: 25px; color: #dc4e41;padding: 5px;" class="fa-brands fa-google"></i></a>
            <a href="#"><i style="font-size: 25px; color: #0077b5;padding: 5px;" class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i style="font-size: 25px; color: #00405d; padding: 5px;" class="fa-brands fa-github"></i></a>
          </div>
        <div class="col-sm-12 text-center text-info">
          <p><b>&copy; Copyright 2023</b></p>
        </div>
      </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
