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
          <a class="navbar-brand" href="#"> <b>eShikhon.com</b></a>

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>


          </button>

        </div>

        <div class="collapse navbar-collapse" id="myNavbar">

          <ul class="nav navbar-nav">
                <li><a href="users/news.php">News</a></li>
                <li><a href="users/videos.php">Video</a></li>
                <li><a href="users/about.php">About</a></li>
                <li><a href="users/contact.php">Contact</a></li>


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
            <li><a href="admin/login.php"> <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    
    <!-- Slider section 3rd -->
    <div
      id="myCoursel"
      class="carousel slide"
      data-ride="carousel"
      style="margin-top: -50px"
    >
      <ol class="carousel-indicators">
        <li data-target="#myCoursel" data-slide-to="0" class="active"></li>
        <li data-target="#myCoursel" data-slide-to="1"></li>
        <li data-target="#myCoursel" data-slide-to="2"></li>
        <li data-target="#myCoursel" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="images/p4.jpg" alt="i4" style="width: 100%" />
        </div>

        <div class="item">
          <img src="images/p1.jpg" alt="i2" style="width: 100%" />
        </div>

        <div class="item">
          <img src="images/p2.jpg" alt="i3" style="width: 100%" />
        </div>

        <div class="item">
          <img src="images/p3.jpg" alt="p4" style="width: 100%" />
        </div>
      </div>

      <a class="left carousel-control" href="#myCoursel" data-slide="prev"
        ><span class="glyphicon glyphicon-chevron-left"></span
      ></a>

      <a class="right carousel-control" href="#myCoursel" data-slide="next"
        ><span class="glyphicon glyphicon-chevron-right"></span
      ></a>
    </div>

    <!-- Recent notice section -->

    <div class="container-fluid"; style="background-color: #3b5998; padding: 20px; margin-top: -5px; color:white; font-size: 20px;">
      <div class="row text-center">
        <p id="recentNews"><b>
          R E A C T &nbsp; &nbsp; &nbsp; N O T I C E S</b></p>
      </div>

    <div
      class="row"
      style="background-color: aliceblue; padding: 20px; margin-top: -20px"
    >
      <div class="container">
        <div class="row list-group text-center">
         
            <a href="#" class="list-group-item"
              >Lorem ipsum,dolor sit amet consectetur adipisicing elit.</a
            >
            <a href="#" class="list-group-item"
              >Lorem ipsum,dolor  onsectetur ipsum,sitadipisicing elit.</a
            >
            <a href="#" class="list-group-item"
              >Lorem ipsum,dolor sit amet consectetur adipisicing elit.</a
            >
            <a href="#" class="list-group-item"
              >Lorem ipsum,dolor sit amet consectetur adipisicing elit.</a
            >
            <a href="#" class="list-group-item"
              >Lorem ipsum,dolor sit amet consectetur adipisicing elit.</a
            >
            <a href="#" class="list-group-item"
              >Lorem ipsum,dolor sit amet consectetur adipisicing elit.</a
            >
            <a href="#" class="list-group-item"
              >Lorem ipsum,dolor sit amet consectetur adipisicing elit.</a
            >
            <a href="#" class="list-group-item"
              >Lorem ipsum,dolor sit amet consectetur adipisicing elit.</a
            >
            <a href="#" class="list-group-item"
              >Lorem ipsum,dolor sit amet consectetur adipisicing elit.</a
            >


            <div class="row">
              <div class="col-sm-3 pull-right text-right">
                <button type="button" class="btn btn-default">
                  Show More &nbsp;<span
                    class="glyphicon glyphicon-forward"
                  ></span>
                </button>
              </div>
            </div>
      </div>
          <!-- <div class="col-sm-3 thumbnail">
            <img src="images/i1.jpeg" alt="i1" /><br />
            <img src="images/i2.webp" alt="i2" />
          </div>

          <div class="col-sm-3 thumbnail">
            <img src="images/i3.webp" alt="i3" /><br />
            <img src="images/i5.webp" alt="i5" />
          </div> -->
        </div>
      </div>
    </div>

    <!-- popular course section -->

    <div
      class="container-fluid text-center"
      style="background-color: gainsboro; padding: 30px"
    >
      <h1><b>POPULAR COURSES</b></h1>
      <div class="row">
        <div class="col-md-4 text-justify">
          <div class="thumbnail">
            <img src="images/i2.webp" alt="i2" style="width: 100%" />
            <div class="caption">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Assumenda, architecto facilis asperiores quidem ipsum recusandae
                modi error iure velit provident voluptatibus doloribus
                laudantium deserunt ut voluptas earum necessitatibus illo unde.
              </p>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Perferendis animi ut reiciendis quasi, repellendus vel eaque
                ipsa nisi eum dolor sit amet consectetur adipisicing elit.
                Perferendis impedit.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 text-justify">
          <div class="thumbnail">
            <img src="images/i3.webp" alt="i3" style="width: 100%" />
            <div class="caption">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Assumenda, architecto facilis asperiores quidem ipsum recusandae
                modi error iure velit provident voluptatibus doloribus
                laudantium deserunt ut voluptas earum necessitatibus illo unde.
              </p>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Perferendis animi ut reiciendis quasi, repellendus vel eaque
                ipsa nisi eum dolor sit amet consectetur adipisicing elit.
                Perferendis impedit.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 text-justify">
          <div class="thumbnail">
            <img src="images/i1.jpeg" alt="i1" style="width: 100%" />
            <div class="caption">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Assumenda, architecto facilis asperiores quidem ipsum recusandae
                modi error iure velit provident voluptatibus doloribus
                laudantium deserunt ut voluptas earum necessitatibus illo unde.
              </p>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Perferendis animi ut reiciendis quasi, repellendus vel eaque
                ipsa nisi eum dolor sit amet consectetur adipisicing elit.
                Perferendis impedit.
              </p>
            </div>
          </div>
        </div>

        <div class="row"></div>

        <div class="col-md-4 text-justify">
          <div class="thumbnail">
            <img src="images/i2.webp" alt="i2" style="width: 100%" />
            <div class="caption">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Assumenda, architecto facilis asperiores quidem ipsum recusandae
                modi error iure velit provident voluptatibus doloribus
                laudantium deserunt ut voluptas earum necessitatibus illo unde.
              </p>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Perferendis animi ut reiciendis quasi, repellendus vel eaque
                ipsa nisi eum dolor sit amet consectetur adipisicing elit.
                Perferendis impedit.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 text-justify">
          <div class="thumbnail">
            <img src="images/i3.webp" alt="i3" style="width: 100%" />
            <div class="caption">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Assumenda, architecto facilis asperiores quidem ipsum recusandae
                modi error iure velit provident voluptatibus doloribus
                laudantium deserunt ut voluptas earum necessitatibus illo unde.
              </p>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Perferendis animi ut reiciendis quasi, repellendus vel eaque
                ipsa nisi eum dolor sit amet consectetur adipisicing elit.
                Perferendis impedit.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 text-justify">
          <div class="thumbnail">
            <img src="images/i1.jpeg" alt="i1" style="width: 100%" />
            <div class="caption">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Assumenda, architecto facilis asperiores quidem ipsum recusandae
                modi error iure velit provident voluptatibus doloribus
                laudantium deserunt ut voluptas earum necessitatibus illo unde.
              </p>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Perferendis animi ut reiciendis quasi, repellendus vel eaque
                ipsa nisi eum dolor sit amet consectetur adipisicing elit.
                Perferendis impedit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- team head section -->

    <div class="container-fluid" style="background-color: beige">
      <div class="container">
        <div class="row text-center">
          <h2>OUR TEAM MEMBERS</h2>
        </div>
        <div class="row text-center">
          <div class="col-sm-4">
            <img src="images/4.png" alt="4" class="img-circle" width:70% />
            <h2>Henry Kaye</h2>
            <p>MD,JHE</p>
          </div>

          <div class="col-sm-4">
            <img src="images/2.png" alt="2" class="img-circle" width:70% />
            <h2>Kayea khanom</h2>
            <p>COO,BD</p>
          </div>

          <div class="col-sm-4">
            <img src="images/3.png" alt="3" class="img-circle" width:70% />
            <h2>Henry Tomas</h2>
            <p>CEO,BDL</p>
          </div>
        </div>
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
