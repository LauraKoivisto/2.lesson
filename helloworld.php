<?php

//Variable starts with $,
// string has to use qoutation marks
//line ends with semicolon
$first_name = "Laura";
$last_name = "Koivisto";

//show code to browser
//For adding up numbers we use + sign
//for adding up strings we use . sign
echo $first_name." ".$last_name;

// >greater than
// <smaller than
// > = greater than or equal
// < = smaller than or equal
// == equal
// != not equal

$age = 5;

//if age is smaller than or equal to 6, then you can sleep at lunchtime
if($age <= 6){


  //it is true
  echo " yes you can sleep at lunchtime";

}else{
  //it is false
  echo " no, you are at school";
  }

   ?>

   <br>

   <?php
 // loop
 for ($i=1; $i <$age; $i=$i+1){

 //if condition is true
   echo $i;

 }

   ?>

   <?php
   date_default_timezone_set('Europe/Helsinki');
   echo "Today is ".date("l d.m.Y H:i");


   ?>
