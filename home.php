<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>D'source Tool</title>

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
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="sign-up.php">Sign-up</a></li>
            <li><a href="log-in.php">Log-in</a></li>  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>  

    <div class="container">
    <h6>Select Properties to view images!</h6>
      

    

      <!-- Main component for a primary marketing message or call to action -->
      <div class="row">
        <div class="col-md-3">
              
            <!--  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> --> <!--turn this on when you want only one accordian expanded-->
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       <h3 class="panel-title"> <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Graphical Properties</h3>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Geometricity 
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Symmetricity
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Color
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Basic Shape
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Intricacy
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Modularity
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Real - Abstract
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Appearance
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Semantic Properties</h3>               
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Region
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Location
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Type of art
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Material
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Regional Properties</h3>                
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Region
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Location
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Type of art
                      <br><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Material
                    </div>
                  </div>
                </div>
          <!--    </div> --> <!--for only one accordian expandable-->

              <button type="button" class="btn btn-primary" id="search-button">Search</button>
        </div>    <!-- The side bar ends here -->
            

        <div class="col-md-9">
          <div class="row">
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/1.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/2.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/3.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/4.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/5.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/6.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/7.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/8.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/9.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/10.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/11.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div> 
            <div class="col-md-3">
              <button class="btn btn-default collection-button" type="submit">+</button>
              <div class="thumbnail">
                <img src="img/12.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/13.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/14.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/15.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div> 
            <div class="col-md-3">
              <div class="thumbnail">
                <button class="btn btn-default collection-button" type="submit">+</button>
                <img src="img/16.jpg" alt="...">
                <div class="caption">
                  <h6>Thumbnail label</h6>
                </div>
              </div>
            </div>
          </div>
      
        </div>
      
      </div>
      
    </div> <!-- /container -->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>