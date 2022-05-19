<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutiol </title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
.container{
    max-width: 90%;
    background-color: red;
    margin:auto;
    color:white;
    padding: 25px;
    }
</style>
<body>
<div class="container">
    <h3>This is a container</h3><br>
<?php
$age = 34;
if ($age>18){
echo "you can go for the party";
}
else{
    echo "you are not going for party";
}
$languages = array("Python", "C++", "php", "NodeJs");
echo "<br>";
echo $languages[0];
$a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

    // Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }

    // Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    // For loop
    for ($a=60; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }
	$str = "This this this";
    echo $str. "<br>";
    $lenn = strlen($str);
    echo "The length of this string is ". $lenn . ". Thank you <br>";
    echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";
    echo "The reversed string is ". strrev($str) . ". Thank you <br>";
    echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";
    echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";
    // echo $lenn;
?>
</div>    
</body>
</html>