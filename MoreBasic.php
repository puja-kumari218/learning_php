<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learning</title>

    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
          
    }
    .container {
        max-width: 80%;
        background-color: grey;
        margin:auto;
        padding:20px;
    }
</style>

</head>
<body>
    <div class="container">
        <h1>lets learn php</h1>
        <p>party status</p>
        <?php

        $age =8;
        if($age>18){
            echo "you can go to party";// sach hoga toh ye print krega ni to niche wla
        }
        else if($age==7){
            echo "you are 7 yrs old";
        }

        else if($age==8){
            echo "you are  8 old";
        }

        else{
            echo "you can not go to party";
        }

        // array define 
        $language = array("python","c++","php", "node.js");
        // echo count ($language);
        // echo $language [3];

        //loops in php
        $a=0;

        while ($a <= 10) {
            echo "<br> the value of a is:";
            echo $a;
            $a++;
        }


                // iterating array in php using while loops 
                $a=0;

                while ($a <  count ($language)) {
                    echo "<br> the value of a  language is:";
                    echo $language [$a];
                    $a++;
                }

                //do while
                $a=200;
                do {
                    echo "<br> the value of a is";
                    echo $a;
                    $a++;
                } while ($a <= 10);


                // for loop

                for ($a=0; $a <10; $a++) { 
                    echo "<br> the value of a  from the for loop is";
                    echo $a;


                }

                // for each

                foreach ($language as $value ) {

                    echo "<br>the value is";
                    echo $value;

                }

                // function

                function print5(){
                    echo "5";
                }
                print5();


                function print_number($number){
                    echo "<br> your number is";
                    echo $number;
                }
                print_number(44);



        

        ?>

    </div>
    
</body>
</html>