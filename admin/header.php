<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>homepage</title>

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- CKeditors Link -->
    <script type="text/javascript" src="../tools/ckeditor_4.21.0_standard/ckeditor/ckeditor.js" ></script>

    <!-- Fancybox Link -->
    <script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="fancybox/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fancyBox/jquery.fancybox.css" media="screen"/>

    <script type="text/javascript">

    $(document).ready(

      function() {
        $('.fancybox').fancybox();
      }
    );


    </script>



    <link rel="stylesheet" href="style.css" />

  </head>

  <body>
    <!-- Header div section -->

    <div class="container-fluid text-center" id="hDiv" style="height: 100px">
      <h1><b>A D M I N &nbsp;&nbsp; P A N E L</b></h1>
    </div>

    <!-- Body main container section -->

    <div class="container-fluid" style="height: 80%; padding: 0">
      <div class="row">
        <!-- Navigation div section -->

        <div class="col-md-3" id="navDiv">
          <h4 id="title">CONTROLS</h4>
          <ul id="navList">
            <li><a href="home.php">Admin Home</a></li>
            <li><a href="edit_profile.php">Edit Profile</a></li>
            <li><a href="change_password.php">Change Password</a></li>
            <li><a href="manage_admin.php">Manage Admin</a></li>
            <li><a href="manage_employee.php">Manage Employee</a></li>
            <li><a href="add_news.php">Add News</a></li>
            <li><a href="manage_news.php">Manage News</a></li>
            <li><a href="add_videos.php">Add Videos</a></li>
            <li><a href="manage_videos.php">Manage Videos</a></li>
            <li><a href="show_feedbacks.php">Show Feedbacks</a></li>
            <li><a href="">Total Subscribers</a></li>
            <li><a href="">Log Out</a></li>
          </ul>
        </div>


