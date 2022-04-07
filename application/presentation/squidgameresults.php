<?php
session_start();
if (!isset($_SESSION["result"] ))
{
    echo "<script>window.location = './squidgame.php' </script>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/squidgameresults.css"></link>
    <title>Squid game quiz</title>
</head>
<body>
    <div class="wrapper">
        <?php
        include "pageheader.php";
        include "navigation.php";
        ?>
    </div>

    <div class="score">
        <h2 class="score-title">
            <?php echo "<p class='score-title'> you have scored ".$_SESSION["result"]." out of 10. Here is the result </p>"; ?>
        </h2>
    </div>

    <div class="main">
        <div class="left-body">

            <form name="squidquiz" method="POST" action="../src/squidgameback.php">
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
                        <td><label class="question">01. How many players were in the first round of squid Game? </label> </td>
                        <td>
                            <label class="answer">120</label><input type="radio" class="radio" value="1" name="playernumber"><br>
                            <label class="answer">455</label><input type="radio" checked="checked" class="radio" value="2" name="playernumber"><br>
                            <label class="answer">356</label><input type="radio" class="radio" value="3" name="playernumber"><br>
                            <label class="answer">100</label><input type="radio" class="radio" value="4" name="playernumber"><br>

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
                        <td><label class="question">02. How many seasons episodes are in Squid Game? </label></td>
                        <td>
                            <label class="answer">7</label> <input type="radio" value="1" name="episodes"><br>
                            <label class="answer">10</label><input type="radio" checked="checked" value="2" name="episodes"><br>
                            <label class="answer">8</label> <input type="radio" value="3" name="episodes"><br>
                            <label class="answer">9</label> <input type="radio" value="4" name="episodes"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q3"] == 3)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">03. How many players died in the first round of Squid Game? </label></td>
                        <td>
                            <label class="answer">100</label> <input type="radio" value="1" name="death"><br>
                            <label class="answer">128</label><input type="radio" value="2" name="death"><br>
                            <label class="answer">255</label> <input type="radio" checked="checked" value="3" name="death"><br>
                            <label class="answer">89</label> <input type="radio" value="4" name="death"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q4"] == 2)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">04. What is the third game in Squid Game? </label></td>
                        <td>
                            <label class="answer">Fight to death</label> <input type="radio" value="1" name="game"><br>
                            <label class="answer">Thug of War</label><input type="radio" checked="checked" value="2" name="game"><br>
                            <label class="answer">Marbles</label> <input type="radio" value="3" name="game"><br>
                            <label class="answer">Glass Tile Game</label> <input type="radio" value="4" name="game"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q5"] == 4)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">05. What is the player 001 name in Squid Game? </label></td>
                        <td>
                            <label class="answer">Cho Sang Woo</label> <input type="radio" value="1" name="player1"><br>
                            <label class="answer">Jang Deo-Su</label><input type="radio" value="2" name="player1"><br>
                            <label class="answer">Seong Gi-hun</label> <input type="radio" value="3" name="player1"><br>
                            <label class="answer">Oh Il-nam</label> <input type="radio" checked="checked" value="4" name="player1"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q6"] == 1)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">06. How many players decided to return to Squid Game? </label></td>
                        <td>
                            <label class="answer">187</label> <input type="radio" checked="checked" value="1" name="playerreturn"><br>
                            <label class="answer">120</label><input type="radio" value="2" name="playerreturn"><br>
                            <label class="answer">201</label> <input type="radio" value="3" name="playerreturn"><br>
                            <label class="answer">455</label> <input type="radio" value="4" name="playerreturn"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q7"] == 3)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">07. What was Gi hun's birthday gift to his daughter? </label></td>
                        <td>
                            <label class="answer">A flower</label> <input type="radio" value="1" name="gift"><br>
                            <label class="answer">Cash price</label><input type="radio" value="2" name="gift"><br>
                            <label class="answer">A gun lighter</label> <input type="radio" checked="checked" value="3" name="gift"><br>
                            <label class="answer">Empty box</label> <input type="radio" value="4" name="gift"><br>
                        </td>
                    </tr>
                    <tr>
                    <?php
                        if ($_SESSION["q8"] == 2)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">08. Employees with which shape on their masks hold the highest authority? </label></td>
                        <td>
                            <label class="answer">Circle</label> <input type="radio" value="1" name="guard"><br>
                            <label class="answer">Square</label><input type="radio" checked="checked" value="2" name="guard"><br>
                            <label class="answer">Triangle</label> <input type="radio" value="3" name="guard"><br>
                            <label class="answer">Cross</label> <input type="radio" value="4" name="guard"><br>
                        </td>
                    </tr>

                    <tr>
                    <?php
                        if ($_SESSION["q9"] == 3)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">09. What profession did player 111 have? </label></td>
                        <td>
                            <label class="answer">Gangster</label> <input type="radio" value="1" name="profession"><br>
                            <label class="answer">Mechanic</label><input type="radio" value="2" name="profession"><br>
                            <label class="answer">Doctor</label> <input type="radio" checked="checked" value="3" name="profession"><br>
                            <label class="answer">Thief</label> <input type="radio" value="4" name="profession"><br>
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
                        <td><label class="question">10. Where did Gi hun's daughter move? </label></td>
                        <td>
                            <label class="answer">New York</label> <input type="radio" value="1" name="move"><br>
                            <label class="answer">Denmark</label><input type="radio" value="2" name="move"><br>
                            <label class="answer">China</label> <input type="radio" value="3" name="move"><br>
                            <label class="answer">Los Angeles</label> <input type="radio" checked="checked" value="4" name="move"><br>
                        </td>
                    </tr>
                    <tr id="td-submit">
                        <td>
                            <!-- <input type="submit" class="submit" name="submit" value="submit"> -->
                            <a id="td-redo" href="./squidgame.php">redo quiz</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="right-body">
            <img src="../assets/images/ad1.jpg">
            <p id="adtext">Ultimate DC & Marvel<br>
            quix coming soon
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