<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Arithmetic Operators
    - Used To Do Arithmetical Operations &#038; Conversion

    - $a [+]  $b => Addition
    - $a [-]  $b => Subtraction
    - $a [*]  $b => Multiplication
    - $a [/]  $b => Division
    - $a [%]  $b => Modulus
    - $a [**] $b => Exponentiation
    - +$a        => Identity
    - -$a        => Negation
  */

  echo 10 + 20;
  echo '<br>';
  echo gettype(10 + 20);
  echo '<br>';
  echo 9.5 + 20.5;
  echo '<br>';
  echo gettype(9.5 + 20.5);
  echo '<br>';

  echo 10 - 20;
  echo '<br>';
  echo gettype(10 - 20);
  echo '<br>';
  echo 9.5 - 20.5;
  echo '<br>';
  echo gettype(9.5 - 20.5);
  echo '<br>';

  echo 10 * 20;
  echo '<br>';
  echo gettype(10 * 20);
  echo '<br>';
  echo 9.5 * 20.5;
  echo '<br>';
  echo gettype(9.5 * 20.5);
  echo '<br>';

  echo 20 / 10;
  echo '<br>';
  echo gettype(20 / 10);
  echo '<br>';
  echo 20 / 8;
  echo '<br>';
  echo gettype(20 / 8);
  echo '<br>';

  echo 21 % 10; // Remove 1 To Become 20
  echo '<br>';
  echo 23 % 10; // Remove 3 To Become 20
  echo '<br>';
  echo 29 % 10; // Remove 9 To Become 20
  echo '<br>';
  echo 30 % 10;
  echo '<br>';

  echo 2 ** 4;
  echo '<br>';
  echo 2 * 2 * 2 * 2;
  echo '<br>';
  echo 3 ** 5;
  echo '<br>';
  echo 3 * 3 * 3 * 3 * 3;
  echo '<br>';

  echo "100";
  echo '<br>';
  echo gettype("100");
  echo '<br>';
  echo +"100";
  echo '<br>';
  echo gettype(+"100");
  echo '<br>';

  echo "-100";
  echo '<br>';
  echo gettype("-100"); //-100
  echo '<br>';
  echo -"-100";  // 100 علامه السالب هنا بتعكس الاشاره 
  echo '<br>';
  echo gettype(-"-100");



//   =================================================







  /*
    Operators
    - Used To Perform Operations On Values.

    Assignment Operators
    - Used To Write Value To Another

    - $a [+=]  $b => Addition
    - $a [-=]  $b => Subtraction
    - $a [*=]  $b => Multiplication
    - $a [/=]  $b => Division
    - $a [%=]  $b => Modulus
    - $a [**=] $b => Exponentiation
  */

  $a = 10;
  // $a = $a + 20;
  $a += 20;

  $b = 20;
  // $b = $b - 5;
  $b -= 5;

  $c = 4;
  // $c = $c ** 4;
  $c **= 4;

  echo $a;
  echo '<br>';
  echo $b;
  echo '<br>';
  echo $c;



//   ============================================




var_dump( 100 === (int) "100");
  echo '<br>';
var_dump( 100 === "100");   // هنا انت بتقارن قيمه و نوع  === التريبل 




  /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 1
    - ==    => Equal
    - !=    => Not Equal
    - <>    => Not Equal
    - ===   => Identical
    - !==   => Not Identical
  */

  // Test Equal
  var_dump(100 == 100);
  echo '<br>';
  var_dump(100 == "100");
  echo '<br>';
  var_dump(100.0 == "100");
  echo '<br>';
  var_dump(100.0 != "100");
  echo '<br>';
  var_dump(100.0 <> "100");

  echo '<br>';
  echo '##############';
  echo '<br>';

  // Test Identical
  var_dump(100 === 100);
  echo '<br>';
  var_dump(100 === "100");
  echo '<br>';
  var_dump(100.0 === "100");
  echo '<br>';
  var_dump(100.0 === 100);
  echo '<br>';
  var_dump(100.0 !== "100");
  echo '<br>';
  var_dump(100.0 !== 100);



//   ============================================================



echo "<br>";


$a = "ahmed ";
$a .= "adel";
$a .= " fathy";   // هنا الدوت بتضيف القيمه المسبقه علي الحاليه

echo $a;