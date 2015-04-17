<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Log-in</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/my-java.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  


  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">
            <img alt="Brand" src="img/indian-symbology.png" class="tool-logo">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="sign-up.php">Sign-up</a></li>
            <li class="active"><a href="log-in.php">Log-in</a></li>  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>  

    <div class="container">
    
    <div id="games" class="row">
      
      <div class="col-md-offset-4 col-md-4">
        <center>
          <h4>Login</h4>
        </center>
        
        <form action="checklogin.php" method="post">
        <div class="row form-group"> 
          <label for="forUsername">Email-Id</label>
          <input id="forUsername" class="form-control" type="text" name="email_id" placeholder="Enter Email-Id"/>
        </div> 
        <div class="row form-group"> 
          <label for="forPassword">Password</label>
          <input id="forPassword" class="form-control" type="password" name="password" placeholder="Enter Password"/>
        </div>
        
        <input class="btn btn-primary login" type="submit" value="Login"/>
        <a href="#" class="center-block pull-right">forgot password?</a>
        </form>
        <hr>
        <p class="bg-info big-box">Are you here for the first time?<a href="sign-up.php"> Sign-up</a> instead?</p>
        


      </div>
      <div class="col-md-4"></div>
    </div>

    

      <!-- Main component for a primary marketing message or call to action -->
      
      
    </div> <!-- /container -->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>