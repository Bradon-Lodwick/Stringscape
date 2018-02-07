<?php
$db = new mysqli('stringscapedata.ci5lu1mjhpwx.us-east-2.rds.amazonaws.com', 'ChazzyDango', 'NotMyPass', 'StringScape');

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

// Insert sample data into the database
$sql = $db->prepare("INSERT INTO users(realname, username, email, password, profession, how_you_heard, sex, bio) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
// These should be retrieved from POST variables
$realname = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$insecure_pass = $_POST['password']; // This password needs to be securely hashed
$profession = $_POST['profession']; // This is one of the dropdown selection options
$how_you_heard = $_POST['howYouHeard'];  // This is a boolean value 0 or 1
$sex = $_POST['sex'];   // This is an integer value
$bio = $_POST['bio'];

$how_heard = HowHeardVal($how_you_heard);

function HowHeardVal($heard){
    if($heard[0]==1&&$heard[1]==1){
      return 2;
    }else if ($heard[0]==1){
      return 0;
    }else if ($heard[1]==1){
      return 1;
    }
}

// Securely hash the password
$password = password_hash($insecure_pass, PASSWORD_DEFAULT);

// Bind the parameters to the SQL query above, s is a string i is an integer
$sql->bind_param("sssssiis", $realname, $username, $email, $password, $profession, $how_heard, $sex, $bio);

// Execute the query, inserting the data
$sql->execute();

// Close the connection
$sql->close();
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
  </nav>
  <a name = "ArrowScroll"></a> <!-- Allows the arrow to be clicked and scroll down the page, NOTE: We should add smooth scrolling to make it nicer -->
  <hr id="header-break">
<br>
<center>
<h1> Account Created Successfully! </h1>
</center>

</body>
</html>
