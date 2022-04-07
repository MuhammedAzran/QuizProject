<?php
session_start();
if (!isset($_SESSION["result"] ))
{
    echo "<script>window.location = './harrypotter.php' </script>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/harrypotterresults.css"></link>
    <title>Harry Potter quiz results</title>
</head>
<body>
    <div class="wrapper">
        <?php
        include "pageheader.php";
        include "navigation.php";
        ?>
    </div>
    <div class="bannerimage">
        <img class="banner" src="../assets/images/harry_potter_banner.jpg" alt="banner">
        <div class="bannertext">
            Harry Potter quiz
        </div>   
    </div>
    <div class="score">
        <h2 class="score-title">
            <?php echo "<p class='score-title'> you have scored ".$_SESSION["result"]." out of 10. Here is the result </p>"; ?>
        </h2>
    </div>
    <div class="main">
        <div class="left-body">
            <form name="squidquiz" id="squidgame" method="POST" action="../src/squidgameback.php">
                <table>
                    <tr>
                        <?php
                        if ($_SESSION["q1"] == 4)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">01. What is the name of Hagrits pet dragon? </label> </td>
                        <td>
                            <label class="answer">Norman</label><input type="radio" class="radio" value="1" name="1"><br>
                            <label class="answer">Benjamin</label><input type="radio" class="radio" value="2" name="1"><br>
                            <label class="answer">Beskin</label><input type="radio" class="radio" value="3" name="1"><br>
                            <label class="answer">Norbert</label><input type="radio" checked="checked" class="radio" value="4" name="1"><br>

                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q2"] == 3)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">02. Who were Harry Potter's parents? </label></td>
                        <td>
                            <label class="answer">Jeremy and Lila Potter</label> <input type="radio" value="1" name="2"><br>
                            <label class="answer">Jonatan and Jane Potter</label><input type="radio" value="2" name="2"><br>
                            <label class="answer">James and Lily Potter</label> <input type="radio" checked="checked" value="3" name="2"><br>
                            <label class="answer">William and Maggy Potter</label> <input type="radio" value="4" name="2"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q3"] == 2)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">03. Who are the muggle aunt and uncle that Harry must live with every summer? </label></td>
                        <td>
                            <label class="answer">Ned and Camilla Diddly</label> <input type="radio" value="1" name="3"><br>
                            <label class="answer">Vernon and Petunia Dursley</label><input type="radio" checked="checked" value="2" name="3"><br>
                            <label class="answer">Ralph and Magnolia Dudley</label> <input type="radio" value="3" name="3"><br>
                            <label class="answer">Malroy and Dazia Margarot</label> <input type="radio" value="4" name="3"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q4"] == 1)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">04. What are the three Unforgivable Curses?</label></td>
                        <td>
                            <label class="answer">Avada Kedavra, Crucio and Imperio</label> <input type="radio" checked="checked" value="1" name="4"><br>
                            <label class="answer">Expelliarmus, Expecto Patronum and Diffindo</label><input type="radio" value="2" name="4"><br>
                            <label class="answer">Impedimenta, Incarcerous and Incendio</label> <input type="radio" value="3" name="4"><br>
                            <label class="answer">Excelsio, Einsethrou and Izalious</label> <input type="radio" value="4" name="4"><br>
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
                        <td><label class="question">05. How many Harry Potter books are there? </label></td>
                        <td>
                            <label class="answer">10</label> <input type="radio" value="1" name="5"><br>
                            <label class="answer">8</label><input type="radio" value="2" name="5"><br>
                            <label class="answer">7</label> <input type="radio" checked="checked" value="3" name="5"><br>
                            <label class="answer">9</label> <input type="radio" value="4" name="5"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q6"] == 4)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">06. What's the only movie in the Harry Potter series that doesn't feature Lord Voldemort? </label></td>
                        <td>
                            <label class="answer">The Deathly Hallows</label> <input type="radio" value="1" name="6"><br>
                            <label class="answer">The Order of the Phoenix</label><input type="radio" value="2" name="6"><br>
                            <label class="answer">The Sorcerer's Stone</label> <input type="radio" value="3" name="6"><br>
                            <label class="answer">The Prisoner of Azkaban</label> <input type="radio" checked="checked" value="4" name="6"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q7"] == 4)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">07. What year Harry Potter was born? </label></td>
                        <td>
                            <label class="answer">2000</label> <input type="radio" value="1" name="7"><br>
                            <label class="answer">1990</label><input type="radio" value="2" name="7"><br>
                            <label class="answer">1985</label> <input type="radio" value="3" name="7"><br>
                            <label class="answer">1980</label> <input type="radio" checked="checked" value="4" name="7"><br>
                        </td>
                    </tr>
                    <tr>
                        <?php
                        if ($_SESSION["q8"] == 3)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">08. What is name of the Harry Potter's pet? </label></td>
                        <td>
                            <label class="answer">Scabbers</label> <input type="radio" value="1" name="8"><br>
                            <label class="answer">Fisber</label><input type="radio" value="2" name="8"><br>
                            <label class="answer">Hedwig</label> <input type="radio" checked="checked" value="3" name="8"><br>
                            <label class="answer">Crookshanks</label> <input type="radio" value="4" name="8"><br>
                        </td>
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q9"] == 2)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">09. How many brothers and sisters does Ron Weasley have? </label></td>
                        <td>
                            <label class="answer">7</label> <input type="radio" value="1" name="9"><br>
                            <label class="answer">6</label><input type="radio" checked="checked" value="2" name="9"><br>
                            <label class="answer">8</label> <input type="radio" value="3" name="9"><br>
                            <label class="answer">10</label> <input type="radio" value="4" name="9"><br>
                        </td>
                        
                    </tr>

                    <tr>
                        <?php
                        if ($_SESSION["q10"] == 1)
                        {
                            echo '<tr 1 style= "background-color: #d0ffd0">';
                        }
                        else
                        {
                            echo '<tr 1 style= "background-color: #f8cdcd">';
                        }
                        ?>
                        <td><label class="question">10. What is the name of the car Harry and Ron uses to travel to Hogwards? </label></td>
                        <td>
                            <label class="answer">Ford Angila</label> <input type="radio" checked="checked" value="1" name="10"><br>
                            <label class="answer">Mini</label><input type="radio" value="2" name="10"><br>
                            <label class="answer">Porche 911</label> <input type="radio" value="3" name="10"><br>
                            <label class="answer">Ford Model T</label> <input type="radio" value="4" name="10"><br>
                        </td>
                    </tr>
                    <tr id="td-submit">
                        <td>
                            <a id="td-redo" href="./harrypotter.php">redo quiz</a>
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