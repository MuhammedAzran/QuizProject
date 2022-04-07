<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/navbar.css"></link>
    <title>Document</title>

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

    <style>

    </style>
</head>
<body>
    <div class="topnavigation" id="myTopnavigation">
        <!-- <a href="#home" class="active" style="color: red;">Home</a> -->
        <a href="../index.php">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <div class="dropDown">
          <button class="dropBtn">Section 
            <i class="fa fa-caret-down" ></i>
          </button>
          <div class="dropdown-contents" >
            <a href="./harrypotter.php" >Harry Potter</a>
            <a href="./squidgame.php">Squid Game</a>
            <a href="./starwars.php">Star Wars</a>
          </div>
        </div> 
        <a href="#about">About</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
</body>
</html>