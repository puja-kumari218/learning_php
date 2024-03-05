<?php
$str = "this";
echo $str ." <br>";
$lenn = strlen($str);
 echo "the length of this string is" . $lenn .". thank you <b>"; //. string contication operator (means kisi string ya integer ko add krna h toh . lga kr add kr skte h)

echo "The number of word in this string is ".str_word_count($str). ".thank you <br>";

echo "the reversed of string is " . strrev($str) . ". thank you <b>"; 

// find word postion
echo "the search for is in this string is  " . strpos($str, "is") . ". thank you <b>"; 

//for functon replace
echo "<br>";

echo "the replaced  string is " . str_replace("is","at" ,$str) . ". thank you <b>"; 


 //echo $lenn;  ye bhi likh skte h . lga kr bho $lenn;(isko bolte h string contination)

 // ek function hota h no.or words count krne ke liye  

?>