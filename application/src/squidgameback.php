<?php
session_start();
$q1 = $_POST["playernumber"];
$q2 = $_POST["episodes"];
$q3 = $_POST["death"];
$q4 = $_POST["game"];
$q5 = $_POST["player1"];
$q6 = $_POST["playerreturn"];
$q7 = $_POST["gift"];
$q8 = $_POST["guard"];
$q9 = $_POST["profession"];
$q10 = $_POST["move"];
$result = 0;
if ($q1 == 2)
{
    $result+=1;
}
if ($q2 == 4)
{
    $result+=1;
}
if ($q3 == 3)
{
    $result+=1;
}
if ($q4 == 2)
{
    $result+=1;
}
if ($q5 == 4)
{
    $result+=1;
}
if ($q6 == 1)
{
    $result+=1;
}
if ($q7 == 3)
{
    $result+=1;
}
if ($q8 == 2)
{
    $result+=1;
}
if ($q9 == 3)
{
    $result+=1;
}
if ($q10 == 4)
{
    $result+=1;
}
$_SESSION["result"] = $result;
$_SESSION["q1"] = $q1;
$_SESSION["q2"] = $q2;
$_SESSION["q3"] = $q3;
$_SESSION["q4"] = $q4;
$_SESSION["q5"] = $q5;
$_SESSION["q6"] = $q6;
$_SESSION["q7"] = $q7;
$_SESSION["q8"] = $q8;
$_SESSION["q9"] = $q9;
$_SESSION["q10"] = $q10;


echo "<script>window.location = '../presentation/squidgameresults.php' </script>";
?>