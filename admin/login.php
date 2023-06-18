<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="" />

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>

            body{
              background-image: url(../images/bllueimages.jpg);
              background-repeat: no-repeat;
              background-size: cover;
            }

      .thumbnail {
        padding: 50px;
        margin-top: 50px;
        border-color: lightslategray;
        border-radius:15px;
        background-color: hsla(200, 100%, 35%, 0.8)
    </style>
  </head>

  <body>
    <div class="container-fluid">
      <div class="container text-center">
        <a href="../index.php">
          <img
            src="../images/logo-full-final.png"
            alt=""
            width="500px"
            style="margin: 50px"
        /></a>
        <h4 style="color: red"><b> A D M I N &nbsp; &nbsp; L O G I N </b></h4>
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6 thumbnail">
            <form action="#" method="" class="form-horizontal">
              <div class="form-group">
                <div class="col-sm-12">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="Enter Your Email"
                    required
                  />
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <input
                    type="password"
                    class="form-control"
                    name="password"
                    placeholder="Enter Your Password"
                    required
                  />
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-10 col-sm-2">
                  <input
                    type="submit"
                    class="btn btn-info"
                    value="LOGIN"
                    required
                  />
                </div>
              </div>
            </form>
          </div>
          <div class="col-sm-3"></div>
        </div>
      </div>
    </div>
  </body>
</html>
