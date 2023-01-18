<?php

// PHP functions are not case sensitive.
// Variables are Case sensitive. 

$name = "adnane";
$Name = "name";

echo $Name . " - name";
echo "<br></br>";
echo "My name is " . $name;
// var_dump($name);
// echo(pi());
echo "<br></br>";
define("DEMO", "this is a demo");
echo DEMO;

// constants are global.
echo "<br></br>";
define("students", ["adnane", "hicham", "demo"]);
echo students[0];

// operators.
$x = 10;
$y = 5;
$day = 1;

if ($day = 1) {
 echo " Having a good Monday";
} else {
    echo "Having a good Weekend";
}

echo "<br></br>";

// Switch Case
switch($day) {
    case 1 : 
        echo "Monday";
        break;
    case 2 : 
        echo "Tuesday";
        break;
    case 3 : 
        echo "Wendensday";
        break;
}


// Loops 
$alpha = 0;
while($alpha <= 10) {
  echo "The number is: $alpha <br>";
  $alpha++;
}

// for ($z = 0; $z <=10; $x++  ) {
// //  echo "number" . $x;
// }

// simple function
function phpFunction () {
    echo "<br></br>";
    echo "The function has been executed.";
}

phpFunction();

function functionParam($fname, $age) {
    echo "<br></br>";
    if (is_int($age)) {
        echo "My name is $fname and my age is $age";
    } else {
        echo "Error age should be a number.";
    }
   
}
functionParam("adnane", "twenty");


echo "<br></br>";

$class = array("adnane", "user1", "user2");
echo "$class[1]";


// Globals
echo "<br>";
echo " User using " . $_SERVER['HTTP_USER_AGENT'] . " as user agent.";
echo "<br>";


?>