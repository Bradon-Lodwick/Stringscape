<?php
$db = new mysqli('localhost', 'root', '', 'lab');

// TODO You must process the POST data from the form and then set the variables
// below to be inserted in the database

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
else {
    echo "SUCCESS";
}
// These should be retrieved from POST variables
$username = $_GET['username'];
$DBUsers = SELECT $username from users;
$insecure_pass = $_GET['password']; // This password needs to be securely hashed
if ($username == $DBUsers){
  echo"username found";
  if ($)
}
// Securely hash the password
$password = password_hash($insecure_pass, PASSWORD_DEFAULT);

$db->close();

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>StringScape</title>
  <!-- jquery import -->
  <script src="js/jquery.min.js"></script>
  <!--<script src="js/jquery.min.js"></script>-->
  <!-- Bootstrap Stylesheets-->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/formValidation.min.css" rel="stylesheet">
  <link href="css/morris.css" rel="stylesheet">
  <!-- Bootstrap scripts -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/formValidation.min.js"></script>
  <script src="js/raphael-min.js"></script>
  <script src="js/morris.min.js"></script>

  <!-- custom stylesheet -->
  <link href="css/custom-stylesheet.css" rel="stylesheet">
  <!-- javascript sets header-image-container height to window height,
    sizing the image to the user's browser window -->
  <script type="text/javascript" language="Javascript" src="js/set-header-height.js"></script>
</head>

<body>
  <!-- main navigation for the site -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">StringScape</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.html">Home</a></li>
          <li>
            <a href="articles.html" class="dropdown-toggle" data-toggle="dropdown">Articles<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="hardware.html?submit=Display+Articles#">Hardware</a></li>
              <li><a href="programming.html?submit=Display+Articles#">Programming</a></li>
              <li><a href="gaming.html?submit=Display+Articles#">Gaming</a></li>
              <li><a href="hot-topics.html?submit=Display+Articles#">Hot Topics</a></li>
            </ul>
          </li>
          <li><a href="submit-article.html">Submit An Article</a></li>
          <li><a href="sign-up.php">Register</a></li>
          <li><a href="Graphs.html">Scapetistics</a></li>
          <li><a href="load.php">Load UserData</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
    <form id="login">
      Username: <input type="text" id="userlogin" style="color: black;" /> <br>
      Password: <input type="password" id="userpass" style="color: black" /> <br>
      <input type="submit" id="loginsubmit" style="color: black">
    </form>
  </nav>
<br>
</html>
