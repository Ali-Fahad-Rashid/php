<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
$z = $x *5;
echo "I love $txt!"; 
echo "<h2>PHP is Fun!</h2> ";  
echo "5 + 10 = " . sum(5, 10) . "<br>";

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

/* String */
echo strlen("Hello world!"); // outputs 12
echo str_word_count("Hello world!"); // outputs 2
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo strrev("Hello world!"); // outputs !dlrow olleH
echo strpos("Hello world!", "world"); // outputs 6

<!-- IF -->

if ($x < 20) {
  echo "Have a good day!";
}

<!-- IF , ELSE -->
if ($x < 20) {
    echo "Have a good day!";
  }
else {  
    echo "Have a good night!";
 }

<!-- if elseif else -->

if ($x > 10) {
    echo "Have a good morning!";
  } elseif ($y < 20) {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }


<!-- switch Statement -->

$favcolor = "red";

switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";
      break;
    case "blue":
      echo "Your favorite color is blue!";
      break;
    case "green":
      echo "Your favorite color is green!";
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!";
  }


<!-- while  -->

$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

<!-- Do while  -->

$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);


<!-- for -->

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }

  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }

  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }
  

<!-- Function -->

function writeMsg() {
    echo "Hello world!";
  }
  
  writeMsg();


  function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");


  function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  $xx = sum(12,13);
echo $xx *5 ;


<!-- Array -->
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";




$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
$arrlength = count($cars);

for($i = 0; $i < $arrlength; $i++) {
  echo $cars[$i];
  echo "<br>";}

  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";



$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";



  define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];






<!-- foreach -->

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}



$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

?>