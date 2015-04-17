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
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
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
            <li class="active"><a href="contact.php">Admin</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="sign-up.php">Sign-up</a></li>
            <li><a href="log-in.php">Log-in</a></li>  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>  

    <div class="container">
      <div class="col-md-12 img-tag-list">
      </div>
      

    

      <!-- Main component for a primary marketing message or call to action -->
      <div class="row">
        <div class="col-md-4">
          
            <a href="#" class="img-for-tag">
              <img src="img/22.jpg" alt="..." class= "img-responsive">
            </a>
            <br>
            <hr>
            <br>
        <div class="row">
          <?php  
          $colors = array(1,2,3,4,5,6,); 
          $img_no = 12;
          for ($x = 1; $x <= $img_no; $x++) {
              echo '
                <div class="col-md-4 other-img">
                  <a href="#" class="thumbnail">
                      <img src="img/admin/'.$x.'.jpg" alt="...">
                  </a>
                </div>
              ';
          }
        ?>
        <!--
            <div class="col-md-4 other-img">
                <a href="#" class="thumbnail">
                    <img src="img/admin/1.jpg" alt="...">
                </a>
              </div>
        -->

        </div>

        </div> 

        <div class="col-md-8">
          <div class="row property">

            <div class="col-md-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title cat-head"> <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Graphical Properties</h3>                                        
                  </div>                  
                  <div class="panel-body">
                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Geometricity</div>
                        Geometric <span class="pull-right">Organic </span>                         
                        <div class="btn-group btn-group-xs" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> O
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option2" autocomplete="off">O
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option3" autocomplete="off"> O
                          </label>
                        </div>
                                          

                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Symmetricity</div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Axial
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Rotational
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option3" autocomplete="off"> None
                          </label>
                        </div>
                        

                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Color </div>
                        <div class='btn-group btn-group-xs btn-primary'>
                          <button >hi</button>
                          <button class="color-button" style="background-color:#DABE8E"></button>
                          <button class="color-button" style="background-color:#DDAF74"></button>
                          <button class="color-button" style="background-color:#C1893F"></button>
                          <button class="color-button" style="background-color:#9E5111"></button>
                          <button class="color-button" style="background-color:#CBC7B8"></button>
                          <button class="color-button" style="background-color:#BCB2BE"></button>
                          <button class="color-button" style="background-color:#8F758B"></button>
                          <button class="color-button" style="background-color:#7F3136"></button>
                          <button class="color-button" style="background-color:#49091F"></button>
                          <button class="color-button" style="background-color:#60715A"></button>
                          <button class="color-button" style="background-color:#FFDB60"></button>
                          <button class="color-button" style="background-color:#A62E18"></button>
                        </div>

                        <div class="btn-group-xs clr-btn" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input class="clr-btn" type="checkbox" autocomplete="off">color 1
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">color 2
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">color 3
                          </label>                                                    
                        </div> 
                                   
                      <!-- Circle
                          Triangle
                          Square (quadrangle)
                          Rhombus, Trapezoidal, Kite, Diamond
                          Leaf petal, Beatle leafs, Flower petal, Tear drop, Paisley
                          Hexagon
                      -->
                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Basic Shape</div>
                        <div class="btn-group-xs" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Circle
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Triangle
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Square
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Rhombus
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Trapezoidal
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Kite
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Diamond
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Leaf petal
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Flower petal
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Tear drop
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Paisley
                          </label>                          
                        </div>                        
                      
                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Intricacy <br></div>
                        Plain <span class="pull-right">Intricate </span>                         
                        <div class="btn-group btn-group-xs" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> O
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option2" autocomplete="off"> O
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option3" autocomplete="off"> O
                          </label>                          
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option4" autocomplete="off"> O
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option5" autocomplete="off"> O
                          </label>
                        </div>
                      
                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Modularity</div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> 1-D Border
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option2" autocomplete="off"> 2-D Tile
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option3" autocomplete="off"> None
                          </label>
                        </div>
                      
                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Real - Abstract <br></div>
                        Real <span class="pull-right">Abstract </span> 
                        <div class="btn-group btn-group-xs" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option1" autocomplete="off"> O
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option2" autocomplete="off"> O
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option3" autocomplete="off"> O
                          </label>                          
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option4" autocomplete="off"> O
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option5" autocomplete="off"> O
                          </label>
                        </div>
                                         
                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Appearance</div>
                        <div class="btn-group-xs" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Stippling
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Stroke
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Freehand
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Iconic
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Motif
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Nature Imagery
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Diagram
                          </label>
                        </div>                        

                  </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="panel panel-default">
                  <div class="panel-heading">               
                    <h3 class="panel-title cat-head"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Semantic Properties</h3>                                     
                  </div>                                 
                  <div class="panel-body">
                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Purpose </div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off"><strong>Decoration</strong>
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Wall Décor
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Floor Décor
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">clothes
                          </label>
                        </div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">  
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off"><strong>Religious</strong>
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Hindu
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Islamic
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Buddhist
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Jain
                          </label>
                        </div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">  
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Deity
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Prayer
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Worship
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Protection
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Weapon
                          </label>
                        </div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">  
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Spiritual
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Rituals
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Auspicious
                          </label>
                        </div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons"> 
                          
                          
                          
                          
                          

                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off"><strong>Communication</strong>
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Visual Identity
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Signage
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Informative
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Story-telling
                          </label>
                        </div>
                        <div class="btn-group-xs" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Welcome
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Performing Arts
                          </label> 
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Painting
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Architecture
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Transport
                          </label>
                        </div>        
                        
                     
                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Living being </div>                         
                      <div class="btn-group btn-group-xs" data-toggle="buttons">  
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Human
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Hand
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Leg
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Head
                          </label>
                        </div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">  
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Child
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Woman
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Man
                          </label>
                        </div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">  
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Animal
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Elephant
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Bull
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Deer
                          </label>
                        </div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">  
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Bird
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Peacock
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Parrot
                          </label>
                        </div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">  
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Tree 
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Leaf
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Flower
                          </label>
                        </div>
                      

                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Non-living object </div>
                      <div class="btn-group btn-group-xs" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked>Natural objects
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option2" autocomplete="off">Man-made objects
                          </label>
                        </div>
                      

                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Occasion </div>
                        <div class="btn-group-xs" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Daily use
                          </label>
                        </div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">  
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Festival
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Kartik Purnima
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Diwali
                            </label>
                        </div>
                        

                      
                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Emotion </div>
                        
                        <div class="btn-group btn-group-xs" data-toggle="buttons">  
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Happy
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Joy
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Fear
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Anger
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Hope
                            </label>
                        </div>
                                                  
                        
                  </div>
                </div>
            

               
                <div class="panel panel-default">
                  <div class="panel-heading">                      
                    <h3 class="panel-title cat-head"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span> Regional Properties</h3>                
                  </div>
                  <div class="panel-body">
                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Region</div>
                        <div class="btn-group-xs" data-toggle="buttons">
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">North-east
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">South India
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">North India
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Jaipur
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Rajasthan
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Kerala
                            </label>
                        </div>

                      


                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Location </div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">  
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Public space
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Religious place 
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Home
                          </label>
                        </div>
                        <div class="btn-group btn-group-xs" data-toggle="buttons">  
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Floor
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Wall
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Ceiling
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Door
                          </label>
                          <label class="btn btn-primary">
                            <input type="checkbox" autocomplete="off">Window
                          </label>
                        </div>
                        <div class="btn-group-xs" data-toggle="buttons">
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Temple
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Mosque
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Fort
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Sculpture
                            </label>
                            <label class="btn btn-primary">
                              <input type="checkbox" autocomplete="off">Theatre
                            </label>
                          </div>
                      

                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Material</div>
                        <div class="btn-group-xs" data-toggle="buttons">
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Wood
                              </label>
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Stone
                              </label>
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Chalk
                              </label>
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Powder
                              </label>
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Gheru
                              </label>
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Rice flour
                              </label>
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Cloth
                              </label>
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off"><span title="This is the way it is done!">Leather
                              </label>
                        </div>
                      

                      <div class="cat-label"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Type of art</div>
                        <div class="btn-group-xs" data-toggle="buttons">
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Aipan
                              </label>
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Bhil
                              </label>
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Chikku
                              </label>
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Chitta
                              </label>
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Kolam
                              </label>
                              <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off">Muggu
                              </label>
                        </div>              
                  
                  </div>
                </div> 

             

              <button type="button" class="btn btn-primary" id="assign-button" title="Just Assignt the current properties">Assign</button>
              <button type="button" class="btn btn-primary pull-right" id="assign-button">Done! Save to Database</button>
              <br>
            </div> 
            </div> 
        </div>    
       

      
      </div>
      <div class="col-md-4">
        <!--php-->
        
      </div>
      
    </div> <!-- /container -->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>