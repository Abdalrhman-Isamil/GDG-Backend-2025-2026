<?php



echo (int) 15.2 + (int) 14.7 + (10.5 + 10.5); // 50
echo "<br>";
echo gettype((int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5));  // Integer


// =============================================

echo '<pre>';
print_r([
    0 => "ahmed",
    "A" => "mouhammed",
    1 => "adel", "fares",
    10 => "mazen", "osama",
    3 => "ismail","kalid"
    
]);
echo '</pre>';

// ===============================================
echo "<br>";


echo '<pre>';

print_r([

        0 =>"HTML", "css",
        "JS" => "Array",

]);
echo '</pre>';

?>

==============================================


<?php include("test.php") ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    
    <?php $username = "Ahmed Adel"; ?>
    <title>Welcome To <?php echo $usernames ?> </title>
  </head>
  <body>
    <h1><?php echo $usernames ?></h1>
    <p>Here In <?php echo $username ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $username ?> Is The What You Need.</div>
    <footer>All Right Reserved To<?php echo $username ?></footer>
    <br>
    <hr><hr>
  </body>
</html>

<!-- ========================================================= -->


<?php 
echo "<br>";





$a = "ahmed"; 
$b = $a; 


echo $b;    //ahmed
echo "<br>";
echo $a;  // ahmed
echo"<br>";

// &  دايما هتستخدم  a = b لو عاوز قيمه 

      $A = 10;
      $B = &$A;
      $B = 15;  // A => 15 , B => 15
      $A = 2;   // A => 2 , B => 2 

      echo $A , "<br>", $B

?>