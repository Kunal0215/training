<?php

    $lname= $_POST['lname'];
    $fname= $_POST['fname'];   
      if(empty($lname) || empty($fname)){
     echo "FIELDS ARE BLANK, PLEASE FILL";
     include "hello.php";
 }
 else if(ctype_alpha($fname) && ctype_alpha($lname)){
 	echo "HELLO, ".$fname." ". $lname; }
 else{
 	   echo "NUMBERS NOT ALLOWED";
   include "hello.php";
 }

  ?>