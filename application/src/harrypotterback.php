<?php
session_start();
$q1 = $_POST["1"];
$q2 = $_POST["2"];
$q3 = $_POST["3"];
$q4 = $_POST["4"];
$q5 = $_POST["5"];
$q6 = $_POST["6"];
$q7 = $_POST["7"];
$q8 = $_POST["8"];
$q9 = $_POST["9"];
$q10 = $_POST["10"];
$result = 0;
if ($q1 == 4)
{
    $result+=1;
}
if ($q2 == 3)
{
    $result+=1;
}
if ($q3 == 2)
{
    $result+=1;
}
if ($q4 == 1)
{
    $result+=1;
}
if ($q5 == 3)
{
    $result+=1;
}
if ($q6 == 4)
{
    $result+=1;
}
if ($q7 == 4)
{
    $result+=1;
}
if ($q8 == 3)
{
    $result+=1;
}
if ($q9 == 2)
{
    $result+=1;
}
if ($q10 == 1)
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


echo "<script>window.location = '../presentation/harrypotterresults.php' </script>";
?>