<?php
// Get new instance of MySQLi object
$mysqli = @new mysqli('127.0.0.1', 'codeup', 'password', 'codeup_mysqli_test_db');

// Check for errors
if ($mysqli->connect_errno) {
    throw new Exception('Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Retrieve a result set using SELECT
$result = $mysqli->query ("SELECT * FROM national_parks");

// Use print_r() to show rows using MYSQLI_ASSOC
while ($row = $result->fetch_assoc()) {
    print_r($row);
}

?>


<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
 <title>Central Park</title>
 <!-- Bootstrap -->
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
      </style>
      
</head>
<body>
 
  <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">National Parks</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class ="#"><a href="#">About Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
             <li><a href="http://www.linkedin.com/in/karinamontestrevino"><i class="fa fa-linkedin"></i></a></li> 
             <li><a href="https://github.com/KarinaMontesTrevino"><i class="fa fa-github-alt"></i></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
   </div> <!-- /container -->

<div class="jumbotron">
<div class="table-responsive">
  <table class="table">
    ...
  </table>
</div>
</div>
</body>
</html>