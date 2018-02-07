<?php
$db = new mysqli('stringscapedata.ci5lu1mjhpwx.us-east-2.rds.amazonaws.com', 'ChazzyDango', 'NotMyPass', 'StringScape');

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
else {
    echo "SUCCESS" . '<br />';
}

// Query to return data from your database
$result = $db->query("SELECT * FROM users");

// check if the query succeeded
if (!$result) {
    die('There was an error running the query[' . $db->error . ']');
}

// Display the results of the query for each row
echo '<br /> <br /> <br />';
echo "DISPLAYING THE QUERY RESULTS:" . '<br />';
while ($row = $result->fetch_assoc()) {
  echo '<pre>';
    echo 'UserId: ', $row['user_id'] . '<br>';
    echo 'Username: ', $row['username'] . '<br>';
    echo 'Real Name: ', $row['realname'] . '<br>';
    echo 'Email: ', $row['email'] . '<br>';
    //echo $row['password'] . ', ';
    echo 'Profession: ', $row['profession'] . '<br>';
    echo 'How you heard: ', $row['how_you_heard'] . '      (0 = Online, 1 = Word of Mouth, 2 = both)<br>';
    echo 'Gender: ', $row['sex'] . '             (0 = male, 1 = female, 2 = other)<br>';
    echo 'Bio: ', $row['bio'] . '<br>';
    echo '</pre>';
};

// Display the number of rows returned by query
echo 'Total number rows returned: ' . $result->num_rows;


// Close the database connection
$result->free();
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
<br>
</html>
