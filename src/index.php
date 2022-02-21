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
        echo "3":
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



?>