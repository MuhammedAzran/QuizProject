<?php
session_start();
if (!isset($_SESSION["result"] ))
{
    echo "<script>window.location = './starwars.php' </script>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/starwarsresults.css"></link>
    <title>Star Wars quiz</title>
</head>
<body>
    <div class="wrapper">
        <?php
        include "pageheader.php";
        include "navigation.php";
        ?>
    </div>
    <div class="bannerimage">
        <img class="banner" src="../assets/images/star_wars_banner.jpg" alt="banner">
        <div class="bannertext">
            Star Wars quiz
        </div>   
    </div>
    <div class="score">
        <h2 class="score-title">
            <?php echo "<p class='score-title'> you have scored ".$_SESSION["result"]." out of 10. Here is the result </p>"; ?>
        </h2>
    </div>
    <div class="main">
        <div class="left-body">
            <form name="hpquiz" id="harrypotter" method="POST" action="../src/harrypotterback.php">
                <table>
                    <tr>
                        <?php
                        if ($_SESSION["q1"] == 2)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">01. What lightsaber color is preferred by the Sith? </label> </td>
                        <td>
                            <label class="answer">Blue</label><input type="radio" class="radio" value="1" name="1"><br>
                            <label class="answer">Red</label><input type="radio" checked="checked" class="radio" value="2" name="1"><br>
                            <label class="answer">Purple</label><input type="radio" class="radio" value="3" name="1"><br>
                            <label class="answer">Green</label><input type="radio" class="radio" value="4" name="1"><br>

                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q2"] == 4)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">02. Where does Yoda live when he first trains Luke Skywalker? </label></td>
                        <td>
                            <label class="answer">Coruscant</label> <input type="radio" value="1" name="2"><br>
                            <label class="answer">Tatooine</label><input type="radio" value="2" name="2"><br>
                            <label class="answer">Hoth</label> <input type="radio" value="3" name="2"><br>
                            <label class="answer">Dagobah</label> <input type="radio" checked="checked" value="4" name="2"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q3"] == 1)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">03. While fighting his own father in the Cloud City, which hand does Luke Skywalker lose? </label></td>
                        <td>
                            <label class="answer">Right</label> <input type="radio" checked="checked" value="1" name="3"><br>
                            <label class="answer">Left</label><input type="radio" value="2" name="3"><br>
                            <label class="answer">Both</label> <input type="radio" value="3" name="3"><br>
                            <label class="answer">None</label> <input type="radio" value="4" name="3"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q4"] == 4)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">04. Who defeats Finn in his very first lightsaber duel?</label></td>
                        <td>
                            <label class="answer">Darth Maul</label> <input type="radio" value="1" name="4"><br>
                            <label class="answer">Darth Vader</label><input type="radio" value="2" name="4"><br>
                            <label class="answer">Kerok Vet</label> <input type="radio" value="3" name="4"><br>
                            <label class="answer">Kylo Ren</label> <input type="radio" checked="checked" value="4" name="4"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q5"] == 3)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">05. What is Chewbacca's weapon of choice? </label></td>
                        <td>
                            <label class="answer">Metal club</label> <input type="radio" value="1" name="5"><br>
                            <label class="answer">Blaster rifle</label><input type="radio" value="2" name="5"><br>
                            <label class="answer">Bowcaster</label> <input type="radio" checked="checked" value="3" name="5"><br>
                            <label class="answer">Lightsaber</label> <input type="radio" value="4" name="5"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q6"] == 3)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">06. How old is Chewbacca in Force Awakens? </label></td>
                        <td>
                            <label class="answer">Over 220 years</label> <input type="radio" value="1" name="6"><br>
                            <label class="answer">78 years old</label><input type="radio" value="2" name="6"><br>
                            <label class="answer">200 years old</label> <input type="radio" checked="checked" value="3" name="6"><br>
                            <label class="answer">55 years old</label> <input type="radio" value="4" name="6"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q7"] == 1)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">07. What was the original title for the Star Wars movie? </label></td>
                        <td>
                            <label class="answer">The Adventures of the Jedi</label> <input type="radio" checked="checked" value="1" name="7"><br>
                            <label class="answer">Adventures of Luke Starkiller</label><input type="radio" value="2" name="7"><br>
                            <label class="answer">Battles in Space</label> <input type="radio" value="3" name="7"><br>
                            <label class="answer">Space fighters</label> <input type="radio" value="4" name="7"><br>
                        </td>
                    </tr>
                    <tr>
                        <?php
                        if ($_SESSION["q8"] == 4)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">08. what color lightsaber does mace windu have </label></td>
                        <td>
                            <label class="answer">Green</label> <input type="radio" value="1" name="8"><br>
                            <label class="answer">Blue</label><input type="radio" value="2" name="8"><br>
                            <label class="answer">Red</label> <input type="radio" value="3" name="8"><br>
                            <label class="answer">Purple</label> <input type="radio" checked="checked" value="4" name="8"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q9"] == 1)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">09. Who trains Grogu in The Book of Boba Fett? </label></td>
                        <td>
                            <label class="answer">Luke Skywalker</label> <input type="radio" checked="checked" value="1" name="9"><br>
                            <label class="answer">Anakin Skywalker</label><input type="radio" value="2" name="9"><br>
                            <label class="answer">Kylo Ren</label> <input type="radio" value="3" name="9"><br>
                            <label class="answer">Boba Fett</label> <input type="radio" value="4" name="9"><br>
                        </td>
                        
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q10"] == 4)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">10. What planet is Rey living on when BB-8 finds her?</label></td>
                        <td>
                            <label class="answer">planet Bespin</label> <input type="radio" value="1" name="10"><br>
                            <label class="answer">planet Naboo</label><input type="radio" value="2" name="10"><br>
                            <label class="answer">planet Tatooine</label> <input type="radio" value="3" name="10"><br>
                            <label class="answer">planet Jakku</label> <input type="radio" checked="checked" value="4" name="10"><br>
                        </td>
                    </tr>
                    <tr id="td-submit">
                        <td>
                            <a id="td-redo" href="./starwars.php">redo quiz</a>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
        <div class="right-body">
            <img src="../assets/images/ad1.jpg">
            <p id="adtext">Ultimate DC & Marvel<br>
            quiz coming soon
            </p>
        </div>
    </div>
</body>
</html>
<?php
if (isset($_SESSION["result"])) {
    if (basename($_SERVER['PHP_SELF']) != $_SESSION["result"]) {
         session_unset();
    }
 }
?>