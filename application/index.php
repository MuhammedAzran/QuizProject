<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/navbar.css">
    
    <title>Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
      /* .carousel-control-prev
        {
            padding: 0%;
            margin: 0%;
            width: 4%;
            height: 10%;
            top: 70px;
            left: 40px;
            background-color: blueviolet;
        } */
    </style>



    <script>
        function myFunction() {
          var x = document.getElementById("myTopnavigation");
          if (x.className === "topnavigation") {
            x.className += " responsive";
          } else {
            x.className = "topnavigation";
          }
        }
    </script>
</head>
<body>
  <div class="wrapper">
    <div class="pageheader">
        <div class="logo-space">
            <a href="">
                <img id="logo-quiz" src="./assets/images/logo.jpg" alt="mega_quiz_logo">
            </a>
        </div>
        
        <div class="filler" style="width: 15%;"></div>
        <div class="filler" style="width: 27.5%;">
            <div class="filler2"></div>
            <a href="" class="quizlinks">welcome</a>
        </div>
        <div class="filler" style="width: 27.5%;">
            <div class="filler2"></div>
            <a href="" class="quizlinks">contact us</a>
        </div>
        <div class="filler" style="width: 15%;"></div>
    </div>

    <div class="topnavigation" id="myTopnavigation">
        <a href="#home" class="active" style="color: red;">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <div class="dropDown">
          <button class="dropBtn">Section 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-contents">
            <a href="./presentation/harrypotter.php">Harry Potter</a>
            <a href="./presentation/squidgame.php">Squid Game</a>
            <a href="./presentation/starwars.php">Star Wars</a>
          </div>
        </div> 
        <a href="#about">About</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    
    <div class="bannerimage">
      <img class="banner" src="./assets/images/banner1.jpg" alt="banner">
      <div class="bannertext">
        Squid Game quiz is now available
        <br>
        complete the questions to test your game sense
      </div>   
    </div>

    <div class="sub-head">
      <h2 class="options">options for you</h2>
    </div>

    <div class="main">
      <div class="left-body">


        <!-- gallery 1 start-->
        <div class="container text-center my-3" id="testrun1">
          
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                  <div class="carousel-item row no-gutters active">
                      <div class="col-3 float-left"><img class="img-fluid"  src="./assets/images/harry_potter.jpg">
                        <br>
                        <a href="../application/presentation/harrypotter.php" class="optiontext">Harry Potter quiz</a>
                      </div>
                      <div class="col-3 float-left"><img class="img-fluid" src="./assets/images/squid_game.jpg">
                        <br>
                        <a href="../application/presentation/squidgame.php" class="optiontext">Squid Game quiz</a>
                      </div>
                      <div class="col-3 float-left"><img class="img-fluid" src="./assets/images/star_wars.jpg">
                        <br>
                        <a href="../application/presentation/starwars.php" class="optiontext">Star Wars quiz</a>
                      </div>
                      <div class="col-3 float-left"><img class="img-fluid" src="./assets/images/x_men.jpg">
                        <br>
                        <a href="./presentation/xmen.php" class="optiontext">X-Men quiz</a>
                      </div>
                  </div>
                  <div class="carousel-item row no-gutters">
                      <div class="col-3 float-left"><img class="img-fluid" src="./assets/images/lord_of_the_rings.jpg">
                        <br>
                        <a href="" class="optiontext">Lord of The Rings quiz</a>
                      </div>
                      <div class="col-3 float-left"><img class="img-fluid" src="./assets/images/last_air_bender.jpg">
                        <br>
                        <a href="" class="optiontext">The Last Air Bender quiz</a>
                      </div>
                      <div class="col-3 float-left"><img class="img-fluid" src="./assets/images/money_heist.jpg">
                        <br>
                        <a href="" class="optiontext">Money Heist quiz</a>
                      </div>
                      <div class="col-3 float-left"><img class="img-fluid" src="./assets/images/stranger_things.jpg">
                        <br>
                        <a href="" class="optiontext">Stranger Things quiz</a>
                      </div>
                  </div>
              </div>
              <a class="carousel-control-prev" id="previousbtn" href="#recipeCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" id="nextbtn" href="#recipeCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
          
        </div>
        <!-- gallery 1 end-->

        <!-- gallery 2 start-->
        <div class="container text-center my-3" id="testrun2">
          
          <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                  <div class="carousel-item row no-gutters active">
                      <div class="float-left" style="width: 50%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/harry_potter.jpg">
                        <br>
                        <a href="" class="optiontext">Harry Potter quiz</a>
                      </div>
                      <div class="float-left" style="width: 50%;" ><img class="img-fluid"  style="width: 90%;" src="./assets/images/squid_game.jpg">
                        <br>
                        <a href="" class="optiontext">Squid Game quiz</a>
                      </div>
                      
                  </div>
                  <div class="carousel-item row no-gutters">
                      <div class=" float-left" style="width: 50%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/star_wars.jpg">
                        <br>
                        <a href="" class="optiontext">Star Wars quiz</a>
                      </div>
                      <div class=" float-left" style="width: 50%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/x_men.jpg">
                        <br>
                        <a href="./presentation/xmen.php" class="optiontext">X-Men quiz</a>
                      </div>
                      
                  </div>
                  
                  <div class="carousel-item row no-gutters">
                    <div class=" float-left" style="width: 50%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/lord_of_the_rings.jpg">
                      <br>
                      <a href="" class="optiontext">Lord of The Rings quiz</a>
                    </div>
                    <div class=" float-left" style="width: 50%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/last_air_bender.jpg">
                      <br>
                      <a href="" class="optiontext">The Last Air Bender quiz</a>
                    </div>
                    
                  </div>

                  <div class="carousel-item row no-gutters">
                    <div class=" float-left" style="width: 50%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/money_heist.jpg">
                      <br>
                      <a href="" class="optiontext">Money Heist quiz</a>
                    </div>
                    <div class=" float-left" style="width: 50%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/stranger_things.jpg">
                      <br>
                      <a href="" class="optiontext">Stranger Things quiz</a>
                    </div>
                    
                  </div>
              </div>
              <a class="carousel-control-prev" id="previousbtn2" href="#recipeCarousel2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" id="nextbtn2" href="#recipeCarousel2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
          
        </div>
        <!-- gallery 2 end-->

        <!-- gallery 3 start-->
        <div class="container text-center my-3" id="testrun3">
          
          <div id="recipeCarousel3" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item row no-gutters active">
                    <div class="float-left" style="width: 100%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/harry_potter.jpg">
                      <br>
                      <a href="" class="optiontext">Harry Potter quiz</a>
                    </div>
                    
                    
                </div>
                <div class="carousel-item row no-gutters">
                    <div class=" float-left" style=" width: 100%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/squid_game.jpg">
                      <br>
                      <a href="" class="optiontext">Squid Game quiz</a>
                    </div>
                    
                    
                </div>
                
                <div class="carousel-item row no-gutters">
                  <div class=" float-left" style="width: 100%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/star_wars.jpg">
                    <br>
                    <a href="" class="optiontext">Star Wars quiz</a>
                  </div>  
                </div>

                <div class="carousel-item row no-gutters">
                  <div class=" float-left" style="width: 100%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/x_men.jpg">
                    <br>
                    <a href="" class="optiontext">X-Men quiz</a>
                  </div>  
                </div>

                <div class="carousel-item row no-gutters">
                  <div class=" float-left" style="width: 100%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/lord_of_the_rings.jpg">
                    <br>
                    <a href="" class="optiontext">Lord of The Rings quiz</a>
                  </div>  
                </div>

                <div class="carousel-item row no-gutters">
                  <div class=" float-left" style="width: 100%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/last_air_bender.jpg">
                    <br>
                    <a href="" class="optiontext">Last Air Bender quiz</a>
                  </div>  
                </div>

                <div class="carousel-item row no-gutters">
                  <div class=" float-left" style="width: 100%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/money_heist.jpg">
                    <br>
                    <a href="" class="optiontext">Money Heist quiz</a>
                  </div>  
                </div>

                <div class="carousel-item row no-gutters">
                  <div class=" float-left" style="width: 100%;"><img class="img-fluid" style="width: 90%;" src="./assets/images/stranger_things.jpg">
                    <br>
                    <a href="" class="optiontext">Stranger Things quiz</a>
                  </div>  
                </div>
              </div>
              <a class="carousel-control-prev" id="previousbtn3" href="#recipeCarousel3" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" id="nextbtn3" href="#recipeCarousel3" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
          
        </div>
        <!-- gallery 3 end-->


      </div>
      <div class="right-body">
        <img src="./assets/images/ad1.jpg">
        <p id="adtext">Ultimate DC & Marvel<br>
          quiz coming soon
        </p>
      </div>
    </div>
    <div class="bio">
      <h3>quiz test application</h3>
      <p>this application was developed for learning purposes using different technologies; HTML, CSS, templates, PHP
        <br>
        Harry Potter, Squid Game, Star Wars and X-Men quiz are currently working
      </p>
    </div>
    
    
  </div>
  

    
</body>
</html>