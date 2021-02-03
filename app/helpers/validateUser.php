<?php 

function ValidateUser($user){
  
  $errors = array();
     if (empty($user["username"])) {
     	array_push($errors,"username is required");
     } 

     if (empty($user["email"])) {
     	array_push($errors,"email is required");
     } 

     if (empty($user["password"])) {
     	array_push($errors,"password is required");
     }

     if ($user["passwordConf"] !== $user["password"]) {
     	array_push($errors,"password donot match ");
     }


  $existingEmail = selectOne("users", ["email" => $user["email"]]);

  if ($existingEmail) {

     if (isset($user["update-user"]) && $existingEmail["id"] != $user["id"]) {
        array_push($errors,"User with that email already exists. ");
     }

     if (isset($user["register-btn"]) || isset($user["create-admin"])) {
        array_push($errors,"User with that email already exists. ");
     }
     
   }

  return $errors;
}

function ValidateLogin($user){
  
  $errors = array();
     if (empty($user["username"])) {
      array_push($errors,"username is required");
     } 

     if (empty($user["password"])) {
      array_push($errors,"password is required");
     }

  return $errors;
}