<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/xmen.css"></link>
    <title>X-Men quiz</title>
</head>
<body>
    <div class="wrapper">
        <?php
        include "pageheader.php";
        include "navigation.php";
        ?>
    </div>
    <div class="bannerimage">
        <img class="banner" src="../assets/images/x_men_banner.jpg" alt="banner">
        <div class="bannertext">
            X-Men quiz
        </div>   
    </div>

    <div class="main">
        <div class="left-body">
            <form name="hpquiz" id="harrypotter" method="POST" action="../src/harrypotterback.php">
                <table>
                    <tr>
                        <td><label class="question">01. The climax of which X-Men movie takes place at the Statue Of Liberty in New York? </label> </td>
                        <td>
                            <label class="answer">X2</label><input type="radio" class="radio" value="1" name="1"><br>
                            <label class="answer">X-Men</label><input type="radio" class="radio" value="2" name="1"><br>
                            <label class="answer">X-Men: The Last Stand</label><input type="radio" class="radio" value="3" name="1"><br>
                            <label class="answer">The Wolverine</label><input type="radio" class="radio" value="4" name="1"><br>

                        </td>
                    </tr>

                    <tr>
                        <td><label class="question">02. Which mutant launches a attack on the White House at the beginning of X2? </label></td>
                        <td>
                            <label class="answer">Nightcrawler</label> <input type="radio" value="1" name="2"><br>
                            <label class="answer">Iceman</label><input type="radio" value="2" name="2"><br>
                            <label class="answer">Toad</label> <input type="radio" value="3" name="2"><br>
                            <label class="answer">Magneto</label> <input type="radio" value="4" name="2"><br>
                        </td>
                    </tr>

                    <tr>
                        <td><label class="question">03. Deadpool was released in which year? </label></td>
                        <td>
                            <label class="answer">2018</label> <input type="radio" value="1" name="3"><br>
                            <label class="answer">2016</label><input type="radio" value="2" name="3"><br>
                            <label class="answer">2017</label> <input type="radio" value="3" name="3"><br>
                            <label class="answer">2014</label> <input type="radio" value="4" name="3"><br>
                        </td>
                    </tr>

                    <tr>
                        <td><label class="question">04.X-Men: First Class is primarily set during which major international incident?</label></td>
                        <td>
                            <label class="answer">The Cuban Missile Crisis</label> <input type="radio" value="1" name="4"><br>
                            <label class="answer">The Cold War</label><input type="radio" value="2" name="4"><br>
                            <label class="answer">The Vietnam War</label> <input type="radio" value="3" name="4"><br>
                            <label class="answer">The moon landing</label> <input type="radio" value="4" name="4"><br>
                        </td>
                    </tr>

                    <tr>
                        <td><label class="question">05. Wolverine's claws are made out of which fictional material? </label></td>
                        <td>
                            <label class="answer">Adamantium</label> <input type="radio" value="1" name="5"><br>
                            <label class="answer">Vibranium</label><input type="radio" value="2" name="5"><br>
                            <label class="answer">Unobtanium</label> <input type="radio" value="3" name="5"><br>
                            <label class="answer">Kryptonium</label> <input type="radio" value="4" name="5"><br>
                        </td>
                    </tr>

                    <tr>
                        <td><label class="question">06. Which Hollywood star cameoed as The Vanisher in Deadpool 2? </label></td>
                        <td>
                            <label class="answer">Tom Cruise</label> <input type="radio" value="1" name="6"><br>
                            <label class="answer">Leonardo DiCaprio</label><input type="radio" value="2" name="6"><br>
                            <label class="answer">Will Smith</label> <input type="radio" value="3" name="6"><br>
                            <label class="answer">Bradd Pitt</label> <input type="radio" value="4" name="6"><br>
                        </td>
                    </tr>

                    <tr>
                        <td><label class="question">07. Nightcrawler's body is covered in scars, but what does each scar represent? </label></td>
                        <td>
                            <label class="answer">One for every murdered mutant</label> <input type="radio" value="1" name="7"><br>
                            <label class="answer">One for every human kill</label><input type="radio" value="2" name="7"><br>
                            <label class="answer">One for every sin he has done</label> <input type="radio" value="3" name="7"><br>
                            <label class="answer">One for every sacrifice he has done</label> <input type="radio" value="4" name="7"><br>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="question">08. According to the Logan movie, what killed the X-Men? </label></td>
                        <td>
                            <label class="answer">The Dark Pheonix</label> <input type="radio" value="1" name="8"><br>
                            <label class="answer">The attack of Magneto</label><input type="radio" value="2" name="8"><br>
                            <label class="answer">Nuke sent by the government</label> <input type="radio" value="3" name="8"><br>
                            <label class="answer">Charles Xavier Psychic seizure attack</label> <input type="radio" value="4" name="8"><br>
                        </td>
                    </tr>

                    <tr>
                        <td><label class="question">09. How did the X-Man Magneto acquire his powers? </label></td>
                        <td>
                            <label class="answer">Excessive human torture in a Nazi concentration camp</label> <input type="radio" value="1" name="9"><br>
                            <label class="answer">Fell into a magnetic forcefield</label><input type="radio" value="2" name="9"><br>
                            <label class="answer">Almost drowned to death in a hydroelectric dam</label> <input type="radio" value="3" name="9"><br>
                            <label class="answer">Born with his powers</label> <input type="radio" value="4" name="9"><br>
                        </td>
                        
                    </tr>

                    <tr>
                        <td><label class="question">10. Who is the son of Magneto? </label></td>
                        <td>
                            <label class="answer">Caliban</label> <input type="radio" value="1" name="10"><br>
                            <label class="answer">Quicksilver</label><input type="radio" value="2" name="10"><br>
                            <label class="answer">Nightcrawler</label> <input type="radio" value="3" name="10"><br>
                            <label class="answer">Havok</label> <input type="radio" value="4" name="10"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" class="submit" onclick="resetform()" name="submit" value="submit">
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