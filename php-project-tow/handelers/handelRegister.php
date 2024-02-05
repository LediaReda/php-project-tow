<?php
session_start();
include '../core/functions.php';
include '../core/validations.php';
$errors = [];

if(checkRequestMethod("POST") && checkPostInput('name')){

   foreach($_POST as $key => $value){
      $$key = sanitizeInput($value);
   }


   // validations

   if(!requiredVal($name)){
      $errors[] = "name is required";
   }elseif(!minVal($name,3)){
      $errors[] = "name must be greater than 3 chars";
   }elseif(!maxVal($name,25)){
      $errors[] = "name must be smaller than 25 chars";
   }

   if(empt($errors)){
      echo "elragel dah tmam";
   }else{
      header("location:../register.php");
      die;
   }
   var_dump($errors);

}
   


