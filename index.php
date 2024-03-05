<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learning</title>
</head>
<body>
    <div class="container">
        this is my 1st php website
        <?php 

        define ('PI',3.14);
        echo "hellow world and this is php code";
        // single comment
        /* 
        multiline comment
    
         */
        // variable in php

         $variable1 = 4;
         $variable2 = 7;
         echo $variable1;
         echo $variable2;
         echo $variable1 + $variable2;


        //  operator in php
        // airthmetic operatort
        echo "the value of veriable1 + variable2 is";
        echo"<br>";
        echo $variable1 + $variable2;
        echo"<br>";

        echo "the value of veriable1 - variable2 is";
        echo"<br>";
        echo $variable1 - $variable2;
        echo"<br>";
        echo "the value of veriable1 * variable2 is";
        echo"<br>";
        echo $variable1 *  $variable2;
        echo"<br>";
        echo "the value of veriable1 / variable2 is";
        echo"<br>";
        echo $variable1 / $variable2;
        echo"<br>";


        // assignment operatort
$newVar =$variable1;
// $newVar += 1;
// $newVar -= 1;
// $newVar *= 7;
// $newVar /= 2;
echo "the value of new variable is ";
echo $newVar;
echo "<br>";

        // comparison operatort
        // echo "<h1> comparison operator </h1>"; // insert html

        echo "the value of 1==4 is";
        echo var_dump(1==4);
        echo "<br>";
         echo "the value of 1!=4 is";
         echo var_dump(1!=4);
         echo"<br>";
         echo "the value of 1<=4 is";
         echo var_dump(1<=4);
         echo"<br>";
         echo "the value of 1>=4 is";
         echo var_dump(1>=4);



        
        // increment/decrement operatort

echo $variable1--;
echo "<br";
 echo $variable1;
 echo "<br>";

// echo $variable1--;
// echo ++$variable1
// echo --$variable1


        // logical operator

          // and (&&)
          // or (||)
          // xor
          // !(not)
echo "<br>";
        //   $myVar =(true and true);
        // $myVar =(false and true);
        // $myVar =(false and false);
        // $myVar =(true and false);


        // or operator
        // $myVar =(true or false);


        // xor operatort


        $myVar = (true xor true);
        // $myVar = (true xor false);




        echo "<br>";

          echo var_dump($myVar);





          
        ?>


      <?php 
//       data types
// string
// float 
// integer 
// boolean 
// array 
// object 

// 1.STRING
echo "<br> data types <br>";
$var = "this is string";
echo var_dump($var);
// 2.INTEGER
$var = 90;
echo "<br>";
echo var_dump($var);
echo "<br>";
// 3FLOAT
$var =444.8;
echo var_dump($var);
echo "<br>";
//BOOLEAN 
$var = true;
echo var_dump($var);
//ARRAY
//OBJECT
echo PI;

        ?>

        
</div>
</body>
</html>