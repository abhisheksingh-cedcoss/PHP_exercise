<?php
    echo "hello world";
    ?>

<?php
    // openning tags of php

    // second exercise for comment tags //

    /* Multi-line comment*/

    echo "";   
    $txt = "Hello";
    
    $x = 4;
    $y = 5;
    echo $x + $y;

    echo strlen("Hello world");

    echo strrev("Hello world");

    $oldtxt = "Hello World!";
    echo "<br>";
    $newtxt = str_replace("World","Dolly", $oldtxt );

    echo $oldtxt;
    echo $newtxt;
    echo "<br>";

    echo 10*5;
    echo "<br>";
    echo 10/2;
    echo "<br>";

    var_dump($a==$b);
    echo "<br>";

    var_dump($a!=$b);
    echo "<br>";

    $a = 50;
    $b = 10;

    if($a > $b){
        echo "hello world";
    }
    echo "<br>";

    if($a != $b){
        echo "hello world";
    }
    echo "<br>";

    if ($a ==$b){
        echo "yes";
    }
    else{
        echo "no";
    }
    echo "<br>";

    // using if else ladder

    if($a ==$b){
        echo "1";
    }
    elseif($a>$b){
        echo "2";
    }

    else {
        echo "3";
    }

    echo "<br>";

    //using switch case


switch
($color) {
 
case
"red":
   echo "Hello";
   break;
 
case
"green":
   echo "Welcome";
   break;
}

echo "<br>";
    // using default
switch ($color) {
    case "red":
      echo "Hello";
      break;
    case "green":
      echo "Welcome";
      break;
    
  default:
  
      echo "Neither";
  }

  echo "<br>";

  // using while loop

  $i = 1; 

while
 ($i < 6) 
{

  echo $i;
  $i++;
}

$i = 1; 
// using do while loop
do
 {
    echo $i;
    $i++;
} 
while
 ($i < 6);


 echo "<br>";

// using for loop
for
($i = 0; $i < 10; 
$i++
) {
 echo $i;
}

echo "<br>";

$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
  echo $x;
}

echo "<br>";

// function myFunction(){
//     echo "Hi, How are you";
// }

echo "<br>";

// myFunction();

echo "<br>";

function myFunction($fname, $lname) {
    echo $fname;
    echo $lname;

    return $lname;
}
echo "<br>";
$fruits = array("Apple", "Banana", "Orange");
echo count($fruits)

echo "<br>";
$fruits = array("Apple", "Banana", "Orange");
echo $fruits[1];

echo "<br>";
$age = array("Peter"
=>"35", "Ben"=>"37", "Joe"=>"43");
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Ben is " . $age['Ben'] . " years old.";

echo "<br>";

foreach($age  as $x => $y) {
    echo "Key=" .$x. ", Value=" .$y;
}
//

$colors = array("red", "green", "blue", "yellow"); 
sort($colors);






?>